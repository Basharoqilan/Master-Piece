@include('includes.userheader')

<br>

<main class="container" style="color: black">
    <h1 class="text-center" style=" font-size: 36px; margin-bottom: 20px;">Purchase History</h1>


        <table class="table" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f2f2f2; text-align: left;">
                    <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Order ID</th>
                    <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Order Date</th>
                    <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Total</th>
                    <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Payment Method</th>
                    <th style="padding: 12px 8px; border-bottom: 1px solid #ddd;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $order->id }}</td>
                        <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $order->created_at }}</td>
                        <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{$order->total_cost }}$</td>
                        <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">{{ $order->payment_method }}</td>
                        <td style="padding: 12px 8px; border-bottom: 1px solid #ddd;">
                            <a href="{{ route('order_details',  $order->id) }}" class="btn btn-primary" >Details</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    <div class="text-end">
        <a href="{{ route('profile.show') }}" class="btn btn-secondary me-2" style="font-size: 11px ">Back</a>

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
