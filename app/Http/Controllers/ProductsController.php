<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import the Product model

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Facades\File; 

class ProductsController extends Controller
{
    public function fetch()
    {
        // Get 10 products per page
        $products = Product::orderBy('created_at', 'desc')->paginate(10);


        // Return the products to a view named 'products.index'
        return view('fetchproducts', compact('products'));
    }
    public function detailProduct(string $id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('product', compact('product'));
    }
    public function editProduct(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'Price' => 'required|numeric',
            'Description' => 'nullable|string',
            'stock' => 'required|integer',
            'image' => 'required',
        ]);
        $imagePath = null; // Initialize as null
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName(); // Unique image name
            $image->move(public_path('images'), $imageName); // Move image to public/images
            $imagePath = 'images/' . $imageName; // Save the relative path
        }
        $updated = Product::findOrFail($id)->update([
            'name' => $request->name,
            'Price' => $request->Price,
            'Description' => $request->Description,
            'image' =>$imagePath,
            'stock' => $request->stock,
        ]);
        if ($updated) {
            return redirect('/')->with('success', 'product successfullly updated');
        } else {
            return back()->with('error', 'Failed to update the product!');
        }
    }
        public function create(){
            return view('addproduct');

        }
        public function storeProduct(Request $request)
        {
            // Validation rules
            $request->validate([
                'name' => 'required|string|max:255',
                'Price' => 'required|numeric',
                'Description' => 'nullable|string',
                'stock' => 'required|integer',
                'image' => 'required',
            ]);
        
            // Handle file upload
            $imagePath = null; // Initialize as null
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '-' . $image->getClientOriginalName(); // Unique image name
                $image->move(public_path('images'), $imageName); // Move image to public/images
                $imagePath = 'images/' . $imageName; // Save the relative path
            }
        
            // Create the product
            $productCreated = Product::create([
                'name' => $request->name,
                'Price' => $request->Price,
                'Description' => $request->Description,
                'image' => $imagePath, // Save image path to the database
                'stock' => $request->stock,
            ]);
        
            if ($productCreated) {
                return redirect('/')->with('success', 'Product created successfully');
            } else {
                return back()->with('error', 'Error while saving product to the database');
            }
        }   
    public function deleteProduct(string $id)
    {
        $delete = Product::findOrFail($id);
        $delete->delete();
        if($delete->image && File::exists(public_path($delete->image)) ){
            File::delete(public_path($delete->image));
        }
        if($delete){
            return redirect('/')->with('success', 'product succesfully is deleted');
        }
    }
    public function searchProduct(Request $request)
{
    $query = $request->input('search');

    $products = Product::where('name', 'LIKE', "%$query%")
        ->orWhere('Description', 'LIKE', "%$query%")
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('fetchproducts', compact('products'))->with('search', $query);
}

}
