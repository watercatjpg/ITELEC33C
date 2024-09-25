<x-app-layout>
<div class="container">
        <h1>Pre-Orders</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Quantity</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($preOrders as $preOrder)
                    <tr>
                        <td>{{ $preOrder->id }}</td>
                        <td>{{ $preOrder->full_name }}</td>
                        <td>{{ $preOrder->email }}</td>
                        <td>{{ $preOrder->quantity }}</td>
                        <td>{{ $preOrder->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
