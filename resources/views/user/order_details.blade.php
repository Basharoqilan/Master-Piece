@include('includes.userheader')

<br>

<main class="container" style="color: black;">
    <h1 class="text-center" style=" font-size: 36px; margin-bottom: 20px;">Order Details</h1>

    <table class="table">
        <thead>
            <tr style="background-color: #f2f2f2; text-align: left;">
                <th>Order ID</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderItems as $orderItem)
            <tr>
                <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $orderItem->order_id }}</td>
                <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">
                    <img src="{{ asset('images/' . ($orderItem->product->image ?? 'placeholder.jpg')) }}" alt=" " style="width: 100px;">
                </td>
                <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $orderItem->product->name ?? 'No Product Name' }}</td>
                <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $orderItem->quantity }}</td>
                <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $orderItem->price }}$</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-end">
        <a href="{{ route('PurchaseHistory.index') }}" class="btn btn-secondary me-2" style="font-size: 11px;">Back</a>
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
