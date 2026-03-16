<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductColorModel;
use App\Models\ProductSizeModel;
use App\Models\ProductImageModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Request;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'product';
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

    public function getColor()
    {
        return $this->hasMany(ProductColorModel::class, 'product_id');
    }

    public function getSize()
    {
        return $this->hasMany(ProductSizeModel::class, 'product_id');
    }
    public function getImage()
    {
        return $this->hasMany(ProductImageModel::class, 'product_id')->orderBy('order_by', 'asc');
    }

    public function getImageSingle($product_id)
    {
        return ProductImageModel::where('product_id', $product_id)->orderBy('order_by', 'asc')->first();
    }

    static public function getRelatedProducts($id, $sub_category_id)
    {
        $return = ProductModel::select('product.*', 'category.name as category_name', 'category.slug as category_slug', 'sub_category.name as sub_category_name', 'sub_category.slug as sub_category_slug')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('sub_category', 'sub_category.id', '=', 'product.sub_category_id')
            ->where(['product.is_delete' => 0, 'product.status' => 0, 'product.sub_category_id' => $sub_category_id])
            ->where('product.id', '!=', $id)
            ->groupBy('product.id')
            ->orderBy("product.id", "desc")
            ->limit(12)
            ->get();
        return $return;
    }

    static public function getSingleSlug($slug)
    {
        return self::select('product.*','category.name as category_name','category.slug as category_slug')
        ->join('category', 'category.id', '=', 'product.category_id')
        ->where(['product.slug' => $slug, 'product.status' => 0, 'product.is_delete' => 0,'category.status' => 0,'category.is_delete' => 0])
        ->first();
    }
    public function getCategory()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }
    public function getSubCategory()
    {
        return $this->belongsTo(CategoryModel::class, 'sub_category_id');
    }
    public function getSubSubCategory()
    {
        return $this->belongsTo(CategoryModel::class, 'sub_subcategory_id');
    }
    static public function getProduct($limit='')
    {
        $return = ProductModel::select('product.*', 'category.name as category_name', 'users.name as created_by_name')
            ->join('users', 'users.id', '=', 'product.created_by')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->where(['product.is_delete' => 0, 'product.status' => 0])
            ->orderBy("product.id", "desc");
            if(!empty($limit)){
                $return=$return->limit($limit)->get();
            }else{
                $return=$return->get();
            }
        return $return;
    }
}