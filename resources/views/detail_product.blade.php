@extends('layouts.grocery')
@section('content')

<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
        <div class="container">
            <h1 class="pt-5">
                {{$product->name}}
            </h1>
            <p class="lead">
                {{$product->description}}
            </p>
        </div>
    </div>
</div>
<div class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="slider-zoom">
                    <a href="{{asset('assets/img/meats.jpg')}}" class="cloud-zoom" rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" id="cloudZoom">
                        <img alt="Detail Zoom thumbs image" src="{{asset('assets/img/meats.jpg')}}" style="width: 100%;">
                    </a>
                </div>

                <div class="slider-thumbnail">
                    <ul class="d-flex flex-wrap p-0 list-unstyled">
                        <li>
                            <a href="{{asset('assets/img/meats.jpg')}}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{asset('assets/img/meats.jpg')}}', useZoom: 'cloudZoom', smallImage: '{{asset('assets/img/meats.jpg')}}'" class="cloud-zoom-gallery">
                                <img itemprop="image" src="{{asset('assets/img/meats.jpg')}}" style="width:135px;">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/fish.jpg')}}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{asset('assets/img/fish.jpg')}}', useZoom: 'cloudZoom', smallImage: '{{asset('assets/img/fish.jpg')}}'" class="cloud-zoom-gallery">
                                <img itemprop="image" src="{{asset('assets/img/fish.jpg')}}" style="width:135px;">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/vegetables.jpg')}}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{asset('assets/img/vegetables.jpg')}}', useZoom: 'cloudZoom', smallImage: '{{asset('assets/img/vegetables.jpg')}}'" class="cloud-zoom-gallery">
                                <img itemprop="image" src="{{asset('assets/img/vegetables.jpg')}}" style="width:135px;">
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('assets/img/frozen.jpg')}}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{asset('assets/img/frozen.jpg')}}', useZoom: 'cloudZoom', smallImage: '{{asset('assets/img/frozen.jpg')}}'" class="cloud-zoom-gallery">
                                <img itemprop="image" src="{{asset('assets/img/frozen.jpg')}}" style="width:135px;">
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-sm-6">
                <p>
                    <strong>Overview</strong><br>
                    {{$product->description}}
                </p>
                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <strong>Price</strong> (/Pack)<br>
                            <span class="price">${{$product->price}}</span>
                            <span class="old-price">${{$product->old_price}}</span>
                        </p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>
                            <span class="stock available">In Stock: {{$product->quantity}}</span>
                        </p>
                    </div>
                </div>
                <p class="mb-1">
                    <strong>Quantity</strong>
                </p>
                <div class="row">
                    <div class="col-sm-5">
                        <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="" name="vertical-spin">
                    </div>
                    <div class="col-sm-6"><span class="pt-1 d-inline-block">Pack (250 gram)</span></div>
                </div>

                <button class="mt-3 btn btn-primary btn-lg">
                    <i class="fa fa-shopping-basket"></i> Add to Cart
                </button>

                
            </div>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-6 col-12 pb-4">
                            <h1>Comments</h1>
                            <div class="comment mt-4 text-justify float-left"> 
                                <h4>Luis Lopez</h4> <span>- 20 October, 2018</span> <br>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                            </div>

                            @foreach ($comments as $comment)   
                            <div class="comment mt-4 text-justify">
                                <h4>{{$comment->commenter}}</h4> <span>20 October, 2018</span> <br>
                                <p>{{$comment->email}}</p>
                                <p>{{$comment->comment}}</p>
                            </div>
                        @endforeach
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                            <form action="{{route('store_comment',$product->id)}}" method="post" encrypted="true" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h4>Leave a comment</h4>  <textarea name="comment" id="" msg cols="30" rows="5" class="form-control" ></textarea>
                                </div>
                                <div class="form-group"> <label for="name">Name</label> <input type="text" name="commenter" id="fullname" class="form-control"> </div>
                                <div class="form-group"> <label for="email">Email</label> <input type="text" name="email" id="email" class="form-control"> </div>
                                <div class="form-group"><input type="hidden" name="product_id" value="{{$product->id}}" class="form-control"></div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<section id="related-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Related Products</h2>
                <div class="product-carousel owl-carousel">
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="{{asset('assets/img/meats.jpg')}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail-product.html">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="detail-product.html" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="{{asset('assets/img/fish.jpg')}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail-product.html">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="detail-product.html" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="{{asset('assets/img/vegetables.jpg')}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail-product.html">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="detail-product.html" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="{{asset('assets/img/frozen.jpg')}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail-product.html">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="detail-product.html" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <div class="card-ribbon">
                                <div class="card-ribbon-container right">
                                    <span class="ribbon ribbon-primary">SPECIAL</span>
                                </div>
                            </div>
                            <div class="card-badge">
                                <div class="card-badge-container left">
                                    <span class="badge badge-default">
                                        Until 2018
                                    </span>
                                    <span class="badge badge-primary">
                                        20% OFF
                                    </span>
                                </div>
                                <img src="{{asset('assets/img/fruits.jpg')}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="detail-product.html">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="detail-product.html" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>