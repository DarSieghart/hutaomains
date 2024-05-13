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
</head>
<body class="bg-[#393E46]">
   <header> 
   <nav class="py-4 text-white bg-[#393E46] border-b border-red-500">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.php">
                    <img class="w-30 h-12 hover:scale-150 duration-100" src="assets/img/ñam.png">
                </a>

                <div class="px-60 flex items-center space-x-20">
                    <a href="wiki.php" class="text-2xl font-bold hover:text-[#aa674a] duration-10"> WikiBuilds </a>

                    <a href="farming.php" class="text-2xl font-bold hover:text-[#aa674a] duration-100"> Farming  </a>
                   
                    <a href="weapons.php" class="text-2xl font-bold hover:text-[#aa674a] duration-100">Weapons</a> 

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
        
    <?php if (isset($_SESSION['user'])) { ?> 
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
        
    

<div id="default-carousel" class="relative w-full" data-carousel="slide">
   
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
      
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <img src="assets/img/Stars-Shining-Depths-official-wallpaper-genshin.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="assets/img/wallpaper_for_wanderer_.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>    
                 
       
    </div>
    
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
   
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Nuevo</span>
        </span>
    </button>
</div>


    <div class="text-white grid place-content-center h-1/2 ">
        <h2>Inicia Sesión o Crea tu cuenta para poder acceder a la personalizacion de builds de WikiBuilds!</h2>
    </div>
    <?php } ?>

    <?php if (isset ($_SESSION['user'])) {?>
    
        <div class="py-6">
            <h2 class="text-white text-center h-1/2 font-semibold">Aca iran noticias de genshin impact y una pequeña guia de uso de HuTaoMains </h2>
        </div>
    
    <?php } ?>
     

 
    <script>

        function dropdown() {
            const dropdownAvatar = document.getElementById("dropdownAvatar")

            dropdownAvatar.classList.toggle("hidden")
        }

    </script>
 </body>

 </html>