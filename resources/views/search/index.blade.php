@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <form action="{{ route('search') }}" method="GET" class="p-3" style="display:flex; width:100%; margin-left:-15px; margin-right:-15px;">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <input style="flex:0 0 40%; margin-left:15px; margin-right:15px;" type="text" class="form-control" id="Name" name="Name"  placeholder="Product Name" value="{{ request()->input('Name') }}" >
                    <input style="flex:0 0 40%; margin-left:15px; margin-right:15px;" type="text" class="form-control" id="Price" name="Price" placeholder="Product Price" value="{{ request()->input('Price') }}" >
                    <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
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
                        <p> There is not any product. </p>
                    @endif    
                @else 
                    <p>{{$error_message}}</p>
                @endif    
        </div>
        <div style="display:flex; justify-content:center;">
            {{ $products->links() }}
        </div>
    </div>

@endsection
