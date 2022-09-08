@extends('layouts.grocery')
@section('css')
{{-- <link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
<link rel="stylesheet" type="text/css" media="all" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')


<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
        <div class="container">
            <h1 class="pt-5">
                Products Management
            </h1>
            <p class="lead">
                Product management
            </p>
        </div>
    </div>
</div>
@if(session()->get('success'))
                <div class="alert alert-success text-center" role="alert" id="alert">
                    <i class="fa-solid fa-badge-check"></i> {{session()->get('success')}}
                </div>
@endif
<div class="product-detail">
    <div class="container">
        <div class="row">
            <a href="{{route('create_product')}}" class="btn btn-success mx-auto">New product</a>
            <div class="col-sm-12">
                <table class="table table-striped" id="table_products">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Old Price</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Comments</th>
                            <th class="text-center">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td class="text-center" width="10" scope="row">{{$product->id}}</td>
                            <td class="text-center" width="10">{{$product->name}}</td>
                            <td class="text-center" width="10">{{$product->price}}</td>
                            <td class="text-center" width="10">{{$product->old_price}}</td>
                            <td>{{$product->description}}</td>
                            
                            <td class="text-center" width="10">{{$product->comments->count()}}</td>
                            <td class="text-center" width="150">
                                <div class="row">
                                    <div class="my-auto mx-auto">
                                        <a href="{{route('edit_product',$product->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>                                    </div>
                                    <div class="my-auto mx-auto">
                                        <form id="delete_product" action="{{route('destroy_product',$product->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#table_products').DataTable();} );
    window.setTimeout(function() {
    $("#alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>

@endsection