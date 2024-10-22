@include('includes.header')

  <style>
    .mx-4 {
        margin-right: 0rem !important;
        margin-left: 0rem !important;
    }
    .card {
        max-width: 800px;
        margin: auto;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-control {
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .form-control-file {
        padding-top: 10px;
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-gradient-primary text-white">
                        <h4 style="color:white; text-align: center">Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.update', $product->product_id ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" required>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="decimel" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category:</label>
                                <select class="form-control" id="category_id" name="category_id" required>
                                    <option value="" selected>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ isset($product) && $product->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="discount_id">Discount:</label>
                                <select class="form-control" id="discount_id" name="discount_id">
                                    <option value="" selected>Select Discount</option>
                                    @foreach($discounts as $discount)
                                        <option value="{{ $discount->id }}" {{ isset($product) && $product->discount_id == $discount->id ? 'selected' : '' }}>
                                            {{ $discount->discount_percentage }}%
                                        </option>
                                    @endforeach
                                </select>
                                @error('discount_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Product Image:</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @if($product->image)
                                    <img src="{{ asset('images/' . $product->image) }}" alt="Product Image" width="100" class="mt-2">
                                @endif
                            </div>
                            <div class="button-group text-center">
                                <button type="submit" class="btn bg-gradient-primary" style="font-size: 15px; width: 120px; padding: 10px;">Update</button>
                                <a href="{{ route('product') }}" class="btn bg-gradient-secondary" style="font-size: 15px; padding: 10px;">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
