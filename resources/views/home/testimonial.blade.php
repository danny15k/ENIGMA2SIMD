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


 <!-- Testimonials Part -->
 <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
  <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
  <div class="mx-auto max-w-2xl lg:max-w-4xl">
    <img class="mx-auto h-24" src="images/logomimis.png" alt="">
    <figure class="mt-10">
      <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
        <p>“Good food and standard prices. Recommended grriled chicken, fish and fried chicken onions, and best kankung belacan.”</p>
      </blockquote>
      <figcaption class="mt-10">
        <img class="mx-auto h-10 w-10 rounded-full" src="images/profileweb.png" alt="">
        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
          <div class="font-semibold text-gray-900">Septiadi Lim</div>
          <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
            <circle cx="1" cy="1" r="1" />
          </svg>
          <div class="text-gray-600">Customer</div>
        </div>
      </figcaption>
    </figure>
    </div>
  </section>

 <!-- Footer Section -->
 <x-footer></x-footer>

  
</body>
</html>