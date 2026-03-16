<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\ProductModel;
use App\Models\ColorModel;
use App\Models\BrandModel;

class PoductController extends Controller
{
    var $data;

    public function all()
    {
        $this->data['meta_title'] = 'Our Services';
        $this->data['services'] = CategoryModel::getRootCategories();
        return view($this->version."product.all", $this->data);
    }

    public function index($slug, $sub_slug = '', $sub_subslug = '',)
    {
        $getProductSingle = ProductModel::getSingleSlug($slug);

        $getCategory = CategoryModel::where(['slug' => $slug, 'status' => 0, 'is_delete' => 0])->first();
        $getSubcategory = CategoryModel::where(['slug' => $sub_slug, 'status' => 0, 'is_delete' => 0])->first();
        $getSubSubcategory = CategoryModel::where(['slug' => $sub_subslug, 'status' => 0, 'is_delete' => 0])->first();

        if (!empty($getProductSingle)) {
            $this->data['meta_title'] = $getProductSingle->title;
            $this->data['meta_description'] = $getProductSingle->short_description;
            $this->data['product'] = $getProductSingle;
            $this->data['relatedProducts'] = ProductModel::getRelatedProducts($getProductSingle->id, $getProductSingle->sub_category_id);
            return view($this->version."product.detail", $this->data);
        } elseif (!empty($getCategory) && !empty($getSubcategory) && !empty($getSubSubcategory)) {
            $this->data["getSubCategoryFilter"] = CategoryModel::where(['parent_id' => $getSubSubcategory->parent_id, 'status' => 0, 'is_delete' => 0])
                ->orderBy('name', 'asc')
                ->get();
            $this->data['category'] = $getSubSubcategory;
            $this->data['root_category'] = $getCategory;

            $this->data['sub_root_category'] = $getSubcategory;

            $this->data['meta_title'] = $getSubcategory->meta_title;
            $this->data['meta_description'] = $getSubcategory->meta_description;
            $this->data['meta_keywords'] = $getSubcategory->meta_keywords;
            return view($this->version."product.index", $this->data);
        } elseif (!empty($getCategory) && !empty($getSubcategory)) {
            $this->data["getSubCategoryFilter"] = CategoryModel::where(['parent_id' => $getSubcategory->parent_id, 'status' => 0, 'is_delete' => 0])
                ->orderBy('name', 'asc')
                ->get();
            $this->data['category'] = $getSubcategory;
            $this->data['root_category'] = $getCategory;

            $this->data['meta_title'] = $getSubcategory->meta_title;
            $this->data['meta_description'] = $getSubcategory->meta_description;
            $this->data['meta_keywords'] = $getSubcategory->meta_keywords;
            return view($this->version."product.index", $this->data);
        } elseif (!empty($getCategory)) {
            // dd('category');
            $this->data["getSubCategoryFilter"] = CategoryModel::where(['parent_id' => 0, 'status' => 0, 'is_delete' => 0])
                ->orderBy('name', 'asc')
                ->get();

            $this->data['category'] = $getCategory;

            $this->data['meta_title'] = $getCategory->meta_title;
            $this->data['meta_description'] = $getCategory->meta_description;
            $this->data['meta_keywords'] = $getCategory->meta_keywords;
            return view($this->version."product.index", $this->data);
        } else {
            abort(404);
        }
    }


    public function productFilterAjax(Request $request)
    {
        $products = ProductModel::getProduct();
        $page = 0;
        if (!empty($products->nextPageUrl())) {
            $parseUrl = parse_url($products->nextPageUrl());
            if (!empty($parseUrl['query'])) {
                parse_str($parseUrl['query'], $get_array);
                $page = !empty($get_array['page']) ? $get_array['page'] : 0;
            }
        }
        $this->data['page'] = $page;

        return response()->json([
            "status" => true,
            "page" => $page,
            "success" => view("product._list_ajax", [
                "products" => $products,
            ])->render(),
        ], 200);
    }

    public function searchProduct(Request $request)
    {
        $this->data["getColor"] = ColorModel::where(['status' => 0, 'is_delete' => 0])
            ->orderBy('name', 'asc')
            ->get();

        $this->data["brands"] = BrandModel::where(['status' => 0, 'is_delete' => 0])
            ->orderBy('name', 'asc')
            ->get();



        $this->data['meta_title'] = request()->get('q');
        $this->data['meta_description'] = '';
        $this->data['meta_keywords'] = '';
        $products = ProductModel::getProduct();

        $page = 0;
        if (!empty($products->nextPageUrl())) {
            $parseUrl = parse_url($products->nextPageUrl());
            if (!empty($parseUrl['query'])) {
                parse_str($parseUrl['query'], $get_array);
                $page = !empty($get_array['page']) ? $get_array['page'] : 0;
            }
        }
        $this->data['page'] = $page;

        $this->data['products'] = $products;
        return view($this->version."product.index", $this->data);
    }


    public function projects()
    {
        $this->data['meta_title'] = 'Our Projects';

        $this->data['projects'] = ProductModel::getProduct();
        return view($this->version."projects.index", $this->data);
    }

    public function view_detail($slug)
    {
        $project = ProductModel::getSingleSlug($slug);
        if (empty($project)) {
            return redirect('projects')->with('error', 'Sorry! Something went wrong while viewing this project. Please try again later');
        }
        $this->data['meta_title'] = $project->title;
        $this->data['project'] = $project;
        return view($this->version."projects.detail", $this->data);
    }
  
}
