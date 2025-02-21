@extends('base')

@section('main')

<div class="font-sans p-4 mx-auto lg:max-w-7xl md:max-w-4xl max-w-xl">
  <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 text-center mb-6 sm:mb-10">User Dashboard</h2>
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">

      @section('main')

          <div class="font-sans p-4 mx-auto lg:max-w-7xl md:max-w-4xl max-w-xl">
              <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 text-center mb-6 sm:mb-10">User Dashboard</h2>
              <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">

                  @foreach($books as $book)
                      <div class="bg-gray-100 p-2 overflow-hidden cursor-pointer">
                          <div class="bg-white flex flex-col h-full">
                              <div class="w-full">
                                  <img class="w-full h-full" src="{{ asset('storage/' . $book->image)  }}" alt="book">
                              </div>

                              <div class="p-4 text-center flex-1">
                                  <h2 class="text-sm sm:text-base font-bold text-gray-800">title >>{{ $book->title }}</h2>
                                  <h4 class="text-sm sm:text-base font-bold text-gray-800">desc >>{{ $book->description }}</h4>
                                  <h4 class="text-sm sm:text-base font-bold text-gray-800 opacity-50"> By >>{{ $book->author }}</h4>
                                  <h4 class="text-sm sm:text-base font-bold text-gray-800"> ${{ $book->price }}</h4>

                              </div>
                              <a href="/deleteReservation/{{ $book->id }}" type="button" class="bg-gray-700 text-center font-semibold hover:bg-gray-800 text-white text-sm px-2 py-2 w-full">Inreserved</a>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      @endsection

  </div>
</div>
@endsection
