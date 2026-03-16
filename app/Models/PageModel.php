<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageModel extends Model
{
    use HasFactory;
    protected $table = 'page';

    protected $fillable = [
        'title',
        'name',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];


    public static function getRecord($by='')
    {
        $return= self::select('page.*');
        if($by=='front'){
            $return=$return->where(['status'=>0]);
        }
         $return=$return->orderBy('page.created_at', 'desc')->get();
         return $return;
    }
    public static function getSingle($id){
        return self::find($id);
    }

    public static function findBySlug($slug){
        return self::where(['slug'=>$slug,'status'=>0])->first();
    }

    public function getImageInfo()
    {
     
        if (!empty($this->image_name) && file_exists('uploads/pages/' . $this->image_name)) {
            return url('uploads/pages/' . $this->image_name);
        } else {
            return '';
        }
    }

}
