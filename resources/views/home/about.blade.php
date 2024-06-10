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

 <!-- Footer Section -->
 <x-footer></x-footer>


  
</body>
</html>