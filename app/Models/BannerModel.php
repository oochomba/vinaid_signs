<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductModel;

class BannerModel extends Model
{
    use HasFactory;
    protected $table = 'banner';

    public static function getRecord()
    {
        return self::select('banner.*', 'product.title as product_name')
            ->join('product', 'product.id', '=', 'banner.product_id')
            ->where(['banner.is_delete' => 0, 'product.is_delete' => 0, 'product.status' => 0])
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public static function getSingle($id)
    {
        return self::select('banner.*', 'product.title as product_name', 'product.slug as product_slug')
            ->join('product', 'product.id', '=', 'banner.product_id')
            ->where(['banner.id' => $id, 'banner.is_delete' => 0, 'banner.status' => 0])
            ->get()
            ->first();
    }

    public function getImageSingle($banner_id)
    {
        return ProductImageModel::where('banner_id', $banner_id)->orderBy('order_by', 'asc')->first();
    }

    public function getImage()
    {
        return $this->hasMany(ProductImageModel::class, 'banner_id')->orderBy('order_by', 'asc');
    }

    public function mapType($type)
    {
        $configTypes = config('siteconfig.banner_type');
        return array_key_exists($type, $configTypes) ? $configTypes[$type] : '';
    }

    public static function getBunnerType($type, $limit = '')
    {
        $return = self::select(
            'banner.*',
            'product.title as product_name',
            'product.slug as product_slug',
        )
            ->join('product', 'product.id', '=', 'banner.product_id')
            ->where(['banner.type' => $type, 'banner.is_delete' => 0, 'banner.status' => 0]);
        if (!empty($limit)) {
            $return = $return->limit($limit);;
        }
        $return = $return->orderBy('created_at', 'desc');
        if (!empty($limit) && $limit == 1) {
            $return = $return->get()->first();
            return $return;
        }
        $return = $return->get();
        return $return;
    }
}
