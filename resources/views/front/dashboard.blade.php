@extends('base')

@section('main')

<div class="font-sans p-4 mx-auto lg:max-w-7xl md:max-w-4xl max-w-xl">
  <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 text-center mb-6 sm:mb-10">Food and Flavours</h2>
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">

    <div class="bg-gray-100 p-2 overflow-hidden cursor-pointer">
      <div class="bg-white flex flex-col h-full">
        <div class="w-full">
            <img src="{{ asset('images/img1.jpg')  }}" alt="book">
        </div>

        <div class="p-4 text-center flex-1">
          <h4 class="text-sm sm:text-base font-bold text-gray-800">Veg Burger with Salad</h4>
        </div>
        <button type="button" class="bg-gray-700 font-semibold hover:bg-gray-800 text-white text-sm px-2 py-2 w-full">Add to Cart</button>
      </div>
    </div>

    <div class="bg-gray-100 p-2 overflow-hidden cursor-pointer">
      <div class="bg-white flex flex-col h-full">
        <div class="w-full">
            <img src="{{ asset('images/img1.jpg')  }}" alt="book">

        </div>

        <div class="p-4 text-center flex-1">
          <h4 class="text-sm sm:text-base font-bold text-gray-800">Spicy Veg Burger</h4>
        </div>
        <button type="button" class="bg-gray-700 font-semibold hover:bg-gray-800 text-white text-sm px-2 py-2 w-full">Add to Cart</button>
      </div>
    </div>

    <div class="bg-gray-100 p-2 overflow-hidden cursor-pointer">
      <div class="bg-white flex flex-col h-full">
        <div class="w-full">
            <img src="{{ asset('images/img1.jpg')  }}" alt="book">

        </div>

        <div class="p-4 text-center flex-1">
          <h4 class="text-sm sm:text-base font-bold text-gray-800">Veggie Burger</h4>
        </div>
        <button type="button" class="bg-gray-700 font-semibold hover:bg-gray-800 text-white text-sm px-2 py-2 w-full">Add to Cart</button>
      </div>
    </div>

    <div class="bg-gray-100 p-2 overflow-hidden cursor-pointer">
      <div class="bg-white flex flex-col h-full">
        <div class="w-full">
            <img src="{{ asset('images/img1.jpg')  }}" alt="book">

        </div>

        <div class="p-4 text-center flex-1">
          <h4 class="text-sm sm:text-base font-bold text-gray-800">The Best Chickpea Food</h4>
        </div>
        <button type="button" class="bg-gray-700 font-semibold hover:bg-gray-800 text-white text-sm px-2 py-2 w-full">Add to Cart</button>
      </div>
    </div>

    <div class="bg-gray-100 p-2 overflow-hidden cursor-pointer">
      <div class="bg-white flex flex-col h-full">
        <div class="w-full">
            <img src="{{ asset('images/img1.jpg')  }}" alt="book">

        </div>

        <div class="p-4 text-center flex-1">
          <h4 class="text-sm sm:text-base font-bold text-gray-800">Burgers with fries</h4>
        </div>
        <button type="button" class="bg-gray-700 font-semibold hover:bg-gray-800 text-white text-sm px-2 py-2 w-full">Add to Cart</button>
      </div>
    </div>

    <div class="bg-gray-100 p-2 overflow-hidden cursor-pointer">
      <div class="bg-white flex flex-col h-full">
        <div class="w-full">
            <img src="{{ asset('images/img1.jpg')  }}" alt="book">

        </div>

        <div class="p-4 text-center flex-1">
          <h4 class="text-sm sm:text-base font-bold text-gray-800">Plate of Pasta</h4>
        </div>
        <button type="button" class="bg-gray-700 font-semibold hover:bg-gray-800 text-white text-sm px-2 py-2 w-full">Add to Cart</button>
      </div>
    </div>

    <div class="bg-gray-100 p-2 overflow-hidden cursor-pointer">
      <div class="bg-white flex flex-col h-full">
        <div class="w-full">
            <img src="{{ asset('images/img1.jpg')  }}" alt="book">

        </div>

        <div class="p-4 text-center flex-1">
          <h4 class="text-sm sm:text-base font-bold text-gray-800">Vegetable Food</h4>
        </div>
        <button type="button" class="bg-gray-700 font-semibold hover:bg-gray-800 text-white text-sm px-2 py-2 w-full">Add to Cart</button>
      </div>
    </div>

    <div class="bg-gray-100 p-2 overflow-hidden cursor-pointer">
      <div class="bg-white flex flex-col h-full">
        <div class="w-full">
            <img src="{{ asset('images/img1.jpg')  }}" alt="book">

        </div>

        <div class="p-4 text-center flex-1">
          <h4 class="text-sm sm:text-base font-bold text-gray-800">Pasta with meatballs</h4>
        </div>
        <button type="button" class="bg-gray-700 font-semibold hover:bg-gray-800 text-white text-sm px-2 py-2 w-full">Add to Cart</button>
      </div>
    </div>

  </div>
</div>
@endsection
