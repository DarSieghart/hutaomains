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
<body class="bg-[#240f0c]">
   <header> 
   <nav class="py-4 text-white bg-[#3c070f] border-b border-gray-500">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.php">
                    <img class="w-20 h-20 hover:scale-110 duration-100" src="assets/img/logo.png">
                </a>

                <div class="px-10 flex items-center space-x-5">
                    <a href="wiki.php" class="text-2xl font-bold hover:text-[#aa674a] duration-100"> WikiBuilds </a>

                    <a href="farming.php" class="text-2xl font-bold hover:text-[#aa674a] duration-100"> Farming Guide </a>
                </div>  
            </div>

            <?php if (isset($_SESSION['user'])) { ?> 
            <button onclick="dropdown()" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-12 h-12 rounded-full" src="assets/img/Character/Inazuma/Kirara.png" alt="user photo">
            </button>
            <?php } ?>



             <?php if (!isset($_SESSION['user'])) { ?>
            <a href="login.php" class="py-2.5 px-9 rounded-md bg-rose-600 hover:bg-rose-700 font-semibold"> Iniciar Sesion </a>
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