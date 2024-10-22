
@include('includes.userheader')

<style>
    .label{
        font-weight: 500;
    }
    </style>


<div class="container-fluid" style="background: linear-gradient(to bottom, #f4f9fc, #f4f9fc); padding: 50px 0;">

    <h2 style="text-align: center">BMI Calculator</h2>
    <p style="text-align: center">The Body Mass Index is an indicator showing the relative weight compared to your age and height.</p>
    <div class="container" style="background: rgb(247, 250, 254); border-radius: 15px ; padding: 40px;box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important; color : black; ">


    <form action="{{ route('bmi.calculate') }}" method="POST">
        @csrf
        <div class="row">
            <!-- Age -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label">1) Your age</label>
                    <input type="number" name="age" class="form-control" required placeholder="in years">
                </div>
            </div>

            <!-- Gender -->
            <div class="col-md-6">
                <div class="form-group">
                    <label  class="label">2) Your gender</label><br>
                    <label><input type="radio" name="gender" value="male" required> Male</label><br>
                    <label><input type="radio" name="gender" value="female" required> Female</label>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Weight -->
            <div class="col-md-6">
                <div class="form-group">
                    <label  class="label">3) Your weight in Kg</label>
                    <input type="number" name="weight" class="form-control" required placeholder="in Kg">
                </div>
            </div>

            <!-- Height -->
            <div class="col-md-6">
                <div class="form-group">
                    <label  class="label">4) Your height in cm</label>
                    <input type="number" name="height" class="form-control" required placeholder="in cm">
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
