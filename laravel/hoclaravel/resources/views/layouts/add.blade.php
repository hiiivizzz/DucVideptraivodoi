@extends('layouts/client');
@section('content')
<div class="container">
<div class="container">
           <p class =" d-flex justify-content-end align-items-center" ><img src="https://1.bp.blogspot.com/-NZVobJ83QAM/XQ6219OX-YI/AAAAAAAAGjo/2eg2P-6pijQYSUIqPwIarTifdiRHYS7dgCLcBGAs/s1600/55613186_155004592188674_5621151157171781632_n.jpg" alt=""></p>
            <style>
                img{
                    max-width: 100%;
                    height: auto;
                }
            </style>
            <p><a href="{{Route('download-image').'?image=https://1.bp.blogspot.com/-NZVobJ83QAM/XQ6219OX-YI/AAAAAAAAGjo/2eg2P-6pijQYSUIqPwIarTifdiRHYS7dgCLcBGAs/s1600/55613186_155004592188674_5621151157171781632_n.jpg'}}" class="btn btn-primary">Download Ảnh</a></p>
            <!--<p><a href="{{Route('downloadimage').'?image='.public_path('storage/1.PNG')}}" class="btn btn-primary">Download Ảnh</a></p>-->
           </div>
           </div>
            <form action="" method="post" id="product-form">
                @error ('msg')
                <div class="alert alert-danger tex-center">
                    {{$message}}
                </div>
                @enderror
                <h1 class="tex-center">Nhập thông tin sản phẩm</h1>
                <div class="mb-3">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Thêm sản phẩm..."/>
                    @error('product_name')
                    <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Giá sản phẩm</label>
                    <input type="text" class="form-control" name="product_price" placeholder="Giá sản phẩm..."/>
                    @error('product_price')
                    <span style="color: red;">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Thêm Sản phẩm</button>
                @csrf
            </form>
           </div>
@endsection           
