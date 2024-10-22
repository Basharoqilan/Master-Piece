@include('includes.userheader')

<style>
 .row {
    display: flex;
    flex-wrap: wrap;
}

.col-md-4 {
    flex-grow: 1;
    margin-bottom: 20px;
}

.card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.card-img-top {
    object-fit: contain;
    max-height: 200px;
}

.card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
}

{{--  .card-body .btn-group {
    display: flex;
    justify-content: space-between;
    margin-top: auto;
}  --}}

.card-body .btn-group .btn {
    flex-grow: 1;
    margin: 0 3px;
}

</style>

<main class="container">
    <br>
    <h1>Product</h1>
    <form method="GET" action="{{ asset('products') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="">All</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->category_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="price_min">Price (Min)</label>
                <input type="number" name="price_min" id="price_min" class="form-control" value="{{ request('price_min') }}">
            </div>
            <div class="col-md-3">
                <label for="price_max">Price (Max)</label>
                <input type="number" name="price_max" id="price_max" class="form-control" value="{{ request('price_max') }}">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-filter" style="font-size: 14px; padding: 10px 20px;">Filter</button>
                <a href="{{ asset('products') }}" class="btn btn-secondary btn-clear-filter" style="font-size: 14px; padding: 10px 20px;">Clear Filter</a>
            </div>
        </div>
    </form>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>

                        @if ($product->discount)
                            <p class="card-text">
                                <span class="text-danger">${{ number_format($product->price - ($product->price * $product->discount->discount_percentage / 100), 2) }}</span>
                                <span class="text-muted"><s>${{ number_format($product->price, 2) }}</s></span>
                            </p>
                            <p class="card-text text-danger">Discount: {{ $product->discount->discount_percentage }}%</p>
                        @else
                            <p class="card-text">${{ number_format($product->price, 2) }}</p>
                        @endif

                        <div class="btn-group">
                            <a href="{{ route('products.show', $product->product_id) }}" class="btn btn-primary" >Check Product</a>
                            <form action="{{ route('cart.add', $product->product_id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-secondary">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
<br>
<br>
@include('includes.userfooter')
