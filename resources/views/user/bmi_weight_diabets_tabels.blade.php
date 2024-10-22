@include('includes.userheader')

<br>

<main class="container" style="color: black;">
    <h2 class="text-center" style="font-weight: bold; font-size: 30px; margin-bottom: 20px;">Bmi</h2>

    <table class="table">
        <thead>
            <tr style="background-color: #f2f2f2; ">
                <th>Id</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Weight</th>
                <th>Height</th>
                <th>Bmi</th>
                <th>Bmi_Category</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bmis as $bmi)
            <tr>
                <td>{{ $bmi->id }}</td>
                <td>{{ $bmi->age }}</td>
                <td>{{ $bmi->gender }}</td>
                <td>{{ $bmi->weight }}</td>
                <td>{{ $bmi->height }}</td>
                <td>{{ $bmi->bmi }}</td>
                <td>{{ $bmi->bmi_category }}</td>
                <td>{{ $bmi->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

<br>
    <h2 class="text-center" style="font-weight: bold; font-size: 30px; margin-bottom: 20px;">Diabetes</h2>

    <table class="table">
        <thead>
            <tr style="background-color: #f2f2f2; text-align: left;">
                <th>Id</th>
                <th>Age Group</th>
                <th>Gender</th>
                <th>Descent</th>
                <th>Birthplace</th>
                <th>Parental Diabetes</th>
                <th>Blood Glucose</th>
                <th>Blood Pressure Medication</th>
                <th>Smoking</th>
                <th>Vegetable Intake</th>
                <th>Physical Activity</th>
                <th>Waist Measurement</th>
                <th>Total Score	</th>
                <th>Date</th>

            </tr>
        </thead>
        <tbody>
            @foreach($diabetess as $diabetes)
            <tr>
                <td>{{ $diabetes->id }}</td>
                <td>{{ $diabetes->age_group }}</td>
                <td>{{ $diabetes->gender }}</td>
                <td>{{ $diabetes->descent }}</td>
                <td>{{ $diabetes->birthplace }}</td>
                <td>{{ $diabetes->blood_glucose }}</td>
                <td>{{ $diabetes->blood_glucose}}</td>
                <td>{{ $diabetes->blood_pressure_medication }}</td>
                <td>{{ $diabetes->smoking }}</td>
                <td>{{ $diabetes->vegetable_intake }}</td>
                <td>{{ $diabetes->physical_activity }}</td>
                <td>{{ $diabetes->waist_measurement }}</td>
                <td>{{ $diabetes->total_score }}</td>
                <td>{{ $diabetes->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>

    <h2 class="text-center" style="font-weight: bold; font-size: 30px; margin-bottom: 20px;">Body weight</h2>

    <table class="table">
        <thead>
            <tr style="background-color: #f2f2f2; text-align: left;">
                <th>Id</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Height</th>
                <th>Current Weight</th>
                <th>Target Weight</th>
                <th>Activity Level</th>
                <th>Start Date</th>
                <th>Target Date</th>
                <th>Date</th>

            </tr>
        </thead>
        <tbody>
            @foreach($bodyWeights as $bodyWeight)
            <tr>
                <td>{{ $bodyWeight->id }}</td>
                <td>{{ $bodyWeight->age }}</td>
                <td>{{ $bodyWeight->gender }}</td>
                <td>{{ $bodyWeight->height }}</td>
                <td>{{ $bodyWeight->current_weight }}</td>
                <td>{{ $bodyWeight->target_weight }}</td>
                <td>{{ $bodyWeight->activity_level}}</td>
                <td>{{ $bodyWeight->start_date }}</td>
                <td>{{ $bodyWeight->target_date }}</td>
                <td>{{ $bodyWeight->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>

    <div class="text-end">
        <a href="{{ route('profile.show') }}" class="btn btn-secondary me-2" style="font-size: 11px;">Back</a>
        <a href="{{ route('profile.pdf') }}" class="btn btn-primary me-2" style="font-size: 11px;">Download PDF</a>
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
