@include('includes.header')

  <style>
    .card {
        max-width: 800px;
        margin: auto;
    }

    .profile-details {
        margin-top: 20px;
    }

    .profile-details p {
        font-size: 18px;
        margin-bottom: 10px;
        font-weight: 500;
    }

    .profile-details p strong {
        font-weight: 700;
    }

    .profile-image {
        text-align: center;
        margin-bottom: 20px;
    }

    .profile-image img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
    }

    .card-header {
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        color: white;
    }

    .button-group {
        margin-top: 1.5rem;
        text-align: center;
    }

    .btn {
        width: 120px;
    }
    .mx-4 {
      margin-right: 0rem !important;
      margin-left:0rem !important;
  }
  </style>


    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-gradient-primary text-white">
                        Admin Profile
                    </div>
                    <div class="card-body">
                      <div class="profile-image">
                          <img src="{{ asset('storage/' . $admin->image) }}" alt="Admin Profile Image">
                      </div>
                      <div class="profile-details">
                          <p>Name: <span>{{ $admin->name }}</span></p>
                          <p>Email: <span>{{ $admin->email }}</span></p>
                          <p>Phone: <span>{{ $admin->phone }}</span></p>
                          <p>Location: <span>{{ $admin->location }}</span></p>
                      </div>
                  </div>
                        <div class="button-group text-center">
                          <a href="{{ route('admin.edit', ['id' => $admin->id]) }}" class="btn bg-gradient-primary" style="font-size: 15px;width : 150px">Edit Profile</a>
                          <a href="{{ route('users') }}" class="btn bg-gradient-secondary" style="font-size: 15px; padding: 10px;">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
