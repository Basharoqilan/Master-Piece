@include('includes.userheader')

<style>
    .profile-container {
        display: flex;
        flex-direction: row;
        margin-top: 30px;
    }

    .sidebar {
        flex: 0 0 200px;
        background-color: #F8F9FA;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        border: solid #dbdbdb;
    }

    .sidebar a {
        display: block;
        margin-bottom: 10px;
        text-decoration: none;
        color: #007bff;
        font-weight: 500;
    }

    .sidebar a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .sidebar a:last-child {
        color: #ef4444;
        font-weight: bold;
    }

    .content {
        flex: 1;
        padding-left: 30px;
    }

    .user-details {
        background-color: #EEF2F3;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        border: solid #d3d8da;
    }

    .user-details p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .user-details strong {
        font-weight: 600;
    }

    .profile-image-container {
        margin-top: 20px;
    }
</style>

<div class="container profile-container">
    <div class="sidebar">
        <a href="{{ route('Edit_Profile', ['user_id' => $user->id]) }}">Edit Profile</a>
        <a href="{{ route('PurchaseHistory.index') }}">Purchase History</a>
        <a href="{{ route('userSubscriptions') }}">Subscriptions</a>
        <a href="{{ route('calculators',['user_id' => $user->id]) }}">calculators</a>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #ef4444;">
           Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

    <div class="content">
        <h1>{{ $user->name }}'s Profile</h1>
        <div class="user-details">
            <p><strong>Username:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
            <p><strong>Location:</strong> {{ $user->location }}</p>
            <p><strong>Account Creation Date:</strong> {{ $user->created_at }}</p>
        </div>
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
<br>
@include('includes.userfooter')
