@extends('layouts.app')

@section('content')

<script src="https://cdn.tailwindcss.com"></script>

<div class="container">
    <div class="grid grid-cols-12 justify-center">
        <div class="col-span-10 col-start-2 w-full">
        <div class="border p-7 rounded-lg bg-gray-200">
            <div class="border p-3 rounded-lg">
            <div class="m-2 text-center">{{ __('Admin Dashboard') }}</div>

                <h2 class="mb-2 text-center text-3xl font-bold"> Edit Product</h2>
                <hr>
                </div>

                <div class>
                    <form action="{{ url('product/update/' .$product->id) }}" enctype="multipart/form-data" method="post" class=" grid gap-4 place-items-center">
                        @csrf
                    <div>
                        <label for="product_name">Product Name:</label>
                        <input type="text" name="product_name" id='product_name' class="border border-1 w-full md:w-80 text-center" value="{{$product->pro_name}}" >
                    </div>

                    <div>
                        <label for="product_price">Product Price:</label>
                        <input type="number" name="product_price" id='product_price' class="border border-1 w-full md:w-80 text-center" value="{{$product->pro_price}}">
                    </div>

                    <div>
                        <label for="product_image">File Upload</label>
                        <input type="file" name="product_image" id='product_image' class="border border-1 w-full md:w-80 text-center" value="{{$product->pro_image}}">
                    </div>

                    <div>
                        <input type="submit" class="border border-1 py-2 px-4 bg-green-600">
                </div>
                </form>
                
                <div class="felx flex-col justifyy-center m-auto">
                    <img src="{{ url($product->pro_image_url) }}" alt="IMG" class="border border-1 w-80 text-center" >
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
