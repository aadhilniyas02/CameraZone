@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto">
    <div class="grid grid-cols-12 justify-center">
        <div class="col-span-10 col-start-2 w-full">
            <div class="border p-7 rounded-lg bg-gray-200">
                <div class="m-2 ">
                <div class="m-2 text-center">{{ __('Admin Dashboard') }}</div>
                    <h2 class="mb-2 text-center text-3xl font-bold">Manage Products</h2> 
                    <hr>
                </div>
                <div class="grid grid-cols-1 gap-4 mt-4">

                    @forelse($product as $pro)

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-3 items-center border p-3 rounded-lg  bg-gray-100">

                            <div class="col-span-2 flex flex-col justify-center m-auto">
                                <img src="{{ url($pro->pro_image_url) }}" alt="IMG" class="h-[10em]">
                            </div>

                            <div class="col-span-2 md:col-span-1 flex flex-col items-center justify-center text-center md:text-left">
                                <p class="text-sm text-black font-semibold">{{ $pro->pro_name }}</p>
                                <p class="text-sm text-black">{{ $pro->pro_price }} LKR </p>
                            </div>

                            <div class="col-span-2 md:col-span-1 flex justify-center md:justify-start gap-3">
                                <a href="{{ url('product/edit/' .$pro->id) }}" class="bg-blue-300 text-white h-fit p-1 rounded-lg" >EDIT</a>

                                <form action="{{ url('product/delete') }}" method="post">
                                    @csrf 
                                    <input type="hidden" name="pro_id" value="{{ $pro->id }}" >
                                    <input type="submit" value="DELETE" class="bg-red-500 text-white h-fit p-1 rounded-lg">
                            </div>

                    </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

@endsection