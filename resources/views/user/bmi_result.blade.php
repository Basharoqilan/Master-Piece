@include('includes.userheader')
<br>
<br>

<div class="container" style="text-align: center; color : black;">
    <h2>Results</h2>
    <hr style="border: 1px solid #d3d3d3;">

    <div class="result-box">
        @if($bmi < 18.5)
        <div class="alert bg-info text-white">
            <strong>Your BMI is {{ $bmi }}</strong>
        </div>
        @elseif($bmi >= 18.5 && $bmi <= 24.9)
        <div class="alert bg-success text-white">
            <strong>Your BMI is {{ $bmi }}</strong>
        </div>
        @elseif($bmi >= 25 && $bmi <= 29.9)
        <div class="alert bg-warning text-white">
            <strong>Your BMI is {{ $bmi }}</strong>
        </div>
        @else
        <div class="alert bg-danger text-white">
            <strong>Your BMI is {{ $bmi }}</strong>
        </div>
        @endif

        <p class="bmi-level" style="font-size: 20px">
            <strong>BMI Category :
                @if($bmi < 18.5)
                    Underweight
                @elseif($bmi >= 18.5 && $bmi <= 24.9)
                    Normal
                @elseif($bmi >= 25 && $bmi <= 29.9)
                    Overweight
                @else
                    Obese
                @endif
            </strong>
        </p>

        <p class="bmi-description">
            @if($bmi < 18.5)
                You are underweight. It's important to maintain a balanced diet and consult a healthcare provider for advice.
            @elseif($bmi >= 18.5 && $bmi <= 24.9)
                You have a normal body weight. Keep up your healthy habits and maintain a balanced diet.
            @elseif($bmi >= 25 && $bmi <= 29.9)
                You are overweight. Focus on healthy eating and regular physical activity to manage your weight.
            @else
                You are in the obese category. It's recommended to consult a healthcare provider to discuss weight management strategies.
            @endif
        </p>

        <a href="{{ route('bmi.form') }}" class="btn btn-secondary me-2" style="font-size: 11px; margin-right: 5px;">Back</a> <!-- Added margin-right for spacing -->
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
