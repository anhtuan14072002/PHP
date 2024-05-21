<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="{{ route('products.create') }}">Add New Product</a>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ProductType</th>
                <th>ProductCode</th>
                <th>ProductName</th>
                <th>Quantity</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->ProductType }}</td>
                <td>{{ $product->ProductCode }}</td>
                <td>{{ $product->ProductName }}</td>
                <td>{{ $product->Quantity }}</td>
                <td>{{ $product->Note }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
