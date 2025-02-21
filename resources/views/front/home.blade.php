@extends('base')

@section('main')
    @if(count($books)>0)
        <div class="font-sans px-6 sm:px-10 lg:px-16 py-8 w-screen min-h-screen overflow-hidden">
        <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 text-center mb-12 uppercase tracking-wide">📚 Best Books</h2>
        @if (session('error'))
            <script>
                window.onload = function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: "{{ session('error') }}",
                    });
                };
            </script>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 justify-items-center">
            @foreach($books as $book)
                <div class="bg-white border border-gray-200 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 w-full max-w-lg rounded flex flex-col overflow-hidden">
                    <!-- Book Image -->
                    <div class="w-full h-48">
                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $book->image) }}" alt="book">
                    </div>

                    <!-- Book Details -->
                    <div class="p-6 flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $book->title }}</h3>
                        <h4 class="text-md font-semibold text-gray-600">By: <span class="text-gray-800">{{ $book->author }}</span></h4>
                        <p class="text-sm text-gray-500 mt-2">{{ Str::limit($book->description, 100) }}</p>
                        <h4 class="text-lg font-semibold text-gray-800 mt-3">$ {{ $book->price }}</h4>
                    </div>

                    <!-- Buttons -->
                    <div class="p-6">
                        @if(session()->has('role') && session('role') == 'admin')
                            <div class="flex justify-between">
                                <a href="/updatebook/{{$book->id}}" class="bg-yellow-500 hover:bg-yellow-600 text-black font-semibold px-5 py-2 rounded-lg border border-yellow-700">✏️ Update</a>
                                <a href="/adminDashboard/delete/{{ $book->id }}" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-5 py-2 rounded-lg border border-red-700">🗑️ Delete</a>
                            </div>
                        @else
                            <div>
                                @if($book->status === null)
                                    <a href="/reservation/{{ $book->id }}" class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg border border-blue-800">📖 Reserve</a>
                                @elseif(session('user')))
                                    <p class="block text-center bg-gray-400 text-white font-semibold px-5 py-2 rounded-lg border border-gray-600">⛔ Already Reserved</p>
                                @else
                                <a href="/signin" class="block text-center bg-gray-400 text-white font-semibold px-5 py-2 rounded-lg border border-gray-600">📖 Reserve</a>
                                @endif
                            </div>
                        @endif
                    </div>


                </div>
            @endforeach
                @else
                    <div class="flex justify-center items-center min-h-screen bg-gray-100">
                        <p class="flex justify-center text-5xl">you don't have any books</p>
                    </div>
                @endif

        </div>
    </div>
@endsection
