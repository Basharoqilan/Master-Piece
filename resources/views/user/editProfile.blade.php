@include('includes.userheader')
<br>
<br>
<h1 class="text-center" style="font-size: 36px; margin-bottom: 20px;">Edit Profile</h1>

<main class="container profile-container" style="display: flex; justify-content: center; align-items: center; height: 60vh;">

    <div class="content" style="display: flex; justify-content: space-between; align-items: center; max-width: 1000px; width: 100%;">

        <div class="form-container" style="width: 70%; background-color: #f8f9fa; border: 1px solid #e3e6f0; border-radius: 10px; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            <div class="update-form">
                @if (session('error'))
                    <p class="error-message text-danger">{{ session('error') }}</p>
                @elseif (session('success'))
                    <p class="success-message text-success">{{ session('success') }}</p>
                @endif

                <form method="POST" action="{{ route('Edit_Profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" placeholder="Username" class="form-control" style="padding: 12px; border-radius: 8px; border: 1px solid #d1d3e2; width: 100%;" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" placeholder="Email" class="form-control" style="padding: 12px; border-radius: 8px; border: 1px solid #d1d3e2; width: 100%;" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}" placeholder="Phone" class="form-control" style="padding: 12px; border-radius: 8px; border: 1px solid #d1d3e2; width: 100%;" required>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" value="{{ old('address', $user->location) }}" placeholder="Address" class="form-control" style="padding: 12px; border-radius: 8px; border: 1px solid #d1d3e2; width: 100%;" required>
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Profile Image</label>
                            <input type="file" name="image" id="image" class="form-control" style="padding: 12px; border-radius: 8px; border: 1px solid #d1d3e2;">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Leave blank if unchanged" style="padding: 12px; border-radius: 8px; border: 1px solid #d1d3e2;">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('profile.show') }}" class="btn btn-secondary me-2" style="font-size: 11px ">Back</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Profile Image -->
        <div style="width: 25%; text-align: center;">
            <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" style="width: 100%; max-width: 250px;">
        </div>

    </div>
</main>
<br><br><br><br><br>

@include('includes.userfooter')
