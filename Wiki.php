<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WikiBuilds</title>
    <link rel="stylesheet" href="assets/css/index.css"> 
    <script src="assets/js/index.js"></script>
</head>
<body class="bg-[#18181b]">
    <nav class="py-4 text-white border-b border-gray-500 w-full">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.php">
                    <img class="w-20 h-20 hover:scale-110 duration-100" src="assets/img/logo.png">
                </a>
                <div class="px-10 flex items-center space-x-5">
                    

                    <a href="farming.php" class="text-2xl font-bold hover:text-[#aa674a] duration-100"> Farming Guide </a>
                </div>  
            </div>

            <?php if (!isset($_SESSION['user'])) { ?>
            <a href="login.php" class="py-2.5 px-9 rounded-md bg-rose-600 hover:bg-rose-700 font-semibold"> Iniciar Sesion </a>
            <?php } ?>
        </div>

    </nav>

 <div>
    <aside class=" overflow-y-scroll overflow-auto py-4 h-[500px] p-1 m-4 rounded-md bg-rose-600 w-1/6 ">
        <div class="">
            <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Xinxulin</button>
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
    
    <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
        <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">

    
        </div>

    </button>
            
                
        </div>

   

   
        
    </aside>

    

    <div class="flex">

        <div id="div" class="z-10 bg-[#ef4444] h-3/4 w-2/3 rounded-md py-4 h-[500] p-2 m-4">

        </div>
            
        <img class="overflow-hidden absolute ml-[500]  " src="http://localhost/HuTaoMains/assets/img/hu_tao_genshin_impact_portrait_render_by_deg5270_deg0ooa-fullview.png" alt=""> 
   </div>
   

   </div>
    
    
    
    
</body>
</html>