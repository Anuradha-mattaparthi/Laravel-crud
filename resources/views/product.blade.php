<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product_image img {
            width: 100%;
            height: 100%;
        }
        .product-details {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
         @if (!empty($product->name))
                <h2 class="text-center">{{ $product->name }}</h2>
         @endif
     
        <div class=" product-details">
            <div class="product_image">
                <img src="{{ asset($product->image) }}" alt="Product Image" class="img-fluid ">
            </div>

            <div class="mt-5">
                <h2 class="mb-4">Product Details</h2>
                @if (!empty($product->Price))
                <p><strong>Price:</strong> ${{ $product->Price }}</p>
                @endif
                @if (!empty($product->Description))
                <p><strong>Description:</strong> {{ $product->Description }}</p>
                @endif
                @if (!empty($product->stock))
                <p><strong>Stock:</strong> {{ $product->stock }}</p>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
