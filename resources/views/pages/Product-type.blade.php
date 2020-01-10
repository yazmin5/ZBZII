@extends('layouts.template')

@section('title', 'Category')

@section('breadcrumb')  
    <!-- breadcrumb start-->
    <!-- MASI HARDCODE :( -->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Product Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end-->
@endsection

@section('content')
    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding border_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu product_bar_item">
                                    <h2>{{ $category }}</h2>
                                </div>
                                <div class="product_top_bar_iner product_bar_item d-flex">
                                    <div class="product_bar_single">
                                        <select class="wide">
                                            <option data-display="Default sorting">Default sorting</option>
                                            <option value="1">Some option</option>
                                            <option value="2">Another option</option>
                                            <option value="3">Potato</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @foreach($products as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                
                                        <div class="category_product_text">
                                            <a href="{{$product->type}}/{{$product->slug}}">
                                            <h5>{{ $product->name }}</h5>
                                            </a>
                                            <p>@currency($product->price)</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <!--
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                                    <div class="category_product_text">
                                        <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                
                                        <div class="category_product_text">
                                            <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                            <p>$150.00</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                                    <div class="category_product_text">
                                        <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                
                                        <div class="category_product_text">
                                            <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                            <p>$150.00</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                                    <div class="category_product_text">
                                        <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                
                                        <div class="category_product_text">
                                            <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                            <p>$150.00</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                                    <div class="category_product_text">
                                        <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                
                                        <div class="category_product_text">
                                            <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                            <p>$150.00</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                                    <div class="category_product_text">
                                        <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                
                                        <div class="category_product_text">
                                            <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                            <p>$150.00</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="img/blazer-product.jpg" href="/single-product" alt="">
                                    <div class="category_product_text">
                                        <a href="/single-product"><h5>Long Sleeve TShirt</h5></a>
                                        <p>$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->

@endsection