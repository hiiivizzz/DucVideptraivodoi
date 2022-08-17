<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Users;


class Homecontroller extends Controller
{
    //public function __construct()
    //{
        //$this->users= new Users();
    //}
    
    public function index(Request $request)
    {
        $alldata=$request->all();
        dd($alldata);
        return view('home');
    }
    //USERS
    public function post()
    {
        $title= 'Danh sách người dùng';
        $users= new Users();
        $userslist= $users->Getalluser();
        //dd($users);
        return view('form',compact('title','userslist'));
    }
    public function upload()
    {
        $title ='Thêm người dùng'; $users= new Users();

        return view('layouts/users',compact('title'));
    }
    public function handle(Request $request)
    {
        $users= new Users();
        $request->validate([
            'fullname'=>'required|min:6',
            'email'=>'required|email'
        ],[
            'fullname.required'=>'họ và tên bắt buộc phải nhập',
            'fullname.min'=>'họ và tên không được nhỏ hơn :min ký tự',
            'email.required'=>'email bắt buộc phải nhập',
            'email.email'=>':email không đúng định dạng'
        ]
        );
        $dataInsert =[
            $request->fullname,
            $request->email,
            date('Y-m-d H:i:s')
        ];
        
        $users->addUser($dataInsert);
        //return redirect()->route('san-pham')->with('msg','Thêm người dùng thành công');
    }

    //
    public function lol()
    {
        return view('test');
    }
    public function chill()
    {
        return view('layouts/client');
    }
    public function downloadimage(Request $request)
    {
        if (!empty($request->image)) {
            $image = trim($request->image);
            $filename= 'image_'.uniqid().'.jpg';
            return response()->streamDownload(function () use($image){
                $imageContent= file_get_contents($image);
                echo $imageContent;
        },$filename);
    }
    }
    public function downloadimage2(Request $request)
    {
        if (!empty($request->image)) {
            $image = trim($request->image);
            $filename= 'image_'.uniqid().'.jpg';
            return response()->Download($image,$filename);
    }
    }
    public function getadd()
    {
        //$users=DB::select('select * from user');
        //dd($users);
        return view('layouts/add');
    }
    public function postadd(ProductRequest $request)
    {
        dd($request->all());
    }
}