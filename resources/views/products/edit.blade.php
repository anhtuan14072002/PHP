<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="ProductType">Product Type:</label>
            <input type="text" id="ProductType" name="ProductType" value="{{ old('ProductType', $product->ProductType) }}">
        </div>
        <div>
            <label for="ProductCode">Product Code:</label>
            <input type="text" id="ProductCode" name="ProductCode" value="{{ old('ProductCode', $product->ProductCode) }}">
        </div>
        <div>
            <label for="ProductName">Product Name:</label>
            <input type="text" id="ProductName" name="ProductName" value="{{ old('ProductName', $product->ProductName) }}">
        </div>
        <div>
            <label for="Quantity">Quantity:</label>
            <input type="number" id="Quantity" name="Quantity" value="{{ old('Quantity', $product->Quantity) }}">
        </div>
        <div>
            <label for="Note">Note:</label>
            <input type="text" id="Note" name="Note" value="{{ old('Note', $product->Note) }}">
        </div>
        <button type="submit">Update Product</button>
    </form>
</body>
</html>
