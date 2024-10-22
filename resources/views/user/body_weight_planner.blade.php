@include('includes.userheader')

<style>
    .label{
        font-weight: 500;
    }
    </style>

    <div class="container-fluid" style="background: linear-gradient(to bottom, #f4f9fc, #f4f9fc); padding: 50px 0;">
    <h2  style="text-align: center">Body Weight Planner</h2>
    <p  style="text-align: center">This calorie calculator helps you reach your weight goal within a realistic timeframe.</p>
        <div class="container" style="background: rgb(247, 250, 254); border-radius: 15px ; padding: 40px;box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important; color : black; ">

    <form action="{{ route('body_weight_planner.store') }}" method="POST">
        @csrf
        <div class="row">
            <!-- Age -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label">1) Your age</label>
                    <input type="number" name="age" class="form-control" required>
                </div>
            </div>
            <!-- Gender -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label">2) Your gender</label>
                    <div>
                        <label><input type="radio" name="gender" value="male" required> Male</label>
                        <label><input type="radio" name="gender" value="female"> Female</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Height -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label">3) What is your height? (in cm)</label>
                    <input type="number" name="height" class="form-control" required>
                </div>
            </div>
            <!-- Current Weight -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label">4) What is your current weight? (in Kg)</label>
                    <input type="number" name="current_weight" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Target Weight -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label">5) What is your target weight? (in Kg)</label>
                    <input type="number" name="target_weight" class="form-control" required>
                </div>
            </div>
            <!-- Activity Level -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label">6) Activity Level</label>
                    <select name="activity_level" class="form-control" required>
                        <option value="sedentary">Sedentary: little exercise</option>
            <option value="light_exercise">Exercise 1-3 times/week</option>
            <option value="moderate_exercise">Exercise 4-5 times/week</option>
            <option value="daily_exercise">Daily exercise or intense exercise 3-4 times/week</option>
            <option value="intense_exercise">Intense exercise 6-7 times/week</option>
            <option value="very_intense">Very intense exercise daily, or physical job</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Start Date -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label">7) Start date</label>
                    <input type="date" name="start_date" class="form-control" required>
                </div>
            </div>
            <!-- Target Date -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label">8) Target date</label>
                    <input type="date" name="target_date" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary" style="padding: 10px 30px; font-size: 18px;">Calculate</button>
        </div>

    </form>
</div>
    </div>
@include('includes.userfooter')
