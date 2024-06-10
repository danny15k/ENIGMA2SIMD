<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <link rel="shortcut icon" type="images/png/jpg" href="images/logomimis.png">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Mimi Ikan Bakar</title>
</head>
<body>

    <!-- NavBar -->
<x-navbar></x-navbar>

<!-- Menu Section -->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-4xl font-bold tracking-tight text-gray-900">Best Menu</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      @foreach ($products as $product)        
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="/image/{{ $product->image }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $product->title }}
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{ $product->description }}</p>
          </div>
          <p class="text-sm font-medium text-gray-900">Rp{{ $product->price }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>




  <!-- Button -->
  <div class="flex justify-center items-center">
    <a href="https://gofood.link/a/D2inuC9" class="inline-block">
      <button class="bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-bold py-3 px-6 rounded-full shadow-lg transform transition-all duration-500 ease-in-out hover:scale-110 hover:brightness-110 hover:animate-pulse active:animate-bounce">
        Order Now
      </button>
    </a>
  </div>

 <!-- Footer Section -->
 <x-footer></x-footer>


</body>
</html>