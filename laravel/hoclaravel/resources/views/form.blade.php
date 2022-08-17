@extends('layouts/client');
@section('content')
     @if (session('msg'))
     <div class="alert alert-success">{{'msg'}}</div>
     @endif
     <h1>{{$title}}</h1>
     <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th width="20%">Thời gian tham gia</th>
                <th with="10%">Sửa</th>
                <th with="10%">Xóa</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($userslist))
            @foreach ($userslist as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->fullname}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->create_at}}</td>
                <td>
                    <a href="" class="btn btn-warning btn-sm">Sửa</a>
                </td>
                <td>
                    <a href="" class="btn btn-danger btn-sm">Xóa</a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6">Không có người dùng</td>
            </tr>
            @endif
        </tbody>
     </table>
     <hr>
     <a href="{{route('upload')}}" class= "btn btn-primary">Thêm người dùng</a>

@endsection