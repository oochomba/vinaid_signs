<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImageModel extends Model
{
    use HasFactory;
    protected $table = 'product_image';

    public function getImageInfo()
    {

        if (!empty($this->image_name) && file_exists('uploads/products/' . $this->image_name)) {
            return url('uploads/products/' . $this->image_name);
        } else {
            return '';
        }
    }
    public function getImageInfoUnlink()
    {

        if (!empty($this->image_name) && file_exists('uploads/products/' . $this->image_name)) {
            return  'uploads/products/' . $this->image_name;
        } else {
            return '';
        }
    }

    public static function getGallery()
    {
        return self::select('product_image.*', 'category.name as category_name', 'category.slug as category_slug')
            ->join('category', 'category.id', '=', 'product_image.category_id')
            ->whereNotNull('category_id')
            ->groupBy('product_image.category_id')
            ->orderBy("product_image.order_by", "desc")
            ->limit(12)
            ->get();
    }

      public function getCategory()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }
      public function getParent($id)
    {
        return CategoryModel::find($id);
    }
}
