@extends('layouts.template')
@section('title', 'Fast food')
@section('header')
    <div style="background-image: url('/assets/shop {{$shop->id}}.jpg'); background-size: cover; min-height: 300px;">
        <div class="container text-white text-center">
            <h1 class="display-4 text-center font-weight-bold " style="font-family: 'Tajawal', cursive; font-size: 80px;">{{$shop->name_arabic}}</h1>
        </div>
    </div>
@endsection
@section('main')

    <div class="row">
        @foreach($shop->products as $product)
        <div class="col-lg-6 col-md-12 mb-2">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">Here product description!</p>
                    <p class="card-text"><span class="font-weight-bold" style="color: #CC1505; font-size: 15px;">{{$product->price}} SDG</span></p>
                </div>
                    <div class="card-footer text-center">
                        <a href="" class="d-block "><i class="fas fa-plus"></i></a>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
²
@endsection
