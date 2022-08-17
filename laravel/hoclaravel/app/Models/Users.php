<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Users extends Model
{
    use HasFactory;
    protected $table= 'users';
    public function Getalluser()
    {
        $users=DB::select('SELECT * FROM product');
        return $users;
    }
    public function addUser($data){
        DB::insert('INSERT INTO product(fullname, email,create_at) VALUES(?, ?, ?)', $data);
    }
}
