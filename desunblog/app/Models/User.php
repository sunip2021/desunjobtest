<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table='users';
    protected $guarded=[];
    public $timestamps=false;
    public static function saveUser($data) {
        $query=User::create($data);
        if($query) {
            return true;
        }
    }
    public static function login($where) {
        $query=User::where($where)
        ->first();
        if($query) {
             return $query;
        }
    }
}
