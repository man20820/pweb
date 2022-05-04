<?php
include 'dblocalhost.php';
?>
<html>

<head>
  <title>PHP Test</title>
  <script src="assets/css/tailwind"></script>
</head>

<body>
  <!--navbar-->
  <div class="flex bg-red-900 py-2 px-20 text-2xl">
    <div class="flex px-2 pl-6 hover:font-bold">
      <a href="#">Fatkhurrahman</a>
    </div>
    <div class="flex flex-1 justify-end">
      <div class="flex px-2 hover:font-bold">
        <a href="#">Satu</a>
      </div>
      <div class="flex px-2 hover:font-bold">
        <a href="#">Dua</a>
      </div>
      <div class="flex px-2 pr-6 hover:font-bold">
        <a href="#">Tiga</a>
      </div>
    </div>
  </div>
  <!--about-->
  <div class="p-4 pb-12">
    <div class="flex items-center flex-col justify-center md:flex-row md:justify-between container mx-auto px-4">
      <div>
        <div class="text-3xl">
          Halo, saya
          </br>
          <span class="text-pink-500 text-4xl">Fatkhurrahman.</span>
          </br>
          Saya sangat menyukai tentang jaringan, iot, virtualisasi, dan pemrograman. Saya senang mempelajari teknologi baru, penyelesaian masalah, dan selalu belajar untuk mengasah kemampuan.
        </div>

      </div>
      <div>
        <img src="assets/img/profil.png" class="w-72 mt-10 mb-10" style="margin-top: 10%;
    border-bottom-left-radius: 50%;
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;" />
      </div>
    </div>
    <div class="flex justify-center items-center"><a href="https://www.linkedin.com/in/man20820/">
        <div class="cursor-pointer"><img src="assets/img/linkedin.64b8a789.png" class="h-14 m-4"></div>
      </a><a href="https://www.facebook.com/man20820/">
        <div class="cursor-pointer"><img src="assets/img/facebook.8ecf54a6.png" class="h-14 m-4"></div>
      </a><a href="https://www.instagram.com/man20820/">
        <div class="cursor-pointer"><img src="assets/img/instagram.abaad536.png" class="h-14 m-4"></div>
      </a></div>
  </div>
  <div class="px-20 py-5">
    <div style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
height: 6px;
width: 40%;
border-radius: 3px;
margin: 16px 0px;">
    </div>
  </div>
  <!--pekerjaan-->
  <div class="p-4 pb-12">
    <div class="flex items-center flex-col justify-center md:flex-row md:justify-between container mx-auto px-4">
      <div class="text-3xl">
        Pekerjaan
      </div>
    </div>
  </div>
</body>

</html>