@extends('layouts.grocery')
@section('content')
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
        <div class="col-md-12">
            <div class="shop-categories owl-carousel mt-5">
                @foreach ($categories as $category)
                    <div class="item">
                        <a href="shop.html">
                            <div class="media d-flex align-items-center justify-content-center">
                                <span class="d-flex mr-2"><i class="{{$category->icon}}"></i></span>
                                <div class="media-body">
                                    <h5>{{ $category->name }}</h5>
                                    <p>{{ $category->description }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
              
                {{-- <div class="item">
                    <a href="shop.html">
                        <div class="media d-flex align-items-center justify-content-center">
                            <span class="d-flex mr-2"><i class="sb-bistro-apple"></i></span>
                            <div class="media-body">
                                <h5>Fruits</h5>
                                <p>Variety of Fruits From Local Growers</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="shop.html">
                        <div class="media d-flex align-items-center justify-content-center">
                            <span class="d-flex mr-2"><i class="sb-bistro-roast-leg"></i></span>
                            <div class="media-body">
                                <h5>Meats</h5>
                                <p>Protein Rich Ingridients From Local Farmers</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="shop.html">
                        <div class="media d-flex align-items-center justify-content-center">
                            <span class="d-flex mr-2"><i class="sb-bistro-fish-1"></i></span>
                            <div class="media-body">
                                <h5>Fishes</h5>
                                <p>Protein Rich Ingridients From Local Farmers</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="shop.html">
                        <div class="media d-flex align-items-center justify-content-center">
                            <span class="d-flex mr-2"><i class="sb-bistro-french-fries"></i></span>
                            <div class="media-body">
                                <h5>Frozen Foods</h5>
                                <p>Protein Rich Ingridients From Local Farmers</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="shop.html">
                        <div class="media d-flex align-items-center justify-content-center">
                            <span class="d-flex mr-2"><i class="sb-bistro-appetizer"></i></span>
                            <div class="media-body">
                                <h5>Packages</h5>
                                <p>Protein Rich Ingridients From Local Farmers</p>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>

@foreach ($categories as $category)
<section id="{{$category->name}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">{{$category->name}}</h2>
                <div class="product-carousel owl-carousel">
                    @foreach($category->products->take(5) as $product)
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
                                        {{$product-> discount}} % OFF
                                    </span>
                                </div>
                                <img src="assets/img/{{$product-> image}}" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">{{$product-> name}}</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">{{$product-> old_price}} MXM</span>
                                    <span class="reguler">{{$product-> price}}</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
{{-- 
<section id="vegetables" class="gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Vegetables</h2>
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
                                <img src="assets/img/meats.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/fish.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/vegetables.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/frozen.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/fruits.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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

<section id="meats">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Meats</h2>
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
                                <img src="assets/img/meats.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/fish.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/vegetables.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/frozen.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/fruits.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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

<section id="fishes" class="gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Fishes</h2>
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
                                <img src="assets/img/meats.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/fish.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/vegetables.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/frozen.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/fruits.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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

<section id="fruits">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Fruits</h2>
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
                                <img src="assets/img/meats.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/fish.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/vegetables.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/frozen.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
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
                                <img src="assets/img/fruits.jpg" alt="Card image 2" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{route('product_details',$product->id)}}">Product Title</a>
                                </h4>
                                <div class="card-price">
                                    <span class="discount">Rp. 300.000</span>
                                    <span class="reguler">Rp. 200.000</span>
                                </div>
                                <a href="{{route('product_details',$product->id)}}" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}