<table>
    <tr>
        <td>Product</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Price</td>
    </tr>

    @foreach($orders as $order)
        <tr>
            <td>{{ $order->product->title }}</td>
            <td>{{ $order->first_name }}</td>
            <td>{{ $order->last_name }}</td>
            <td>{{ $order->price }}</td>
        </tr>
    @endforeach
</table>