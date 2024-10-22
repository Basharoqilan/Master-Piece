
@include('includes.userheader')
<br>
<br>


<div class="container" style="text-align: center; color : black;">
    <h2>Results</h2>
    <hr style="border: 1px solid #d3d3d3;">

    <div class="result-box">
        @if($totalScore <= 5)
        <div class="alert bg-success text-white">
            <strong>You have scored {{ $totalScore }} points</strong>
        </div>
        @elseif($totalScore > 5 && $totalScore <= 10)
        <div class="alert bg-warning text-white">
            <strong>You have scored {{ $totalScore }} points</strong>
        </div>
        @else
        <div class="alert bg-danger text-white">
            <strong>You have scored {{ $totalScore }} points</strong>
        </div>
        @endif

        <p class="risk-level" style="font-size: 20px">
            <strong>Risk: {{ $riskLevel }}</strong>
        </p>

        <p class="risk-description">
            @if($riskLevel == 'Low')
                This means you are at Low risk of developing diabetes within 5 years. Maintain a healthy lifestyle.
            @elseif($riskLevel == 'Moderate')
            Moderate risk of developing type 2 diabetes within the next 5 years. Focus on maintaining healthy habits.
            @else
                High risk of developing type 2 diabetes within the next 5 years. Please consult a healthcare professional.
            @endif
        </p>
        <a href="{{ route('diabetes_assessment.show') }}" class="btn btn-secondary me-2" style="font-size: 11px ; margin-right : 5px ">Back</a> <!-- Added me-2 for margin-right -->

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
