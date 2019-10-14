@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row p-3">
            @if (!isset($error_message))
                @if (!empty($products))
                    @foreach ($products as $product)
                    <div class="card" style="width: 18rem; flex:0 0 30%; margin:2px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                            </div>
                        </div>
                    @endforeach
                @else 
                    <p> There are no products. </p>
                @endif    
            @else 
                <p>{{$error_message}}</p>
            @endif    
        </div>
        <a class="btn btn-primary" href="{{route('products')}}" role="button">Show all products</a>

    </div>

@endsection
