<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .w-5 {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Product List</h1>
        <a href="/addproduct" class="btn btn-info mb-3"> Add Product </a>
        <div class="float-end ">
            <form action="" method="get">
              
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Seach by keyword" id="searchproduct"
                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Button</button>
            </div>
        </form>
        </div>
        <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->Price }}</td>
                        <td>{{ $item->Description }}</td>
                        <td>{{ $item->stock }}</td>

                        @if (!file_exists(public_path($item->image)) && !filter_var($item->image, FILTER_VALIDATE_URL))
                            <td><span class="text-danger">Image Missing</span></td>
                        @else
                            <td><img src="{{ asset($item->image) }}" alt="Uploaded Image" class="img-thumbnail"
                                    style="max-width: 300px;"></td>
                        @endif



                        <td><a href="/show/{{ $item->id }}" target="_blank" class="btn btn-primary">View</a> <a
                                class="btn btn-success" href="#" data-bs-toggle="modal"
                                data-bs-target="#editModal-{{ $item->id }}">Edit</a>
                            <form action="{{ route('product.delete', $item->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE') <!-- This will spoof a DELETE request -->
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1"
                        aria-labelledby="editModalLabel-{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel-{{ $item->id }}">Edit Product</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/editproduct/{{ $item->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $item->name }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" step="0.01" class="form-control" id="price"
                                                name="Price" value="{{ $item->Price }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" name="Description">{{ $item->Description }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Upload Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                            @error('image')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                            @if ($item->Description)
                                                <img src="{{ asset($item->image) }}" alt="uploadImage"
                                                    class="img-thumbnail" style="max-width: 300px;">
                                            @endif

                                        </div>
                                        <div class="mb-3">
                                            <label for="stock" class="form-label">Stock</label>
                                            <input type="number" class="form-control" id="stock" name="stock"
                                                value="{{ $item->stock }}">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>

        <div>{{ $products->links() }}</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
