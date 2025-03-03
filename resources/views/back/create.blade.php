@extends('base')

@section('main')

    <div class=" bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Create Book </h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">books who ever you want where ever you want any time you want enjoy contacting freinds and families.</p>
        </div>
        <form action="/storebook" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="title" class="block text-sm font-semibold leading-6 text-black">title</label>
                    <div class="mt-2.5">
                        <input type="text" name="title" id="title" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="Price" class="block text-sm font-semibold leading-6 text-black">Price</label>
                    <div class="mt-2.5">
                        <input type="text" name="price" id="Price" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-semibold leading-6 text-black">Author</label>
                    <div class="mt-2.5">
                        <input type="text" name="author" id="Author" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                    </div>
                </div>
{{--                <div class="sm:col-span-2">--}}
{{--                    <label for="email" class="block text-sm font-semibold leading-6 text-red-600">Email</label>--}}
{{--                    <div class="mt-2.5">--}}
{{--                        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="sm:col-span-2">--}}
{{--                    <label for="phone-number" class="block text-sm font-semibold leading-6 text-green-600">Phone number</label>--}}
{{--                    <div class="relative mt-2.5">--}}
{{--                        <div class="absolute inset-y-0 left-0 flex items-center">--}}
{{--                            <label for="country" class="sr-only">Country</label>--}}
{{--                            <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">--}}
{{--                                <option>US</option>--}}
{{--                                <option>CA</option>--}}
{{--                                <option>EU</option>--}}
{{--                                <option>UK</option>--}}
{{--                                <option>YE</option>--}}
{{--                                <option>MA</option>--}}
{{--                            </select>--}}
{{--                            <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold leading-6 text-green-600">Description</label>
                    <div class="mt-2.5">
                        <textarea name="description" id="Description" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold leading-6 text-black" for="image">Upload Picture</label>
                    <input type="file" name="image" id="image" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
            </div>
            <div class="mt-10">
                <button type="submit" class="block w-full rounded-md bg-cyan-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's Create It</button>
            </div>
        </form>
    </div>
@endsection
