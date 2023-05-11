@extends('layouts')
   
@section('content')
    
<style>
    .row {
        display: flex;
        gap: 1rem;
        justify-content: space-between;
    }
</style>

<div class="row">

    @foreach($products as $product)
    
        
            <div class="col-lg-2.5 mb-3">
                <div class="card" style="width: 15rem;">
                <img src="{{ $product->image }}" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p>{{ $product->description }}</p>
                        <p class="card-text"><strong>Price: </strong> {{ $product->price }}$</p>
                        <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-secondary btn-block text-center" role="button">Tambah ke Keranjang</a> </p>
                    </div>
                </div>
            </div>
    @endforeach
</div>
@endsection