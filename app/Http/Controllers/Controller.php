<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\SettingModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    var $version;
    var $data;
    var $setting;
    function __construct()
    {
        $this->version = config('siteconfig.version');
        $this->data['version'] = $this->version;
        $this->setting = SettingModel::getSingle();
        $this->data['setting'] = $this->setting;
        $this->data['rootCategories'] = CategoryModel::getRootCategories();
    }
}
