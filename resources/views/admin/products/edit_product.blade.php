@extends('layouts.grocery')
@section('content')
<div class="banner">
  <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
      <div class="container">
          <h1 class="pt-5">
              Edit product
          </h1>
          <div class="card card-login mb-5">
            <div class="card-body">
              {!! Form::open(['route' => ['update_product', $product->id] , 'method' => 'POST','class' => 'form-horizontal']) !!} <!--Laravel Collective   -->
              {!! Form::token()!!}
                <div class="form-group row mt-3">
                  <div class="col-md-12">
                      <strong>
                      {!!Form::label('labelName', 'Product Name:', ['class'=>'text-dark'])!!}
                      </strong>
                      {!!Form::text('name',$product->name,['class'=>'form-control text-center'])!!}                 
                   </div>
                </div>
                <div class="form-group row mt-3">
                  <div class="col-md-12">
                      <strong>
                      {!!Form::label('labelDescription', 'Product Description:', ['class'=>'text-dark'])!!}
                      </strong>
                      {!!Form::text('description',$product->description,['class'=>'form-control text-center'])!!}                 
                   </div>
                </div>
                <div class="form-group row mt-3">
                  <div class="col-md-12">
                      <strong>
                      {!!Form::label('labelPrice', 'Product Price:', ['class'=>'text-dark'])!!}
                      </strong>
                      {!!Form::number('price',$product->price,['class'=>'form-control text-center'])!!}                 
                   </div>
                </div>
                
                {{-- <div class="form-group row mt-3">
                  <div class="col-md-12">
                      <strong>
                      {!!Form::label('labelOld_price', 'Product Old price:', ['class'=>'text-dark'])!!}
                      </strong>
                      {!!Form::number('old_price',$product->old_price,['class'=>'form-control text-center'])!!}                 
                   </div>
                </div> --}}
                <div class="form-group row mt-3">
                  <div class="col-md-12">
                      <strong>
                      {!!Form::label('labelQuantity', 'Product Quantity:', ['class'=>'text-dark'])!!}
                      </strong>
                      {!!Form::text('quantity',$product->quantity,['class'=>'form-control text-center'])!!}                 
                   </div>
                </div>
                <div class="form-group row mt-3">
                  <div class="col-md-12">
                      <strong>
                      {!!Form::label('labelCatgory', 'Product Category:', ['class'=>'text-dark'])!!}
                      </strong>
                      {{-- {!!Form::text('category_id',$product->category_id,['class'=>'form-control text-center'])!!}  --}}
                      {!!Form::select('category_id',$categories, $product->category_id,['class'=>'form-control text-center'] );
                      !!}                
                   </div>
                </div>
                {!! Form::submit('Update product',['class'=>'btn btn-primary btn-block text-uppercase'])!!}
                <a href="{{route('products')}}" class="btn btn-danger btn-block text-uppercase">Cancel</a>
              {!! Form::close() !!} <!--Laravel Collective    -->
          </div>
      </div>
  </div>
</div>