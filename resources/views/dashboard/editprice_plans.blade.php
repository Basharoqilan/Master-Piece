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
                        <h4 style="color:white; text-align: center">Edit Plan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('price_plans.update', $plan->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $plan->name }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="price" class="form-control" id="price" name="price" value="{{ $plan->price }}" required>
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration" value="{{ $plan->duration }}" required>
                                @error('duration')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="workouts">Workouts:</label>
                                <input type="text" class="form-control" id="workouts" name="workouts" value="{{ $plan->workouts }}" required>
                                @error('workouts')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="meal_plans">Meal Plans:</label>
                                <input type="text" class="form-control" id="meal_plans" name="meal_plans" value="{{ $plan->meal_plans }}" required>
                                @error('meal_plans')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="coaching">Coaching:</label>
                                <input type="text" class="form-control" id="coaching" name="coaching" value="{{ $plan->coaching }}" required>
                                @error('coaching')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="customer_support">Customer Support:</label>
                                <input type="text" class="form-control" id="customer_support" name="customer_support" value="{{ $plan->customer_support }}" required  >
                                @error('customer_support')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="button-group text-center">
                                <button type="submit" class="btn bg-gradient-primary" style="font-size: 15px; width: 150px; padding: 10px;">Update</button>
                                <a href="{{ route('price_plans') }}" class="btn bg-gradient-secondary" style="font-size: 15px; padding: 10px;">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
