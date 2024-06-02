<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <script src="assets/js/index.js"></script>
</head>
<body class="bg-[#240f0c] h-[82.5%]">
    <?php
session_start()
?>
<div class="flex justify-center items-center h-full">
    <div  class="bg-[#0c0a09] text-white py-6 px-4 flex flex-col space-y-3 items-center rounded-md w-1/3">

            <a href="index.php">
                <img class="w-20 h-20 hover:scale-110 duration-100" src="assets/img/logo.png">
            </a>

            <form method="post" action="store/store_register.php" class="flex flex-col justify-center space-y-3 items-center w-full">
            <div class="w-1/2">
                    <label for="name"> Nombre de la cuenta </label>
                    <input type="text" class="rounded-md w-full text-black" name="name" autocomplete="off" required>
                </div>    
                <div class="w-1/2">
                    <label for="email"> Email </label>
                    <input type="email" class="rounded-md w-full text-black" name="email" autocomplete="off" required>
                </div>
                <div class="w-1/2">
                    <label for="password"> Contraseña </label>
                    <input type="password" class="rounded-md w-full text-black" name="password" autocomplete="off" required> 
                </div>  

                <button type="submit" class="rounded-md py-2.5 px-9 bg-rose-600 hover:bg-rose-700 font-semibold"> Crear cuenta </button>
                <?php
                if (isset($_SESSION['error'])){
                    $msg = $_SESSION['error'];
                    unset($_SESSION['error']);
                    echo "<h1> $msg </h1>";
                }
                ?>

    </div>

</div>







</body>
</html>