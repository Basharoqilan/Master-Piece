@include('includes.userheader')
<br>
<br>

<div class="container" style="text-align: center; color: black;">
    <h2>Results</h2>
    <hr style="border: 1px solid #d3d3d3;">

    <div class="result-box">
        <div class="alert text-black">
            <p>To lose weight and reach your goal weight of <strong>{{ $target_weight }} Kgs</strong>
            in <strong>{{ $days_to_target }} days</strong>, consume on average
            <strong>{{ $calories_per_day }} Kcal</strong> per day.</p>
        </div>

        <p class="calorie-level" style="font-size: 20px">
            <strong>Calories per day: {{ $calories_per_day }} Kcal</strong>
        </p>

        <p class="calorie-description">
            Increasing your physical activity level during this period and/or consuming less food energy will shorten the time to reach your goal weight.
            <br>
            Reduced physical activity and/or increased food energy intake will have the opposite effect.
        </p>

        <a href="{{ route('body_weight_planner.showForm') }}" class="btn btn-secondary me-2" style="font-size: 11px; margin-right: 5px;">Back</a>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@include('includes.userfooter')
