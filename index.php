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
                    <a class="text-2xl font-bold hover:text-[#aa674a] duration-100" href="Wiki.php" > WikiBuilds </a>

                    <a href="farming.php" class="text-2xl font-bold hover:text-[#aa674a] duration-100"> Farming Guide </a>
                </div>  
            </div>

            <form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Buscar</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
    </div>
</form>
             <?php if (!isset($_SESSION['user'])) { ?>
            <a href="login.php" class="py-2.5 px-9 rounded-md bg-rose-600 hover:bg-rose-700 font-semibold"> Iniciar Sesion </a>
            <?php } ?>
        </div>
   </nav>

    <div class="py-6">
        <h1 class="text-white text-center text-4xl font-semibold">Bienvenido a HuTaoMains!</h1>
    </div>

    <div class="text-white grid place-content-center h-1/2 ">
        <h2>Aquí podria tener un muro el cual publica versiones y eventos nuevos</h2>
    </div>
    

 
    
 </body>

 </html>