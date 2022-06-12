<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/new/style.css" >  
</head>
<body>
    <div class="navigation">
        <div class="menuToggle"></div>
        <ul>
            <li class="list">
                <a href="#">
                    <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="text">Home</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="text">About</span>
                </a>
            </li>
            <li class="list active">
                <a href="#">
                    <span class="icon">
                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    </span>
                    <span class="text">Messages</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">
                    <ion-icon name="camera-outline"></ion-icon>
                    </span>
                    <span class="text">Photos</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon">
                    <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="text">Settings</span>
                </a>
            </li>
        </ul>
    </div>

    <script>
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.onclick = function(){
            navigation.classList.toggle('open')
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>