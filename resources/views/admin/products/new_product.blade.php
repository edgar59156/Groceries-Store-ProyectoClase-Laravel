@extends('layouts.grocery')
@section('content')
<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
        <div class="container">
            <h1 class="pt-5">
                Add new product
            </h1>
            <div class="card card-login mb-5">
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('store_product')}}" method="post" encrypted="true" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mt-3">
                            <div class="col-md-12">
                                <label class="text-dark"><strong>Product Name</strong></label>
                                <input class="form-control" name="name" type="text" required placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-md-12">
                                <label class="text-dark"><strong>Product description</strong></label>
                                <textarea class="form-control" placeholder="Description" required name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-md-12">
                                <label class="text-dark"><strong>Product price</strong></label>
                                <input class="form-control" type="number" name="price" required placeholder="Price">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-md-12">
                                <label class="text-dark"><strong>Product quantity</strong></label>
                                <input class="form-control" type="number" name="quantity" required placeholder="Quantity">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="text-dark"><strong>Product category</strong></label>
                                <select class="form-control " name="category_id">
                                    <option selected>Category</option>
                                    @foreach($categories as $index =>$value)
                                    <option value={{$index}} >{{$value}}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="text-dark"><strong>Product image</strong></label>
                                <input class="form-control" type="file" name="image" selected='image'>
                            </div>
                        </div>
                        <div class="form-group row text-center mt-4">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>