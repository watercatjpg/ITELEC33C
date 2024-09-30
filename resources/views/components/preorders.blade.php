    @props(['preOrders'])
    <div class="container">
        <h1>Pre-Orders</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Quantity</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($preOrders) && count($preOrders) > 0)
                    @foreach($preOrders as $preOrder)
                        <tr>
                            <td>{{ $preOrder->id }}</td>
                            <td>{{ $preOrder->user_id }}</td>
                            <td>{{ $preOrder->full_name }}</td>
                            <td>{{ $preOrder->email }}</td>
                            <td>{{ $preOrder->quantity }}</td>
                            <td>{{ $preOrder->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">No pre-orders found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
