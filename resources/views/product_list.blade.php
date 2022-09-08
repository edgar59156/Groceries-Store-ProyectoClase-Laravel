@extends('layouts.grocery')
@section('content')
<link rel="stylesheet" type="text/css" media="all" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">

<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
        <div class="container">
            <h1 class="pt-5">
                Shopping Page
            </h1>
            <p class="lead">
                Save time and leave the groceries to us.
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <br>
            <button id="btnLoad" class="btn btn-primary">Load Products</button>
            <table id="tblProducts" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>PRICE</th>
                        <th>DESC</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <br>
            <table id="tblProducts_datatable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>PRICE</th>
                        <th>DESC</th>
                        <th>CATEGORIA</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#tblProducts').DataTable();} );
    window.setTimeout(function() {
    $("#alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
@endsection
