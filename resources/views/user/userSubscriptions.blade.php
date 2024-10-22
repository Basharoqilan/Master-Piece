@include('includes.userheader')

<br>

<main class="container" style="color: black ; width : 100%">
    <h1 class="text-center" style="font-size: 36px; margin-bottom: 20px;">Subscriptions</h1>

    <table class="table" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2; text-align: left;">
                <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Plan_Id</th>
                <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Name</th>
                <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Price</th>
                <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Workouts</th>
                <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Meal Plans</th>
                <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Coaching</th>
                <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Duration</th>
                <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscriptions as $subscription)
                <tr>
                    <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $subscription->plan_id }}</td>
                    <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $subscription->pricing_plan->name}}</td>
                    <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $subscription->pricing_plan->price}}$</td>
                    <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $subscription->pricing_plan->workouts }}</td>
                    <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $subscription->pricing_plan->meal_plans }}</td>
                    <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $subscription->pricing_plan->coaching }}</td>
                    <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $subscription->pricing_plan->duration }}</td>
                    <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">
                        <a href="{{ route('SubscriptionDetails', $subscription->id) }}" class="btn btn-primary">Details </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-end">
        <a href="{{ route('profile.show') }}" class="btn btn-secondary me-2" style="font-size: 11px">Back</a>
    </div>
</main>

<br>
<br>
<br>
<br>
<br>

@include('includes.userfooter')
