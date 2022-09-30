<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
<title>Aevear - Guernsey Digital Agency</title>
<meta name="title" content="Aevear - Guernsey Digital Agency">
<meta name="description" content="Aevear is the people's agency. 
Get performance-driven and beautiful
Websites, Mobile Applications, Videos, Google Sheets, and more all for half the cost with our modular and customisable templates.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://aevear.com/">
<meta property="og:title" content="Aevear - Guernsey Digital Agency">
<meta property="og:description" content="Aevear is the people's agency. 
Get performance-driven and beautiful
Websites, Mobile Applications, Videos, Google Sheets, and more all for half the cost with our modular and customisable templates.">
<meta property="og:image" content="">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://aevear.com/">
<meta property="twitter:title" content="Aevear - Guernsey Digital Agency">
<meta property="twitter:description" content="Aevear is the people's agency. 
Get performance-driven and beautiful
Websites, Mobile Applications, Videos, Google Sheets, and more all for half the cost with our modular and customisable templates.">
<meta property="twitter:image" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script async src="https://cdn.splitbee.io/sb.js"></script>
    <!-- Fonts -->
           <!-- Fonts -->
           <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div class='closed'>
        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
          <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
              <div class="flex items-center justify-between w-full md:w-auto">
                <a href="#">
                  <span class="sr-only">AEVEAR</span>
                  <h1 class="h-8 w-auto sm:h-10">AEVEAR</h1>
                </a>
                <div class="-mr-2 flex items-center md:hidden">
                  <button id='hmb-menu' type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Product</a>

              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Features</a>

              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Marketplace</a>

              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a>

              <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Log in</a>
            </div>
          </nav>
        </div>

        <!--
          Mobile menu, show/hide based on menu open state.
          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
        <div id='menu' class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden hidden">
          <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
              <div>
              <h1 class="h-8 w-auto sm:h-10">AEVEAR</h1>
              </div>
              <div class="-mr-2">
                <button id='hmb-close' type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                  <span class="sr-only">Close main menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="px-2 pt-2 pb-3 space-y-1">
              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Product</a>

              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Marketplace</a>

              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Company</a>
            </div>
            <a href="#" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100"> Log in </a>
          </div>
        </div>
      </div>

      <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">Get performance-driven and beautiful</span>
            <span class="block text-indigo-600 xl:inline">
              <div class="mask">
                <span data-show>Websites</span>
                <span>Mobile Applications</span>
                <span>Videos</span>
                <span>Google Sheets</span>
                <span>Websites</span>
                <span>Mobile Applications</span>
                <span>Videos</span>
                <span>Google Sheets</span>
              </div>
            </span>
        for half the cost.
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Get started </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
              <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10"> Live demo </a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">
  </div>
</div>

</header>
<style>
.mask {
    height: 65px;
    position: relative;
    overflow: hidden;
    margin-top: var(--offset);
  }
  
  .mask span {
    display: block;
    box-sizing: border-box;
    position: absolute;
    top: 60px;
    padding-bottom: var(--offset);
    
    background-size: 100% 100%;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    background-repeat: no-repeat;
  }
  
  .mask span[data-show] {
    transform: translateY(-100%);
    transition: .5s transform ease-in-out;
  }
  
  .mask span[data-up] {
    transform: translateY(-200%);
    transition: .5s transform ease-in-out;
  }
  
  .mask span:nth-child(1) {
    background-image: linear-gradient(45deg, #0ecffe 50%, #07a6f1);
  }
  
  .mask span:nth-child(2) {
    background-image: linear-gradient(45deg, #18e198 50%, #0ec15d);
  }
  
  .mask span:nth-child(3) {
    background-image: linear-gradient(45deg, #8a7cfb 50%, #633e9c);
  }
  
  .mask span:nth-child(4) {
    background-image: linear-gradient(45deg, #fa7671 50%, #f45f7f);
  }
  </style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 
<script>
setInterval(function () {
const show = document.querySelector('span[data-show]')
const next = show.nextElementSibling || document.querySelector('span:first-child')
const up = document.querySelector('span[data-up]')
if (up) {
up.removeAttribute('data-up')
}
show.removeAttribute('data-show')
show.setAttribute('data-up', '')
if (show.nextElementSibling != null){
  next.setAttribute('data-show', '');
}else{
  next = document.querySelector('span:first-child')
  next.setAttribute('data-show', '');
}
}, 3000)
$('button#hmb-menu').on('click',function(){
  $('#menu').removeClass('hidden');
      
  });
  $('button#hmb-close').on('click',function(){
    $('#menu').addClass('hidden');
        
    })
</script>

    </div>
    </body>
</html>



