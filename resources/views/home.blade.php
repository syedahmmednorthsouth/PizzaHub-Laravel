@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Course</div>

                    @foreach ($products as $product)
                        <div class="card-body">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <p>{{ $product->name }}</p>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p>${{ $product->price }}</p>
                                </div>
                                <button class="btn btn-primary">Pay</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
