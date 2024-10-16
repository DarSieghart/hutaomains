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
<body class="bg-[#393E46]">
    <nav class="py-4 text-white border-b border-gray-500 w-full">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.php">
                    <img class="animate-spin w-20 h-20 hover:scale-110 duration-100" src="assets/img/logo.png">
                </a>
                <div class="px-10 flex items-center space-x-5">
                    <a href="Wiki.php" class="text-2xl font-bold hover:text-rose-600 duration-100"> WikiBuilds </a>
                    
                    <a href="farming.php" class="text-2xl font-bold hover:text-rose-600 duration-100"> Farming Guide </a>
                </div>
            </div>  
        </div>
    </nav>
    
    <button onclick="popup()" class="flex mx-10 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
        <span class="sr-only">Open user menu</span>
        <img class="w-40 h-50 rounded-full" src="assets/img/Character/Inazuma/Kirara.png" alt="user photo">
    </button>

    <div class="absolute w-full h-full">
        <div id="showable" class="bg-gray-800 hidden w-1/2 p-4 rounded-md mx-auto h-1/2 overflow-y-auto">

            <span class="text-2xl font-semibold text-gray-300"> <?= $_SESSION['user']['user']['name'] ?> </span>

            <form action="store/store_profile.php" method="post" class="grid grid-cols-4 mx-auto gap-8 pt-5">
                <img src="assets\img\Character\Fontaine\Charlotte.png">
                <img src="assets\img\Character\Fontaine\Freminet.png">
                <img src="assets\img\Character\Fontaine\Lynette.png">
                <img src="assets\img\Character\Fontaine\Lyney.png">
                <img src="assets/img/Character/Snezhnaya/Arlecchino.png">
                <img src="assets\img\Character\Fontaine\Neuvillette.png">
                <img src="assets\img\Character\Fontaine\Wriothesley.png">
                <img src="assets\img\Character\Inazuma/Arataki itto.png">
                <img src="assets\img\Character\Inazuma/Gorou.png">
                <img src="assets\img\Character\Inazuma/Kaedehara Kazuha.png">
                <img src="assets\img\Character\Inazuma/Kamisato Ayaka.png">
                <img src="assets\img\Character\Inazuma/Kamisato Ayato.png">
                <img src="assets\img\Character\Inazuma/Kirara.png">
                <img src="assets\img\Character\Inazuma/Kujou Sara.png">
                <img src="assets\img\Character\Inazuma/Kuki Shinobu.png">
                <img src="assets\img\Character\Inazuma/Raiden Shogun.png">
                <img src="assets\img\Character\Inazuma/Sangonomiya Kokomi.png">
                <img src="assets\img\Character\Inazuma/Sayu.png">
                <img src="assets\img\Character\Inazuma/Shikanoin Heizou.png">
                <img src="assets\img\Character\Inazuma/Thoma.png">
                <img src="assets\img\Character\Inazuma/Yae Miko.png">
                <img src="assets\img\Character\Inazuma/Yoimiya.png">
                <img src="assets\img\Character\Liyue/Baizhu.png">
                <img src="assets\img\Character\Liyue/Beidou.png">
                <img src="assets\img\Character\Liyue/Chongyun.png">
                <img src="assets\img\Character\Liyue/Ganyu.png">
                <img src="assets\img\Character\Liyue/Hu Tao.png">
                <img src="assets\img\Character\Liyue/Keqing.png">
                <img src="assets/img/Character/Liyue/Ningguang.png">
                <img src="assets/img/Character/Liyue/Qiqi.png">
                <img src="assets/img/Character/Liyue/Shenhe.png">
                <img src="assets/img/Character/Liyue/Tartaglia.png">
                <img src="assets/img/Character/Liyue/Xiangling.png">
                <img src="assets/img/Character/Liyue/Xiao.png">
                <img src="assets/img/Character/Liyue/Xingqiu.png">
                <img src="assets/img/Character/Liyue/Xinyan.png">
                <img src="assets/img/Character/Liyue/Yanfei.png">
                <img src="assets/img/Character/Liyue/Yaoyao.png">
                <img src="assets/img/Character/Liyue/Yelan.png">
                <img src="assets/img/Character/Liyue/Yun Jin.png">
                <img src="assets/img/Character/Liyue/Zhongli.png">
                <img src="assets/img/Character/Mondstadt/Albedo.png">
                <img src="assets/img/Character/Mondstadt/Aloy.png">
                <img src="assets/img/Character/Mondstadt/Amber.png">
                <img src="assets/img/Character/Mondstadt/Barbara.png">
                <img src="assets/img/Character/Mondstadt/Bennett.png">
                <img src="assets/img/Character/Mondstadt/Diluc.png">
                <img src="assets/img/Character/Mondstadt/Diona.png">
                <img src="assets/img/Character/Mondstadt/Eula.png">
                <img src="assets/img/Character/Mondstadt/Fischl.png">
                <img src="assets/img/Character/Mondstadt/Jean.png">
                <img src="assets/img/Character/Mondstadt/Kaeya.png">
                <img src="assets/img/Character/Mondstadt/Lisa.png">
                <img src="assets/img/Character/Mondstadt/Klee.png">
                <img src="assets/img/Character/Mondstadt/Lisa.png">
                <img src="assets/img/Character/Mondstadt/Mika.png">
                <img src="assets/img/Character/Mondstadt/Mona.png">
                <img src="assets/img/Character/Mondstadt/Noelle.png">
                <img src="assets/img/Character/Mondstadt/Razor.png">
                <img src="assets/img/Character/Mondstadt/Rosaria.png">
                <img src="assets/img/Character/Mondstadt/Sucrose.png">
                <img src="assets/img/Character/Mondstadt/Venti.png">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">
                <img src="">


            </form>
        </div>
    </div>

<?php if (isset($_SESSION['user'])) { ?> 
    
    <a href="" class="py-2.5 px-9 rounded-md bg-rose-600 hover:bg-rose-700 font-semibold"> Edit </a>

    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
    <div> <?= $_SESSION['user']['user']['name'] ?> </div>
    <div class="font-medium truncate"><?= $_SESSION ['user']['user']['email'] ?></div>

<?php } ?>
         
    
<script src="assets/js/popup.js"></script>
</body>
</html>