@include('includes.userheader')

<style>
.label{
    font-weight: 500;
}
</style>

<div class="container-fluid" style="background: linear-gradient(to bottom, #f4f9fc, #f4f9fc); padding: 50px 0;">

    <h2 style="text-align: center;">Diabetes Risk Assessment Tool</h2>
        <p style="text-align: center;">This calculator estimates the patient's 5-year type 2 disease risk.</p>
    <div class="container" style="background: rgb(247, 250, 254); border-radius: 15px ; padding: 40px;box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important; color : black; ">


       

        <form action="{{ route('diabetes_assessment.store') }}" method="POST">
            @csrf

            <div class="row">
                <!-- Age group -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >1) Your age group</label>
                        <div>
                            <label><input type="radio" name="age_group" value="0" required> Under 35 years [0 points]</label><br>
                            <label><input type="radio" name="age_group" value="2"> 35 to 44 years [2 points]</label><br>
                            <label><input type="radio" name="age_group" value="4"> 45 to 54 years [4 points]</label><br>
                            <label><input type="radio" name="age_group" value="6"> 55 to 64 years [6 points]</label><br>
                            <label><input type="radio" name="age_group" value="8"> 65 years or over [8 points]</label>
                        </div>
                    </div>
                </div>

                <!-- Gender -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >2) Your gender</label>
                        <div>
                            <label><input type="radio" name="gender" value="3" required> Male [3 points]</label><br>
                            <label><input type="radio" name="gender" value="0"> Female [0 points]</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Descent -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >3) Are you of Aboriginal, Torres Strait Islander, Pacific Islander or Maori descent?</label>
                        <div>
                            <label><input type="radio" name="descent" value="0" required> No [0 points]</label><br>
                            <label><input type="radio" name="descent" value="2"> Yes [2 points]</label>
                        </div>
                    </div>
                </div>

                <!-- Birthplace -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >4) Where were you born?</label>
                        <div>
                            <label><input type="radio" name="birthplace" value="2" required> Asia, India, Middle East, North Africa, Southern Europe [2 points]</label><br>
                            <label><input type="radio" name="birthplace" value="0"> Other [0 points]</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Parental diabetes -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >5) Have either of your parents, or any of your siblings been diagnosed with diabetes?</label>
                        <div>
                            <label><input type="radio" name="parental_diabetes" value="0" required> No [0 points]</label><br>
                            <label><input type="radio" name="parental_diabetes" value="3"> Yes [3 points]</label>
                        </div>
                    </div>
                </div>

                <!-- Blood glucose -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >6) Have you ever been found to have high blood glucose?</label>
                        <div>
                            <label><input type="radio" name="blood_glucose" value="0" required> No [0 points]</label><br>
                            <label><input type="radio" name="blood_glucose" value="6"> Yes [6 points]</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Blood pressure medication -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >7) Are you currently taking medication for high blood pressure?</label>
                        <div>
                            <label><input type="radio" name="blood_pressure_medication" value="0" required> No [0 points]</label><br>
                            <label><input type="radio" name="blood_pressure_medication" value="2"> Yes [2 points]</label>
                        </div>
                    </div>
                </div>

                <!-- Smoking -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >8) Do you currently smoke cigarettes or other tobacco products?</label>
                        <div>
                            <label><input type="radio" name="smoking" value="0" required> No [0 points]</label><br>
                            <label><input type="radio" name="smoking" value="2"> Yes [2 points]</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Vegetable intake -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >9) How often do you eat vegetables or fruit?</label>
                        <div>
                            <label><input type="radio" name="vegetable_intake" value="0" required> Every day [0 points]</label><br>
                            <label><input type="radio" name="vegetable_intake" value="1"> Not every day [1 point]</label>
                        </div>
                    </div>
                </div>

                <!-- Physical activity -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >10) On average, do you do at least 2.5 hours of physical activity per week?</label>
                        <div>
                            <label><input type="radio" name="physical_activity" value="0" required> Yes [0 points]</label><br>
                            <label><input type="radio" name="physical_activity" value="2"> No [2 points]</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Waist measurement -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" >11) What is your waist measurement (in cm)?</label>
                        <input type="number" name="waist_measurement" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="padding: 10px 30px; font-size: 18px;">Calculate</button>
            </div>
        </form>
    </div>
    <br><br>
</div>

@include('includes.userfooter')
