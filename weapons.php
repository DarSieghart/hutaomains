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
<style>
.glow-button {
    border: none;
    outline: none;
    color: white;
    background-color: #9d174d;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 10px;
    transition: box-shadow 0.3s ease;
}
    
.glow-button:hover {
    box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
}
</style>


<body class="bg-[#393E46]">
   <header> 
   <nav class="py-4 text-white bg-[#393E46] border-b border-red-500">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.php">
                    <img class="w-30 h-12 hover:scale-105 duration-150" src="assets/img/icon.png">
                </a>

                <div class="px-60 flex items-center space-x-20">
                    <a href="wiki.php" class="text-2xl font-bold hover:text-rose-600 duration-100"> WikiBuilds </a>

                    <a href="farming.php" class="text-2xl font-bold hover:text-rose-600 duration-100"> Farming  </a>
                   
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

            <div class="px-60 flex items-center space-x-20 gap-x-1 ">
                
                <div class="contents [&>button]:flex-1 ">
                    <button onclick="Open_Weapons('claymores')" class="glow-button" > Mandoble </button>
                    <button onclick="Open_Weapons('lightswords')" class="glow-button" > Espada Ligera </button>
                    <button onclick="Open_Weapons('bows')" class="glow-button" > Arco </button>
                    <button onclick="Open_Weapons('spears')" class="glow-button" > Lanza </button>
                    <button onclick="Open_Weapons('catalysts')" class="glow-button" > Catalizador </button>
                </div>
            </div>
          
    <!-- Pendiente componetizar -->

    <div class="absolute w-full h-auto">
        <div id="spears" class="bg-gray-800 hidden w-1/2 p-4 rounded-md mx-auto h-1/2 overflow-y-auto pop-up">
           
            <form action="assets/Weapons" method="post" class="grid grid-cols-4 mx-auto gap-8 pt-5">
                
                <img src="assets/img/Weapons/Polearm/Polearm.png" >
            </form>
        </div>
    </div>

    <div class="absolute w-full h-auto">
        <div id="lightswords" class="bg-gray-800 hidden w-1/2 p-4 rounded-md mx-auto h-1/2 overflow-y-auto pop-up">
           
            <form action="assets/Weapons" method="post" class="grid grid-cols-4 mx-auto gap-8 pt-5">
                
                <img src="assets/img/Weapons/Sword/Sword.png" >
            </form>
        </div>
    </div>

            
</body>
<script src="assets/js/weapons.js"></script>
</html>