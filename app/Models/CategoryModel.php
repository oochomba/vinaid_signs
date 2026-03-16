<?php

namespace App\Models;

use App\Models\SubCategoryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'category';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'status',
        'is_delete',
        'created_by',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public static function getSingle($id)
    {
        return self::find($id);
    }
    public static function getRootCategories()
    {
        return self::select('category.*')
            ->where(['parent_id' => 0, 'category.is_delete' => 0, 'category.status' => 0])
            ->orderBy('name', 'asc')
            ->get();
    }

    public static function getCategories()
    {
        return self::select('category.*')
            ->where(['parent_id' => 0, 'category.is_delete' => 0, 'category.status' => 0])
            ->orderBy('name', 'asc')
            ->get();
    }

    /**
     * categories parent without sub categories
     */
    public static function getCategoriesParentId($parent_id)
    {
        return self::select('category.*')
            ->where(['parent_id' => $parent_id, 'category.is_delete' => 0, 'category.status' => 0])
            ->orderBy('name', 'asc')
            ->get();
    }
    public function getImageSingle($category_id)
    {
        return ProductImageModel::where('category_id', $category_id)->orderBy('order_by', 'asc')->first();
    }

    public function getImage()
    {
        return $this->hasMany(ProductImageModel::class, 'category_id')->orderBy('order_by', 'asc');
    }
    public function getImagesLimit($category_id, $limit = null)
    {
        return ProductImageModel::where('category_id', $category_id)->orderBy('order_by', 'asc');
    }

    public  function related()
    {
        return $this->hasMany(CategoryModel::class, 'parent_id');
    }
    public static function tree()
    {
        $allCategories = CategoryModel::where(['status' => 0, 'is_delete' => 0])->orderBy('name', 'asc')->get();
        $rootCategories = $allCategories->where('parent_id', 0);
        self::formatTree($rootCategories, $allCategories);
        return $rootCategories;
    }

    private static function formatTree($categories, $allCategories)
    {
        foreach ($categories as $category) {
            $category->children = $allCategories->where('parent_id', $category->id)->values();
            if (!empty($category->children)) {
                self::formatTree($category->children, $allCategories);
            }
        }
    }
    public static function getSubCategoriesByParentId($parent_id)
    {
        $allCategories = CategoryModel::where(['status' => 0, 'is_delete' => 0])->orderBy('name', 'asc')->get();
        $rootCategories = $allCategories->where('parent_id', $parent_id);
        self::formatTree($rootCategories, $allCategories);
        return $rootCategories;
    }

    public static function checkSlugExistsOnEdit($id, $slug)
    {
        return self::where('slug', $slug)
            ->where('id', '!=', $id)
            ->get()
            ->first();
    }
}
