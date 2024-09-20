@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Products</h1>
<div class="row mb-5">
   <div class="col-6">
       <form action="{{ route('products.index') }}" method="GET">
           <div class="row">
               <div class="col-3">
                   <div class="form-group">
                       <label for="category">Category</label>
                       <select class="form-control" name="category">
                           <option value="">All Categories</option>
                           @foreach($categories as $category)
                               <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                   {{ $category->name }}
                               </option>
                           @endforeach
                       </select>
                   </div>
               </div>
               <div class="col-3"><div class="form-group">
                       <label for="min_price">Min Price</label>
                       <input type="number" class="form-control" name="min_price" value="{{ request('min_price') }}">
                   </div>
               </div>
               <div class="col-3">
                   <div class="form-group">
                       <label for="max_price">Max Price</label>
                       <input type="number" class="form-control" name="max_price" value="{{ request('max_price') }}">
                   </div>
               </div>
               <div class="col-3">
                   <button type="submit" class="btn btn-primary mt-4">Filter</button>
               </div>
           </div>
       </form>
   </div>
</div>

    <div class="row">
        <div class="col-12">
            @if($products->isEmpty())
                <div class="alert alert-warning">No products found.</div>
            @else
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-text"><strong>Price: </strong>${{ $product->price }}</p>
                                    <a href="#" class="btn btn-primary">View Product</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>



</div>
@endsection
