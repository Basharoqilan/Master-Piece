@include('includes.userheader')

<div class="container">
    <br>
    <h2>Subscribe to a Plan</h2>

    @if(!auth()->check())
        <div class="alert alert-danger">
            You need to login first!
        </div>
    @else

    
        <form id="creditCardForm" action="{{ route('subscriptions.store') }}" method="POST">
            @csrf
            <input type="hidden" name="plan_id" value="{{ $plan_id }}">

            <!-- Card Number -->
            <div class="form-group">
                <label for="credit_card_number">Card Number</label>
                <input type="text" name="credit_card_number" id="credit_card_number" class="form-control" required minlength="16" maxlength="16">
                @if ($errors->has('credit_card_number'))
                    <span class="text-danger">{{ $errors->first('credit_card_number') }}</span>
                @endif
            </div>

            <!-- Card Holder Name -->
            <div class="form-group">
                <label for="credit_card_holder">Card Holder Name</label>
                <input type="text" name="credit_card_holder" id="credit_card_holder" class="form-control" required>
                @if ($errors->has('credit_card_holder'))
                    <span class="text-danger">{{ $errors->first('credit_card_holder') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="expiry_date">Expiry Date</label>
                <input type="date" name="expiry_date" id="expiry_date" class="form-control" required min="{{ \Carbon\Carbon::now()->toDateString() }}">
                @if ($errors->has('expiry_date'))
                    <span class="text-danger">{{ $errors->first('expiry_date') }}</span>
                @endif
            </div>

            <!-- CVV -->
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" id="cvv" class="form-control" required minlength="3" maxlength="3">
                @if ($errors->has('cvv'))
                    <span class="text-danger">{{ $errors->first('cvv') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Subscribe</button>
            <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
        </form>
    @endif
</div>

<br><br><br>
<br><br>

@include('includes.userfooter')
