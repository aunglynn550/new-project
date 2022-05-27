<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
   

    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>


<header>

<div class="nav-container">
    
       
            <ul class="nav-content">
                <li class="nav-item">
                    <a class="nav-link" href=""> Home</a>                   
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""> Contact Us</a>                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""> About</a>                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""> Blogs</a>                    
                </li>
            </ul>

</div>
</header>


<body>
    <h1>This is the latest posts!</h1>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image">

                    <img src="/upload/ganjar.png" alt="">

                </div>
              
            </div>
            <div class="col-md-6">

                <h1>15% Off</h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                 mattis, pulvinar dapibus leo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit 
                 tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, 
                luctus nec ullamcorper mattis, pulvinar dapibus leo
                </p>
            </div>
        </div>
    </div>


</body>
</html>