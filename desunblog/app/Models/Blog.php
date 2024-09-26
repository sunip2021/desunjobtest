<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table='blog';
    protected $guarded=[];
    public $timestamps=false;
    public static function saveBlog($data) {
        $query=Blog::create($data);
        if($query) {
            return true;
        }
    }
}
