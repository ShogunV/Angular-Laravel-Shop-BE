<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;

use App\Product;
use App\Category;
use App\Order;
use App\User;

class AdminController extends Controller
{
    public function index() {
        $products = Product::all();
        $categories = Category::all();
        return compact('products', 'categories');
    }

    public function store(Request $request) {
        $formInput=$request->except('image');

        if($formInput['discount'] == null || $formInput['discount'] == '') {
            $formInput['discount'] = 0;
        }

        if($formInput['description'] == null || $formInput['description'] == '') {
            $formInput['description'] = 'No description';
        }
        
        $this->validate($request,[
            'title'=>'required',
            'category'=>'required',
            'price'=>'required|numeric',
            'discount' => 'numeric|between: 0, 100|nullable'
        ]);
    
        $image=$request->image;
        if($image){
            $this->validate($request,[
                'image'=>'image|mimes:png,jpg,jpeg|max:10000'
            ]);
            $imageName=$image->getClientOriginalName();
            $image->move('img',$imageName);
            $formInput['image']='img/'.$imageName;
        } else {
            $formInput['image']='img/No_image_available.png';
        }
        $formInput['price'] = $formInput['price'] * 100;
    
        Product::create($formInput);
        $products = Product::all();
        return compact('products');
    }

    public function edit(Request $request) {
        $product=Product::find($request->id);

        $formInput=$request->except('image');

        if($formInput['discount'] == null || $formInput['discount'] == '') {
            $formInput['discount'] = 0;
        }

        if($formInput['description'] == null || $formInput['description'] == '') {
            $formInput['description'] = 'No description';
        }

        $this->validate($request,[
            'title'=>'required',
            'category'=>'required',
            'price'=>'required|numeric',
            'discount' => 'numeric|between: 0, 100|nullable'
        ]);

        $image=$request->image;
        if($image){
            $this->validate($request,[
                'image'=>'image|mimes:png,jpg,jpeg|max:10000'
            ]);
            $imageName=$image->getClientOriginalName();
            $image->move('img',$imageName);
            $formInput['image']='img/'.$imageName;
        } else {
            $formInput['image']='img/No_image_available.png'; 
        }
        $formInput['price'] = $formInput['price'] * 100;

        $product->update($formInput);
        $products = Product::all();
        return compact('products');
    }

    public function destroy(Request $request)
    {
        Product::destroy($request->id);
        $products = Product::all();
        return compact('products');
    }

    public function userIndex() {
        $users = User::all();
        $orders = Order::all()->each(function($item, $key) {
            $item['order'] = unserialize($item['order']);
        })->groupBy('user_id');
    
        foreach($orders as $index => $order) {
            $users->where('id', $index)->first()['totalOrders'] = count($order);
    
            $sum = 0;
            $qua = 0;
            foreach($order as $key => $item) {
                $sum += $item->order['total'];
                $qua += $item->order['totalQuantity'];   
            }
            $users->where('id', $index)->first()['totalDineros'] = $sum;
            $users->where('id', $index)->first()['totalItems'] = $qua;
        }
    
        return compact('users');
    }

    private function getCategories() {
        $categories = Category::all();
        $orders = Order::all()->each(function($item, $key) {
            $item['order'] = unserialize($item['order']);
        });
        
        foreach($orders as $index => $order) {
            foreach($order->order['products'] as $key => $item) {
                if($categories->where('name', $item['category'])->first()){
                    $categories->where('name', $item['category'])->first()['quantity'] += $item['quantity'];
                    $categories->where('name', $item['category'])->first()['total'] += round($item['price'] * (1 - $item['discount']/10000) * $item['quantity']);
                }
            }
        }

        return $categories;
    }

    public function categoryIndex() {

        $categories = $this->getCategories();
    
        return compact('categories');
    }

    public function categoryStore(Request $request) {
        $this->validate($request,[
            'name'=>'required'
        ]);
        Category::create($request->all());
        $categories = $this->getCategories();
        return compact('categories');
    }

    public function categoryEdit(Request $request) {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $category = Category::find($request->id);
        $category->update($request->all());
        $categories = $this->getCategories();
        return compact('categories');
    }

    public function categoryDestroy(Request $request)
    {
        Category::destroy($request->id);
        $categories = $this->getCategories();
        return compact('categories');
    }

    public function orderIndex() {
        $orders = Order::orderBy('created_at', 'desc')->get();
        
        foreach ($orders as $index => $order) {
            $order['user'] = User::find($order['user_id'])->name;
            $order['order'] = unserialize($order->order);
            $order['orderItems'] = $order->order['products'];
        }
    
        return compact('orders');
    }
}
