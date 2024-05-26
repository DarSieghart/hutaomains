<?php
session_start();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WikiBuilds</title>
    <link rel="stylesheet" href="assets/css/index.css"> 
    <script src="assets/js/index.js"></script>
</head>
<body class="overflow-x-hidden bg-[#18181b]">
    <nav class="py-4 text-white border-b border-gray-500 w-full">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.php">
                    <img class="animate-spin w-20 h-20 hover:scale-105 duration-100" src="assets/img/logo.png">
                </a>
                <div class="px-10 flex items-center space-x-5">
                    

                    <a href="farming.php" class="text-2xl font-bold hover:text-rose-600 duration-100"> Farming Guide </a>
                    
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

 <div class="flex">
    <aside class=" overflow-y-scroll overflow-auto py-4 h-[500px] p-1 m-4 rounded-md bg-rose-600 w-1/6 ">
        <div class="">
            <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
                <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">
                    <h1>aaaaa
                
                    </h1>
            
                </div>

            </button>
            
            <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
                <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">
   
            
                </div>

            </button>

            <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
            <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">

        
            </div>

        </button>
        
        <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
            <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">

        
            </div>

        </button>
        <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
        <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">

    
        </div>

    </button>

    </aside>
    <div id="div" class="z-10 bg-[#ef4444] h-3/4 w-2/3 rounded-md py-4 p-2 m-4 flex flex-row text-white space-x-2">
            <div class="justify-center font-bold"> Composiciones
                <div class="h-1/3 w-full bg-rose-600 flex flex-row justify-start rounded-t-md items-center px-2">
                    <div class="w-1/4 flex items-center justify-center">
                        <img src="assets/img/Character/Liyue/Shenhe.png" class="bg-zinc-800 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <img src="assets/img/Character/Liyue/Xingqiu.png" class="bg-zinc-800 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class=" w-1/4 flex justify-center">
                        <img src="assets/img/Character/Liyue/Xiangling.png" class="bg-zinc-800 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <img src="assets/img/Character/Mondstadt/Bennett.png" class="bg-zinc-800 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                </div> 
    
                <div class="h-1/3 w-full bg-rose-600 flex flex-row justify-start rounded-b-md items-center px-2">
                    <div class="w-1/4 flex items-center justify-center">
                        <img src="assets/img/Character/Liyue/Hu Tao.png" class="bg-zinc-800 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <img src="assets/img/Character/Fontaine/Furina.png" class="bg-zinc-800 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class=" w-1/4 flex justify-center">
                        <img src="assets/img/Character/Liyue/Yelan.png" class="bg-zinc-800 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <img src="assets/img/Character/Mondstadt/Bennett.png" class="bg-zinc-800 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                </div> 
            </div>
            
            <div class="flex w-3/5 h-1/10 bg-rose-500">
                <div class="">
                    <div class="flex grow justify-center font-bold rounded-md">
                        <h1>Armas</h1>
                    </div>
                    <div class="flex flex-row">
                        <div class="flex flex-col w-full h-full">
                            <div>
                                <img class="bg-zinc-800 p-2 rounded-tl-md border-gray-700 border-2" src="assets/img/Weapons/Polearm/Staff of homa.png" alt="Staff of homa">
                            </div>
                            <div>
                                <img class="bg-zinc-800 p-2 rounded-bl-md border-gray-700 border-2" src="assets/img/Weapons/Polearm/Primordial Jade Winged-Spear.png" alt="Jade">
                            </div>
                        </div>
                        <div class="flex flex-col w-full h-full">
                            <div>
                                <img class="bg-zinc-800 p-2 rounded-tr-md border-gray-700 border-2" src="assets/img/Weapons/Polearm/Staff of the Scarlet Sands.png" alt="">
                            </div>
                            <div>
                                <img class="bg-zinc-800 p-2 rounded-br-md border-gray-700 border-2" src="assets/img/Weapons/Polearm/Ballad of the Fjords.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <img class="overflow-hidden absolute ml-[500]" src="http://localhost/HuTaoMains/assets/img/hu_tao_genshin_impact_portrait_render_by_deg5270_deg0ooa-fullview.png" alt=""> 

 </div>
    
   <script>

    function dropdown() {
    const dropdownAvatar = document.getElementById("dropdownAvatar")

    dropdownAvatar.classList.toggle("hidden")
    }

</script>
    
    
</body>

</html>