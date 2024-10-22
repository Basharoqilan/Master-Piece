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
                        <h4 style="color:white; text-align: center">View Plan Details</h4>
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="user-details">
                            <p><strong>Plan Id :</strong> {{ $dailyTasks->plan_id }}</p>
                            <p><strong>Day :</strong> {{ $dailyTasks->day }}</p>
                            <p><strong>Workouts :</strong> {{ $dailyTasks->workouts }}</p>
                            <p><strong>Meal plans :</strong> {{ $dailyTasks->meal_plans }}</p>
                            <p><strong>Coaching :</strong> {{ $dailyTasks->coaching }}</p>
                            <p><strong>Customer Support :</strong> {{ $dailyTasks->customer_support }}</p>
                        </div>
                    </div>
                    <div class="button-group text-center">
                        <a href="{{ route('PlanDetails') }}" class="btn bg-gradient-secondary" style="font-size: 15px;">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
