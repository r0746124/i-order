@extends('layouts.template')
@section('title', 'Fast food')
@section('header')
    <div style="background-image: url('/assets/fast food bg.jpg'); background-size: cover; min-height: 480px;">
        <div class="container text-white text-center" >
            <h1 class="display-4 m-auto" style="font-family: 'Lilita One', cursive; font-size: 80px;">Fast food</h1>
        </div>
    </div>
@endsection
@section('main')
    <div class="row" id="shops_list">
        @foreach($shops as $shop)
            <a class="cl-sm-12" href="/fast-food/shops/{{$shop->id}}" style="text-decoration: none; color: black;">
                <div  class="card shadow-sm shop_cards" style="font-family: 'Almarai', sans-serif;">
                    <div class="row no-gutters">
                        <div class="col-md-4 text-center font-weight-bold" style="background-color: #CC1505;">
                            {{--            <img src="..." class="card-img" alt="...">--}}
                            <h3 class="text-white ml-2" style="font-family: 'Tajawal', sans-serif; position: relative; top: 60px;">{{$shop->name_arabic}}</h3>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$shop->name_arabic}}</h5>
                                <p class="card-text">{{$shop->food_type}}</p>
                                {{--                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                                <p><span class="mr-2"><i class="fas fa-shipping-fast"></i> {{$shop->delivery_cost}} SDG </span> <span class="mr-2"><i class="fas fa-money-bill-alt"></i> {{$shop->min_budget}} SDG </span> <span class="mr-2"><i class="fas fa-map-marker"></i> {{strtoupper($shop->township)}}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
