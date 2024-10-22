@include('includes.header')

  <style>
    .mx-4 {
        margin-right: 0rem !important;
        margin-left: 0rem !important;
    }
    .card {
        max-width: 900px;
        margin: auto;
    }

    .user-details p {
        font-size: 20px;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .profile-image img {
        width: 200px;
        height: auto;
        border-radius: 8px;
    }

    .card-header {
        text-align: center;
    }

    .button-group {
        margin-top: 1.5rem;
        text-align: center;
    }

    .btn {
        width: 120px;
    }
  </style>

    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-gradient-primary text-white">
                        <h4 style="color:white; text-align: center">View Product</h4>
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="user-details">
                            <p><strong>Name :</strong> {{ $product->name }}</p>
                            <p><strong>Description :</strong> {{ $product->description }}</p>
                            <p><strong>Price :</strong> {{ $product->price }}</p>
                            <p><strong>Category Name :</strong> {{ $product->category->category_name ?? 'N/A' }}</p>
                            <p><strong>Discount Percentage :</strong> {{ $product->discount->discount_percentage ?? 'No Discount' }}%</p>
                            <div class="profile-image">
                                @if($product->image)
                                    <img src="{{ asset('images/' . $product->image) }}" alt="Profile Image" class="img-thumbnail">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="button-group text-center">
                        <a href="{{ route('product') }}" class="btn bg-gradient-secondary" style="font-size: 15px;">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
