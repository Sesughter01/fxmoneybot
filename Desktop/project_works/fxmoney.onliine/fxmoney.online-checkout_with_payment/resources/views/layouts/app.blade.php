<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="{{ URL('css/style.css') }}">
  {{-- <link rel="stylesheet" href="{{ URL('css/fxmoneyrobot.css') }}"> --}}
 

  

</head>
<body>
   

     <div id="main"   >
       
         
             @yield('content')
         
             
                
            
           </div>
           @include('layouts.footer')
       </div>
</body>
</html>