<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slopes</title>
    <link rel="stylesheet" href="new/slopes.css">
</head>
<body>
<div class="main-grid">
    <div>
        <p class="logo">SLOPES</p>
        <p class="text-subdued">copyright here 2022</p>
    </div>
    
    <div class="stack">
            <header class="flex-row justify-content-sb">
                <button class="menu-toggle">Menu</button>
                <nav class="primary-nav">
                    <ul class="nav-list flex-row" style="--gap: 3rem">
                        <li>Lorem</li>
                        <li>Quod</li>
                        <li>A!</li>
                        <li>Laborum?</li>
                    </ul>
                </nav>
            </header>

            <div class="closed-clip-path nav-grid grid-even-columns align-content-center">
                <div>
                    <h3>Lorem.</h3>
                    <ul>
                        <li>Lorem.</li>
                        <li>Voluptatem.</li>
                        <li>Quos.</li>
                        <li>Blanditiis.</li>
                    </ul>
                </div>
                <div>
                    <h3>Minima.</h3>
                    <ul>
                    <li>Lorem.</li>
                        <li>Voluptatem.</li>
                        <li>Quos.</li>
                        <li>Blanditiis.</li>
                    </ul>
                </div>
                <div>
                    <h3>Iste!</h3>
                    <ul>
                    <li>Lorem.</li>
                        <li>Voluptatem.</li>
                        <li>Quos.</li>
                        <li>Blanditiis.</li>
                    </ul>
                </div>
                <div>
                    <h3>Odit!</h3>
                    <ul>
                    <li>Lorem.</li>
                        <li>Voluptatem.</li>
                        <li>Quos.</li>
                        <li>Blanditiis.</li>
                    </ul>
                </div>
            </div>

    <div class="content-grid align-content-center">
      
        <main class="grid-70-30">
            <div>
            <h1>Get fit to hit the slopes -- winter sweden</h1>
            </div>
            

            <div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta possimus aspernatur in saepe delectus assumenda, eveniet, veritatis aut commodi mollitia excepturi qui repellendus ut nihil consequatur dolorem, magni reiciendis repudiandae!
                </p>
                <a href="#" class="button">Send</a>

            </div>
        </main>
       
    </div>

        <footer>social links</footer>

        <div class="content-grid-bg"></div>
        <div class="nav-grid-bg"></div>

        <div class="video-bg">
            <video autoplay loop muted src="video/video-bg.mp4"></video>
        </div>


    </div>
    
</div>

<script>
    const menuToggle = document.querySelector('.menu-toggle');
    const mainGrid = document.querySelector('.main-grid');
    

    menuToggle.addEventListener('click', () => {
        mainGrid.toggleAttribute('data-big-nav-open');
    })
</script>
</body>
</html>