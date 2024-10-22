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
        width: 150px;
    }

  </style>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-gradient-primary text-white">
                        <h4 style="color:white; text-align: center">Edit Discount</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('discount.update', $discount->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="discount_percentage	">Discount Percentage:</label>
                                <input type="number" class="form-control" id="discount_percentage" name="discount_percentage" step="0.01" value="{{ $discount->discount_percentage }}" required>
                                @error('discount_percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="button-group text-center">
                                <button type="submit" class="btn bg-gradient-primary" style="font-size: 15px; width: 150px; padding: 10px;">Update</button>
                                <a href="{{ route('discount') }}" class="btn bg-gradient-secondary" style="font-size: 15px; padding: 10px;">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
