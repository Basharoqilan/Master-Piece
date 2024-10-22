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


  </style>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-gradient-primary text-white">
                        <h4 style="color:white; text-align: center">Add New Plan Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('PlanDetails.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="plan_id">Plan Id:</label>
                                <input type="text" class="form-control" id="plan_id" name="plan_id" value=" " required>
                                @error('plan_id ')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="day">Day:</label>
                                <input type="day" class="form-control" id="day" name="day" value=" " required>
                                @error('day')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="workouts">Workouts</label>
                                <input type="text" class="form-control" id="workouts" name="workouts" required>
                                @error('workouts')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="meal_plans">Meal plans:</label>
                                <input type="text" class="form-control" id="meal_plans" name="meal_plans" value=" " required>
                                @error('meal_plans')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="coaching">Coaching:</label>
                                <input type="text" class="form-control" id="coaching" name="coaching" value=" " required>
                                @error('coaching')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="customer_support">Customer Support:</label>
                                <input type="text" class="form-control" id="customer_support" name="customer_support" value=" " required>
                                @error('customer_support')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="button-group text-center">
                                <button type="submit" class="btn bg-gradient-primary"style ="font-size : 15px" >Add Plan Details</button>
                                <a href="{{ route('PlanDetails') }}" class="btn bg-gradient-secondary" style ="font-size : 15px">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
