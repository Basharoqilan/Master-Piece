@include('includes.userheader')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="border p-3 rounded"> <!-- Add border here -->
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded">
            </div>
        </div>
        <div class="col-md-6">
            <div class="border p-3 rounded"> <!-- Add border here -->
                <h1>{{ $product->name }}</h1>

                <!-- Check if the product has a discount -->
                @if ($product->discount)
                    <p><strong>Price:</strong>
                        <span class="text-danger">
                            ${{ number_format($product->price - ($product->price * $product->discount->discount_percentage / 100), 2) }}
                        </span>
                        <span class="text-muted"><s>${{ number_format($product->price, 2) }}</s></span>
                    </p>
                    <p class="text-danger"><strong>Discount:</strong> {{ $product->discount->discount_percentage }}% off</p>
                @else
                    <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                @endif

                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Category:</strong> {{ $product->category->category_name }}</p>
            </div>
            <div class="d-flex mt-2">
                <a href="{{ route('products') }}" class="btn btn-secondary me-2" style="font-size: 11px ; margin-right : 5px ">Back</a> <!-- Added me-2 for margin-right -->

                <form action="{{ route('cart.add', $product->product_id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>

    </div>

    <!-- Comment section for logged-in users -->
    @auth
        <div class="mt-5">
            <h3>Leave a Comment</h3>
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->product_id }}"> <!-- Ensure product_id is passed -->
                <div class="form-group">
                    <textarea name="comment" class="form-control" rows="5" placeholder="Write your comment here..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit Comment</button>
            </form>
        </div>
    @else
        <p class="mt-5">Please <a href="{{ route('login') }}">login</a> to leave a comment.</p>
    @endauth

    <!-- Display comments for the product -->
    @if($product->comments->count() > 0)
        <div class="mt-5">
            <h3>Comments</h3>
            @foreach ($product->comments as $comment)
                <div class="border p-3 rounded mb-3">
                    <p><strong>{{ $comment->user->name }}</strong> said:</p>
                    <p>{{ $comment->comment }}</p>
                    <p class="text-muted">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p>No comments yet. Be the first to comment!</p>
    @endif
</div>
<br>
<br>
@include('includes.userfooter')
