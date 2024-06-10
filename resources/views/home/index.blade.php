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
  
<!-- Hero Section -->
<x-header></x-header>


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

<!-- About -->
<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base leading-7 text-gray-600">Established since</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">2018</dd>
      </div>
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base leading-7 text-gray-600">Assessment of consumers</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">120+ ratings</dd>
      </div>
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base leading-7 text-gray-600">Total number of consumers</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">10,000</dd>
      </div>
    </dl>
  </div>
</div>

<!-- About Section -->
<section class=" px-[7%]">
  <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900">About Us</h2>
  <div class="poster flex justify-center p-16 transition-transform duration-500">
    <div class="posterpromoted mx-2.5 transform transition-transform hover:scale-115">
      <img src="images/ready.png" alt="Poster" class="block w-full">
    </div>
    <div class="posterpromoted mx-2.5 transform transition-transform hover:scale-115">
      <img src="images/freshdfood.png" alt="Poster" class="block w-full">
    </div>
    <div class="posterpromoted mx-2.5 transform transition-transform hover:scale-115">
      <img src="images/delicious.png" alt="Poster" class="block w-full">
    </div>
 </section>

 <!-- Testimonials Part -->
 <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
   <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
   @foreach ($testimonials as $testimonial)  
   <div class="mx-auto max-w-2xl lg:max-w-4xl">
     <img class="mx-auto h-24" src="images/logomimis.png" alt="">
      <figure class="mt-10">
       <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
        <p>{{ $testimonial->comment }}</p>
        </blockquote>
        <figcaption class="mt-10">
        <img class="mx-auto h-10 w-10 rounded-full" src="images/profileweb.png" alt="">
        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
        <div class="font-semibold text-gray-900">{{ $testimonial->name }}</div>
        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
        <circle cx="1" cy="1" r="1" />
       </svg>
      <div class="text-gray-600">Customer</div>
     </div>
    </figcaption>
   </figure>
  </div>
  @endforeach
</section>

 <!-- Footer Section -->
 <x-footer></x-footer>


  
</body>
</html>