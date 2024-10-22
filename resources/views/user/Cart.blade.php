@include('includes.userheader')
<style>
.table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 1em;
    font-size: 16px;
}

.table th, .table td {
    text-align: center;
    padding: 15px;
}

.table th {
    font-weight: bold;
    text-transform: uppercase;
    color: #333;
}

.table tbody tr {
    background-color: #f9f9f9;
}

.table tbody tr img {
    width: 75px;
    height: auto;
}

.table tbody tr td {
    padding: 20px;
    vertical-align: middle;
}



.btn-success {
    background-color: #28a745;
    font-size: 18px;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    color: white;
    text-decoration: none;
}

.btn-success:hover {
    background-color: #218838;
}

.btn-danger {
    background-color: #dc3545;
    font-size: 14px;
    padding: 8px 12px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    color: white;
}

.btn-danger:hover {
    background-color: #c82333;
}

.btn-secondary {
    background-color: #6c757d;
    font-size: 14px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    color: white;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

.fa-trash {
    font-size: 18px;
    cursor: pointer;
}

.fa-trash:hover {
    color: #c82333;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    color: white;
    border-radius: 5px;
    font-size: 12px;
    height: 6vh;
}

.btn-primary:hover {
    background-color: #0056b3;
}
.cart-actions {
    display: flex;
    gap: 5px; /* Adjust the space between buttons */
}

</style>

<div class="container">
    <br>
    <h1>Cart</h1>

    @if(session('cart') && is_array(session('cart')['products']))
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalPrice = 0;
                @endphp

                @foreach(session('cart')['products'] as $id => $details)
                    @if(is_array($details))
                        @php
                            $itemTotal = $details['price'] * $details['quantity'];
                            $totalPrice += $itemTotal;
                        @endphp
                        <tr>
                            <td><img src="{{ asset('images/' . $details['image']) }}" width="75" height="auto" alt="{{ $details['name'] }}"></td>
                            <td>{{ $details['name'] }}</td>
                            <td>${{ number_format($details['price'], 2) }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td>${{ number_format($itemTotal, 2) }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Cart actions">
                                    <form action="{{ route('cart.decrease', $id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button class="btn btn-secondary" style="margin-right: 2px">-</button>
                                    </form>

                                    <form action="{{ route('cart.remove', $id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button class="btn btn-secondary">
                                            <i class="fa fa-trash" style="color: white"></i>
                                        </button>
                                    </form>

                                    <form action="{{ route('cart.increase', $id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button class="btn btn-secondary" style="margin-left: 2px">+</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-12 text-left">
                <h4>Total Price: ${{ number_format($totalPrice, 2) }}</h4>
                <a href="#" class="btn btn-primary checkout-btn" data-payment="cash">Pay in Cash</a>
                <a href="{{ route('checkout.credit') }}" class="btn btn-secondary">Pay with Credit</a>
            </div>
        </div>
    @else
        <p>Your cart is empty!</p>
    @endif
</div>


<br>
<br>
<br>
<br>
<br>
@include('includes.userfooter')


<script>
    document.querySelectorAll('.checkout-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            var isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};

            if (!isLoggedIn) {
                alert('You need to login first!');
                window.location.href = "{{ route('login') }}";
            } else {
                if (btn.dataset.payment === 'cash') {
                    alert('Payment successful! Redirecting to home.');

                    // Create a form element and submit for cash payments
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = "{{ route('orders.store') }}";

                    const csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = "{{ csrf_token() }}";

                    const paymentInput = document.createElement('input');
                    paymentInput.type = 'hidden';
                    paymentInput.name = 'payment_method';
                    paymentInput.value = 'cash';

                    form.appendChild(csrfInput);
                    form.appendChild(paymentInput);
                    document.body.appendChild(form);

                    setTimeout(function() {
                        form.submit();
                    }, 1000);
                }
            }
        });
    });
</script>
