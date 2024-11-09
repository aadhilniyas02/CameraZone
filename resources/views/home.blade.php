@extends('layouts.app')

@section('content')

<script src="https://cdn.tailwindcss.com"></script>
@vite('resources/css/app.css')

<!-- Main Content -->
 <div class="min-h-screen flex flex-col justify-between"> 

<div class="flex-grow"> 
        <!-- Cover Image Section -->
        <section class="bg-gray-900 text-white ">
            <img src="{{ asset('images/cover.jpg') }}" alt="Cover Image" class="w-full h-auto m-0 p-0">
        </section>

    <main class="container mx-auto px-4 py-8"> 
        <!-- Features Section -->

        <section class="my-8 grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-gray-200 p-4 rounded-lg text-center">
                <img src="{{ asset('images/canonR5.webp') }}" alt="Camera" class="mx-auto w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg h-64 object-cover">
                <p class="font-semibold font-serif">Capture life's moments with <br>our high-quality cameras!</p>
                <p class="font-semibold font-serif"> Shop now for top brands and unbeatable prices at our camera store.</p>
            </div>

            <div class="bg-gray-200 p-4 rounded-lg text-center">
                <img src="{{ asset('images/djidrone.png') }}" alt="Drone" class="mx-auto w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg h-60 object-cover">
                <p class="font-semibold font-serif">Explore stunning aerial views with our top-rated drones!
                <p class="font-semibold font-serif">   Shop now for cutting-edge models at unbeatable prices</p>
            </div>

            <div class="bg-gray-200 p-4 rounded-lg text-center">
                <img src="{{ asset('images/tripodC.png') }}" alt="Tripod" class="mx-auto w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg h-64 object-cover">
                <p class="font-semibold font-serif">Capture perfect shots with premium camera accessories: high-quality lenses, sturdy tripods, and versatile bags</p>
            </div>

        </section>

        

        <!-- Products Section -->
        <section class="my-8 text-center">
            <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold mb-4">Our Products</h2>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                <div class="bg-gray-200 p-4 rounded-lg text-center">
                    <img src="{{ asset('images/gopro13.png') }}" alt="Product 1" class="mx-auto">
                    <p class="font-bold">GoPro HERO13 Black</p>
                    <p>145 500 LKR</p>
                </div>

                <div class="bg-gray-200 p-4 rounded-lg text-center">
                    <img src="{{ asset('images/sony85.webp') }}" alt="Product 2" class="mx-auto">
                    <p class="font-bold">Sony FE 85mm f/1.4 Lens </p>
                    <p>449 500 LKR</p>
                </div>

                <div class="bg-gray-200 p-4 rounded-lg text-center">
                    <img src="{{ asset('images/djiosmo.png') }}" alt="Product 3" class="mx-auto">
                    <p class="font-bold">DJI Osmo Mobile 6 </p>
                    <p> 48 000 LKR</p>
                </div>

                <div class="bg-gray-200 p-4 rounded-lg text-center">
                    <img src="{{ asset('images/sonya7ii.webp') }}" alt="Product 4" class="mx-auto">
                    <p class="font-bold">Sony Alpha A7 III <br> (Body Only)</p>
                    <p>399 000 LKR</p>
                </div>

            </div>
        </section>

        <!-- Brands Section -->
        <section class="my-8 text-center ">
            <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold mb-4">Our Brands</h2>
            <div class="flex flex-wrap justify-center space-x-4 bg-gray-200 p-4 rounded-lg text-center">
                <img src="{{ asset('images/canon.png') }}" alt="Canon" class="w-26 h-24 object-contain">
                <img src="{{ asset('images/nikon.png') }}" alt="Nikon" class="w-26 h-24 object-contain">
                <img src="{{ asset('images/sony.png') }}" alt="Sony" class="w-26 h-24 object-contain">
                <img src="{{ asset('images/gopro.png') }}" alt="GoPro" class="w-26 h-24 object-contain">
                <img src="{{ asset('images/dji.png') }}" alt="DJI" class="w-26 h-24 object-contain">
                <img src="{{ asset('images/insta.png') }}" alt="Insta360" class="w-26 h-24 object-contain">
 
            </div>
        </section>

    </main>
</div>


    <!-- Footer -->
    <footer class="bg-gray-900 text-white p-6 w-full">
        <div class="container mx-auto text-center md:text-left md:flex justify-between items-start">

            <div class="mt-4 md:mt-0 md:w-1/3 flex justify-start text-left">
                <div>
                <p>Home</p>
                <br>
                <p>Products</p>
                </div>
            </div>

            <div class="mt-4 md:mt-0 md:w-1/3 flex justify-start text-left">
                <div>
                <h4 class="text-xl font-bold">Store Opening Hours</h4>
                <p>Monday - Saturday: 9.00am to 7.00pm</p>
                <p>Sunday: 9.00am to 3.00pm</p>
                <p>Closed on Poya days</p>
                </div>
            </div>

            <div class="mt-4 md:mt-0 md:w-1/3 flex justify-start text-left">
                <div>
                <p class="text-xl font-bold">Address</p>
                <p>No 40, 5th Floor,</p>
                <p>Majestic City, Colombo 04,</p>
                <p>Western</p>
                <p>077 123 4567</p>
                <p>camerazone@gmail.com</p>
                </div>
            </div>
            
        </div>
    </footer>

</div>
@endsection