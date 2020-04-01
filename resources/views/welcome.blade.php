<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />	

        <title>Laravel</title>

        <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">   

    </head>
    <body>
        <div id='app' v-cloak>
      <transition name='anime' enter-active-class='animated fadeIn' :duration='200' leave-active-class='animated fadeOut'>
           <router-view></router-view>	
       </transition>
     </div>
        
     <noscript><h5 class='text-center text-danger'>JavaScript is required.</h5></noscript>
      <script src="{{asset('/js/app.js')}}"></script>
 </body>
</html>
