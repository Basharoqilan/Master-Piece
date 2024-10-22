@include('includes.userheader')

<br>

<main class="container" style="color: black;">
    <h1 class="text-center" style="font-size: 36px; margin-bottom: 20px;">Daily Tasks for {{ $subscription->pricing_plan->name }}</h1>

    <table class="table">
        <thead>
            <tr style="background-color: #f2f2f2; ">
                <th>Day</th>
                <th>Workouts</th>
                <th>Meal Plans</th>
                <th>Coaching</th>
                <th>Customer Support</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscription->pricing_plan->dailyTasks as $task)
            <tr>
                <td>{{ $task->day }}</td>
                <td>{{ $task->workouts }}</td>
                <td>{{ $task->meal_plans }}</td>
                <td>{{ $task->coaching }}</td>
                <td>{{ $task->customer_support }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-end">
        <a href="{{ route('userSubscriptions') }}" class="btn btn-secondary me-2" style="font-size: 11px;">Back</a>
    </div>
</main>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@include('includes.userfooter')
