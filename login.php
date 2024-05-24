<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<style>
.glow-button {
border: none;
outline: none;
color: white;
background-color: #7f1d1d;
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
    <title>Iniciar Sesion</title>
    <script src="assets/js/index.js"></script>

</head>
<?php

session_start();
?>
<body class= "bg-[#393E46] ">
    

<div class="h-[100%]">  
    
<img class="z-10 fixed saturate-100" src="assets/img/i-love-that-liyue-looks-so-beautiful-and-scenic-during-this-v0-w9ywf9by2qe81.png">
    <div class="z-50 absolute flex justify-center items-center h-full w-full">
        <div class="backdrop-blur-sm shadow-2xl saturate-200 text-white py-6 px-4 flex flex-col space-y-3 items-center rounded-md w-1/3">
            <a href="index.php">
                <img class="w-20 h-20 hover:scale-110 duration-100" src="assets/img/logo.png">
            </a>


            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <h1 class="text-2xl font-bold text-center"> Iniciar Sesion </h1>
            <?php 
            if (isset($_SESSION['error'])) { 
                $msg = $_SESSION['error'];
                unset($_SESSION['error']);
                echo "<h1> $msg </h1>";
            }
            ?>

            <form method="post" action="store/store_login.php" class="flex flex-col justify-center space-y-3 items-center w-full">    
                <div class="w-1/2">
                    <label for="email"> Email </label>
                    <input type="text" class="rounded-md w-full text-black" name="email" autocomplete="off">
                </div>
                <div class="w-1/2">
                    <label for="password"> Contraseña </label>
                    <input type="password" class="rounded-md w-full text-black" name="password" autocomplete="off"> 
                </div>

                <button  class="glow-button" > Iniciar Sesion </button>

                <button href="http://localhost/HuTaoMains/singup.php" class="glow-button">Crea tu cuenta aqui!</button>
            </form>
        </div>
    </div>
    
</div>

</body>  


</html>