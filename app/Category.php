<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";
    protected $fillable = ['name', 'detail','photo_id'];

    public function photo($id){
        $count=Photo::Where('id',$id)->count();
        if($count==0){
            return 'default.jpg';
        }else{
            return Photo::where('id',$id)->first('file')->file;
        }
        
       
    }
}
