@extends('layouts.app')

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
                  {{ Auth::user()->name }}
               
<a href="{{ route('admin.users.index') }}">
                    <img src="/upload/ganjar.png" alt="">
                        </a>
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