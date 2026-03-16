<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class SettingModel extends Model
{
    use HasFactory;
    protected $table = 'setting';

    public static function getCurrency()
    {
        return (object)config('siteconfig.currency');
    }

    public static function getSingle()
    {
        return self::find(1);
    }
    public static function getRecord()
    {
        return self::select('setting.*')->get();
    }
    public function getLogo()
    {
        if (!empty($this->logo) && file_exists('uploads/setting/' . $this->logo)) {
            return url('uploads/setting/' . $this->logo);
        } else {
            return '';
        }
    }
    public function getFavicon()
    {
        if (!empty($this->favicon) && file_exists('uploads/setting/' . $this->favicon)) {
            return url('uploads/setting/' . $this->favicon);
        } else {
            return '';
        }
    }
    public function getFooterLogo()
    {
        if (!empty($this->footer_logo) && file_exists('uploads/setting/' . $this->footer_logo)) {
            return url('uploads/setting/' . $this->footer_logo);
        } else {
            return '';
        }
    }
    public static function validate_phone_number($phone)
    {
        $phone = (substr($phone, 0, 1) == "+") ? str_replace("+", "", $phone) : $phone;
        $phone = (substr($phone, 0, 1) == "0") ? preg_replace("/^0/", "254", $phone) : $phone;
        $phone = (substr($phone, 0, 1) == "7") ? "254{$phone}" : $phone;
        return $phone;
    }

    public static function captchaSum()
    {
        $first_number = mt_rand(0, 9);
        $second_number = mt_rand(0, 9);
        Session::put('total_sum', $first_number + $second_number);

        $data = [
            'first_number' => $first_number,
            'second_number' => $second_number
        ];
        return $data;
    }
}
