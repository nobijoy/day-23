@extends('master')
@section('title')
    Product Detail
@endsection()

@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{$data['image']}}" alt="" class="" />
                    </div>
                </div>
                <div class="col-md-6 card">
                    <div class="card-body">
                        <h1>{{$data['name']}}</h1>
                        <h3>{{$data['price']}}$</h3>
                        <p>{{$data['description']}}</p>
                        <hr/>
                        <button type="button" class="btn btn-outline-success">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
