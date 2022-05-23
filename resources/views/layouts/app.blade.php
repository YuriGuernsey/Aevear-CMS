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
        <main>
            @yield('content')
        </main>
    </div>
    <footer>
    <div class='info'>
    <div class='logo'>Aevear</div>
    <div class='desc'>Aevear is the people's agency. 
    Get performance-driven and beautiful
    Websites, Mobile Applications, Videos, Google Sheets, and more all for half the cost with our modular and customisable templates.
    </div>
    <div class='location></div>
    </div>
   
    <div class='useful_links'></div>
    <div class='latest'></div>
    </footer>
    <div class='copy'>© <?= date("Y");?> AEVEAR. All Rights Reserved.</div>
    </body>
</html>
