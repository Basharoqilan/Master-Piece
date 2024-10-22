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
                        <h4 style="color:white; text-align: center">Edit Plan Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('PlanDetails.update', $dailyTasks->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="plan_id">Plan Id:</label>
                                <input type="text" class="form-control" id="plan_id" name="plan_id" value="{{ $dailyTasks->plan_id}}" required>
                                @error('plan_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="day">Day:</label>
                                <input type="day" class="form-control" id="day" name="day" value="{{ $dailyTasks->day }}" required>
                                @error('day')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="workouts">Workouts:</label>
                                <input type="text" class="form-control" id="workouts" name="workouts" value="{{ $dailyTasks->workouts }}" required>
                                @error('workouts')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="meal_plans">Meal plans:</label>
                                <input type="text" class="form-control" id="meal_plans" name="meal_plans" value="{{ $dailyTasks->meal_plans }}" required>
                                @error('meal_plans')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="coaching">Coaching:</label>
                                <input type="text" class="form-control" id="coaching" name="coaching" value="{{ $dailyTasks->coaching }}" required>
                                @error('coaching')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="customer_support">Customer Support:</label>
                                <input type="text" class="form-control" id="customer_support" name="customer_support" value="{{ $dailyTasks->customer_support }}" required>
                                @error('customer_support')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="button-group text-center">
                                <button type="submit" class="btn bg-gradient-primary" style="font-size: 15px; width: 150px; padding: 10px;">Update</button>
                                <a href="{{ route('PlanDetails') }}" class="btn bg-gradient-secondary" style="font-size: 15px; padding: 10px;">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
