@extends('base')

@section('main')
    <section class="flex min-h-screen">
        <!-- Registration Form on the Left -->
        <div class="flex items-center justify-center w-1/2 p-8 bg-white">
            <div class="w-full max-w-md">
                <h1 class="text-2xl font-semibold text-gray-800 text-center">Create Your Library Account</h1>
                <form action="/store" method="POST" class="grid grid-cols-1 gap-6 mt-8" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label class="block mb-2 text-sm text-gray-600" for="firstName">First Name</label>
                        <input type="text" name="firsName" id="firstName" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-[#E8E8E8] border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        @error('firsName')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600" for="lastName">Last Name</label>
                        <input type="text" name="lastName" id="lastName" placeholder="Doe" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-[#E8E8E8] border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        @error('lastName')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600" for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="example@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-[#E8E8E8] border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600" for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-[#E8E8E8] border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600" for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" placeholder="123-456-7890" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-[#E8E8E8] border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        @error('phone')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600" for="image">Upload Picture</label>
                        <input type="file" name="image" id="image" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-[#E8E8E8] border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        @error('image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="flex justify-center w-full px-6 py-3 mt-4 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">Sign Up</button>
                </form>
            </div>
        </div>

        <!-- Full-Screen Video Background on the Right -->
        <div class="relative w-1/2">
            <video class="absolute inset-0 w-full h-full" autoplay loop muted>
                <source src="{{ asset('storage/book_video/v1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>



    </section>
@endsection
