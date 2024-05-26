<?php
session_start();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HuTaoMains</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="assets/js/index.js"></script>
    <!-- ONLY FOR LOCAL PROPORSES NOT DEPLOY -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
</head>


<body class="bg-[#393E46]">
   <header> 
   <nav class="py-4 text-white bg-[#393E46] border-b border-red-500">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.php">
                    <img class="w-30 h-12 hover:scale-110 duration-200" src="assets/img/icon.png">
                </a>

                <div class="px-60 flex items-center space-x-20">
                    <a href="wiki.php" class="text-2xl font-bold hover:text-rose-600 duration-100"> WikiBuilds </a>

                    <a href="farming.php" class="text-2xl font-bold hover:text-rose-600 duration-100"> Farming  </a>
                   
                    <a href="weapons.php" class="text-2xl font-bold hover:text-rose-600 duration-100">Weapons</a> 

                </div>  
            </div>

            <?php if (isset($_SESSION['user'])) { ?> 
            <button onclick="dropdown()" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-12 h-12 rounded-full" src="assets/img/Character/Inazuma/Kirara.png" alt="user photo">
            </button>
            <?php } ?>



             <?php if (!isset($_SESSION['user'])) { ?>
                <a href="login.php" class="py-1.5 px-5 rounded-md bg-rose-600 hover:bg-rose-700 font-semibold flex items-center">
    <img src="assets/img/profile 1.png" alt="Iniciar Sesión" class="w-5 h-5 mr-2">
    Iniciar Sesion
</a>
</a>
</a>
            <?php } ?>
        </div>
   </nav>
    </header>
        
    <?php if (isset($_SESSION['user'])) { ?> 

    <!-- no sense dropdown 💀-->
   <div id="dropdownAvatar" class="z-10 absolute right-1 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div> <?= $_SESSION['user']['user']['name'] ?> </div>
                <div class="font-medium truncate"><?= $_SESSION ['user']['user']['email'] ?></div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                
                <li>
                    <a href="settings.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                
                </ul>
                <div class="py-2">
                <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </div>
            </div>

            <?php } ?>

    
    <?php if (!isset($_SESSION['user'])) {?>
    <div class="py-6">
        <h1 class="text-white text-center text-4xl font-semibold">Bienvenido a HuTaoMains!</h1>
    </div>
        
    
    <!-- CAROUSEL -->
    <div class="w-full flex justify-center items-center">
        <section id="carousel-container" aria-label="Carousel" class="flex relative rounded-md w-[600px] h-[400px] overflow-hidden shadow-[rgba(0,0,0,0.4)] shadow-md">
            <div id="carousel-images" class="flex flex-row transform ease-out">
                <img class="imgdata w-[600px] h-[400px] object-cover" data-desc="" src="assets/img/Stars-Shining-Depths-official-wallpaper-genshin.jpg" alt="">
                <img class="imgdata w-[600px] h-[400px] object-cover" data-desc="" src="assets/img/wallpaper_for_wanderer_.jpeg" alt="">
                <img class="imgdata w-[600px] h-[400px] object-cover" data-desc="" src="assets/img/i-love-that-liyue-looks-so-beautiful-and-scenic-during-this-v0-w9ywf9by2qe81.png" alt="">
            </div>
            
            <div class="user-controls flex justify-between text-white font-extrabold ">
                <button class="user-controls z-10 absolute left-0 m-0 w-[3rem] h-full bg-gradient-to-r from-black to-transparent opacity-75" id="previous"><svg class="flex justify-center w-full"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg></button>
                <button class="user-controls z-10 absolute right-0  m-0 w-[3rem] h-full bg-gradient-to-l from-black to-transparent opacity-75" id="next"><svg class="rotate-180 flex justify-center w-full"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg></button>
            </div>
        </section>
    </div>
    
    <?php } ?>

    <?php if (isset ($_SESSION['user'])) {?>
    
        <div class="py-6">
            <h2 class="text-white text-center h-1/2 font-semibold">Aca iran noticias de genshin impact y una pequeña guia de uso de HuTaoMains </h2>
        </div>
    
    <?php } ?>
     
    <video id="ee" class="hidden right-2 bottom-2 sticky rounded-full h-[15rem] w-[15rem] object-center object-cover" loop autoplay muted>
        <source src="assets/video/videoplayback.mp4" type="video/mp4">
    </video>
    <audio id="audioee" loop>     
        <source src="assets/video/814e8eba-a927-495f-a38e-8131d67a2b3f.ogg" type="video/ogg">
    </audio>
 
    <script>
        
        const ee = document.getElementById('ee')  
        const audi = document.getElementById('audioee')

        document.addEventListener('keydown', function(event) {
            if (event.ctrlKey && event.key === 'ñ') {
                ee.classList.remove('hidden')
                audi.play()
            }
        });

        function dropdown() {
            const dropdownAvatar = document.getElementById("dropdownAvatar")

            dropdownAvatar.classList.toggle("hidden")
        }
        
        // For carousel porpuses 
        const imageContainer = document.getElementById('carousel-images');
        const images = document.querySelectorAll('.imgdata');
        const buttons = document.querySelectorAll('.user-controls button');

        let interval = setInterval(runCarousel, 5000);
        let index = 0;

        function runCarousel() {
            index++;
            checkOutBoundConditions();
            changeImage(); 
        }

        function checkOutBoundConditions() {
            if(index === images.length) {
                index = 0;
            }

            if (index < 0) {
                index = images.length - 1;
            }
            
        }

        function changeImage() {
            imageContainer.style.transform = `translateX(${-index * 600}px)`
        }

        buttons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                if(btn.id === 'previous') {
                    index--;
                } else if (btn.id === 'next') {
                    index++;
                }
                checkOutBoundConditions();
                changeImage();
            })
        });
    
    </script> 
 </body>

 </html>