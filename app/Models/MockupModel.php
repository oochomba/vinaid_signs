<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MockupColorModel;
use App\Models\MockupSizeModel;
use App\Models\ProductImageModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Request;

class MockupModel extends Model
{
    use HasFactory;
    protected $table = 'mockup';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'status',
        'is_delete',
        'created_by',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'tag',
    ];

    static public function getSingle($id)
    {
        return self::find($id);
    }

    public function getImage()
    {
        return $this->hasMany(ProductImageModel::class, 'mockup_id')->orderBy('order_by', 'asc');
    }
    public function getImageBefore()
    {
        return $this->hasMany(ProductImageModel::class, 'mockup_id')
            ->where(['mockup_before_after' => 0])
            ->orderBy('order_by', 'asc');
    }
    public function getImageBeforeAfterSingle($mockup_id, $state)
    {
        return ProductImageModel::where([
            'mockup_id' => $mockup_id,
            'mockup_before_after' => $state
        ])
            ->orderBy('order_by', 'asc')
            ->first();
    }
    public function getImageAfter()
    {
        return $this->hasMany(ProductImageModel::class, 'mockup_id')
            ->where(['mockup_before_after' => 1])
            ->orderBy('order_by', 'asc');
    }

    public function getImageSingle($mockup_id)
    {
        return ProductImageModel::where('mockup_id', $mockup_id)->orderBy('order_by', 'asc')->first();
    }

    static public function getRelatedMockups($id)
    {
        $return = MockupModel::select('mockup.*', 'category.slug as category_slug', 'sub_category.name as sub_category_name', 'sub_category.slug as sub_category_slug')
            ->where(['mockup.is_delete' => 0, 'mockup.status' => 0])
            ->where('mockup.id', '!=', $id)
            ->groupBy('mockup.id')
            ->orderBy("mockup.id", "desc")
            ->limit(12)
            ->get();
        return $return;
    }

    static public function getSingleSlug($slug)
    {
        return self::select('mockup.*')
            ->where(['mockup.slug' => $slug, 'mockup.status' => 0, 'mockup.is_delete' => 0])
            ->first();
    }

    static public function getMockup($limit = '')
    {
        $return = MockupModel::select('mockup.*', 'users.name as created_by_name')
            ->join('users', 'users.id', '=', 'mockup.created_by')
            ->where(['mockup.is_delete' => 0, 'mockup.status' => 0])
            ->orderBy("mockup.id", "desc");
        if (!empty($limit)) {
            $return = $return->limit($limit)->get();
        } else {
            $return = $return->get();
        }
        return $return;
    }
}
