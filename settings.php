<?php
session_start();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="assets/css/index.css"> 
    <script src="assets/js/index.js"></script>
</head>
<body class="overflow-x-hidden bg-[#18181b]">
    <nav class="py-4 text-white border-b border-gray-500 w-full">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.php">
                    <img class="animate-spin w-20 h-20 hover:scale-110 duration-100" src="assets/img/logo.png">
                </a>
                <div class="px-10 flex items-center space-x-5">
                    <a href="Wiki.php" class="text-2xl font-bold hover:text-[#aa674a] duration-100"> WikiBuilds </a>
                    
                    <a href="farming.php" class="text-2xl font-bold hover:text-[#aa674a] duration-100"> Farming Guide </a>
                </div>  
            </div>

    

    </nav>

</script>
    
<button onclick="dropdown()" class="flex mx-10 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-40 h-50 rounded-full" src="assets/img/Character/Inazuma/Kirara.png" alt="user photo">
            </button>


            <?php if (isset($_SESSION['user'])) { ?> 
       
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div> <?= $_SESSION['user']['user']['name'] ?> </div>
                <div class="font-medium truncate"><?= $_SESSION ['user']['user']['email'] ?></div>

            <?php } ?>

         
        
</body>

</html>