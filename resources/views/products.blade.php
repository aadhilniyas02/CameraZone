@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4 text-center"> Products</h1>

    <!-- Product Grid Layout -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach($product as $item)
            <!-- Product Card -->
            <div class="bg-gray-100 border border-gray-300 rounded-lg shadow-lg p-6 flex flex-col items-center">
                <img src="{{ $item->pro_image_url }}" alt="{{ $item->pro_name }}" class="w-50 h-30 object-cover mb-4">
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-center">{{ $item->pro_name }}</h2>
                    <p class="text-gray-600 text-center mb-4">Price: {{ $item->pro_price }} LKR</p>
                    <button class="mt-auto bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600">
                        Add to Cart
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
