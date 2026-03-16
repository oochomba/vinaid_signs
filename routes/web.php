<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MockupController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RolesController;

use App\Http\Controllers\HomeController;


use App\Http\Controllers\PoductController as ProductFront;
use App\Http\Controllers\DashboardController as DashboardFront;

use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CustomerMiddleware;
use Illuminate\Support\Facades\Route;

/**
 * admin routes
 */
Route::get('admin', [AuthController::class, 'login_admin'])->name('admin.login');
Route::post('admin', [AuthController::class, 'auth_login_admin']);
Route::get('admin/logout', [AuthController::class, 'auth_guard_logout_admin']);


Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('customer-contacts', [DashboardController::class, 'customer_contacts']);
    Route::get('banners', [DashboardController::class, 'banner_list']);
    Route::get('add-banner', [DashboardController::class, 'banner_add']);
    Route::post('add-banner', [DashboardController::class, 'banner_store']);
    Route::get('edit-banner/{id}', [DashboardController::class, 'edit_banner']);
    Route::post('edit-banner/{id}', [DashboardController::class, 'banner_update']);
    Route::post('delete-banner/{id}', [DashboardController::class, 'delete_banner']);
    Route::post('delete-banner-record/{id}', [DashboardController::class, 'delete_banner_record']);



    Route::get('admin/list', [AdminController::class, 'index']);
    Route::get('admin/add', [AdminController::class, 'add']);
    Route::post('admin/add', [AdminController::class, 'store']);
    Route::get('admin/edit/{id}', [AdminController::class, 'edit']);
    Route::post('admin/edit/{id}', [AdminController::class, 'update']);
    Route::post('admin/delete/{id}', [AdminController::class, 'delete']);


    Route::get('roles', [RolesController::class, 'index']);
    Route::get('roles/add', [RolesController::class, 'add']);
    Route::post('roles/add', [RolesController::class, 'store']);
    Route::get('roles/edit/{id}', [RolesController::class, 'edit']);
    Route::post('roles/edit/{id}', [RolesController::class, 'update']);
    Route::post('roles/delete/{id}', [RolesController::class, 'delete']);

    Route::get('permission', [RolesController::class, 'permission']);
    Route::get('permission/add', [RolesController::class, 'permission_add']);
    Route::post('permission/add', [RolesController::class, 'permission_store']);
    Route::post('permission/add-crud', [RolesController::class, 'permission_store_crud']);
    Route::post('permission/delete/{id}', [RolesController::class, 'permission_delete']);




    Route::get('category/list', [CategoryController::class, 'index']);
    Route::get('category/add', [CategoryController::class, 'add']);
    Route::post('category/add', [CategoryController::class, 'store']);
    Route::get('category/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('category/edit/{id}', [CategoryController::class, 'update']);
    Route::post('category/delete/{id}', [CategoryController::class, 'delete']);
    Route::post('get_category_child', [CategoryController::class, 'get_sub_category']);
    Route::post('get_sub_category_child', [CategoryController::class, 'get_sub_category_child']);
    Route::post('category/del_category_image/{id}', [CategoryController::class, 'del_category_image']);





    Route::get('product/list', [ProductController::class, 'index']);
    Route::get('product/add', [ProductController::class, 'add']);
    Route::post('product/add', [ProductController::class, 'store']);
    Route::get('product/edit/{id}', [ProductController::class, 'edit']);
    Route::post('product/edit/{id}', [ProductController::class, 'update']);
    Route::post('product/del_product_image/{id}', [ProductController::class, 'deleteProductImage']);
    Route::post('product_image_sortable', [ProductController::class, 'productImageSortable']);
    Route::post('get_category_child_p', [ProductController::class, 'get_sub_category']);
    Route::post('get_sub_category_child_p', [ProductController::class, 'get_sub_category_child']);
    Route::post('search-product', [ProductController::class, 'search_product']);


    Route::get('mockup/list', [MockupController::class, 'index']);
    Route::get('mockup/add', [MockupController::class, 'add']);
    Route::post('mockup/add', [MockupController::class, 'store']);
    Route::get('mockup/edit/{id}', [MockupController::class, 'edit']);
    Route::post('mockup/edit/{id}', [MockupController::class, 'update']);
    Route::post('mockup/delete/{id}', [MockupController::class, 'delete']);

    Route::get('page/list', [PageController::class, 'list']);
    Route::get('page/edit/{id}', [PageController::class, 'edit']);
    Route::post('page/edit/{id}', [PageController::class, 'update']);


    Route::get('system-setting', [PageController::class, 'system_setting']);
    Route::post('system-setting', [PageController::class, 'update_system_setting']);

    Route::get('smtp-setting', [PageController::class, 'smtp_setting']);
    Route::post('smtp-setting', [PageController::class, 'update_smtp_setting']);
});

Route::group(['middleware' => 'auth:customer'], function () {
    Route::get('dashboard', [DashboardFront::class, 'index']);
});


Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact', [HomeController::class, 'contact_post']);
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('projects', [ProductFront::class, 'projects'])->name('projects');
Route::get('portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::post('newsletter-subscription', [HomeController::class, 'newsletter_subscription']);
Route::get('subscriber/verify/{token}/{email}', [HomeController::class, 'subscriber_verify']);

Route::get('faq', [HomeController::class, 'faq']);
Route::get('terms-conditions', [HomeController::class, 'terms_conditions']);
Route::get('privacy-policy', [HomeController::class, 'privacy_policy']);

Route::get('detail/{slug}', [ProductFront::class, 'view_detail']);
Route::get('services', [ProductFront::class, 'all']);

Route::get('mockup/{slug}', [HomeController::class, 'get_mockup']);

Route::get('{category?}/{subcategory?}/{subsubcategory?}', [ProductFront::class, 'index']);
