@extends('layouts/client');
@section('content')
     @if (session('msg'))
     <div class="alert alert-success">{{'msg'}}</div>
     @endif
     @if ($errors->any())
     <div class="alert alert-danger"> Dữ liệu nhập vào không hợp lệ</div>
     @endif
     <h1>{{$title}}</h1>
     <form action="{{route('handle')}}" method="post">
                <div class="mb-3">
                    <label for="">Họ và tên</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Họ và tên..." value="{{old('fullname')}}"/>
                    @error('fullname')
                    <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email cua bạn..."value="{{old('email')}}"/>
                    @error('email')
                    <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Thêm người dùng</button>
                <a href="" class="btn btn-warning">Quay lại</a>
                @csrf
            </form>
@endsection