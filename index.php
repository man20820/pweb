<?php
include 'dblocalhost.php';
?>
<html class="scroll-smooth">

<head>
  <title>Fatkhurrahman | Network Engineer</title>
  <script src="assets/css/tailwind"></script>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
</head>

<body>
  <!--navbar-->
  <div class="text-2xl flex flex-1 p-4 bg-white justify-between fixed left-0 right-0 lg:left-20 lg:right-20 items-center cursor-default">
    <div class="flex px-2 pl-6 hover:font-bold">
      <a href="#about">Fatkhurrahman</a>
    </div>
    <div class="flex flex-1 justify-end">
      <div class="flex px-2 hover:font-bold">
        <a href="#works">Pekerjaan</a>
      </div>
      <div class="flex px-2 hover:font-bold">
        <a href="#skills">Keahlian</a>
      </div>
      <div class="flex px-2 pr-6 hover:font-bold">
        <a href="#resume">Resume</a>
      </div>
    </div>
  </div>
  <!--about-->
  <div id="about" class="p-4 pb-12 pt-24">
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
        <img src="assets/img/profil.png" class="w-72 mt-10 mb-10" style="margin-top: 10%; border-bottom-left-radius: 50%;border-top-left-radius: 50%; border-bottom-right-radius: 50%;" />
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
  <!-- separator -->
  <div class="px-20 py-5">
    <div style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1); height: 6px; width: 40%; border-radius: 3px; margin: 16px 0px;">
    </div>
  </div>
  <!--pekerjaan-->
  <div id="works" class="p-4 pb-12">
    <div class="flex items-center flex-col justify-center md:flex-row md:justify-between container mx-auto px-4">
      <div class="">
        <div class="text-3xl">
          Pekerjaan
        </div>
        <div class="text-base flex flex-wrap justify-between items-center ml-8 mr-0">
          <div class="flex flex-col lg:flex-col justify-between mt-3 w-full p-4">
            <?php
            $sql = "SELECT * FROM `works`;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<div class='text-xl'>" . $row["position"] . "</div>" . "<br>";
                echo "<div class='text-2xl'>" . $row["company"] . "</div>" . "<br>";
                echo "<div class='text-xl'>" . $row["year"]  . "</div>" . "<br>";
                echo "<div class='text-xl'>" . $row["description"] . "</div>" . "<br>";
                // echo $row["company"] . "</br>";
                // echo $row["year"] . "</br>";
                // echo $row["description"] . "</br>";
                echo "<br>";
              }
            }

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- separator -->
  <div class="px-20 py-5">
    <div style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1); height: 6px; width: 40%; border-radius: 3px; margin: 16px 0px;">
    </div>
  </div>
  <!-- skill -->
  <div id="skills" class="p-4 pb-12">
    <div class="flex items-center flex-col justify-center md:flex-row md:justify-between container mx-auto px-4">
      <div class="">
        <div class="text-3xl">
          Keahlian
        </div>
        <div class="text-base flex flex-wrap justify-between items-center ml-8 mr-0">
          <div class="flex flex-col lg:flex-col justify-between mt-3 w-full p-4">
            <?php
            $sql = "SELECT * FROM `skills`;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<div class='text-xl'>" . $row["skill"] . "</div>" . "</br>";
                // echo $row["company"] . "</br>";
                // echo $row["year"] . "</br>";
                // echo $row["description"] . "</br>";
              }
            }

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- separator -->
  <div class="px-20 py-5">
    <div style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1); height: 6px; width: 40%; border-radius: 3px; margin: 16px 0px;">
    </div>
  </div>
  <!-- resume -->
  <div id="resume" class="p-4 pb-12">
    <div class="flex items-center flex-col justify-center md:flex-row md:justify-between container mx-auto px-4">
      <div class="">
        <div class="text-3xl">
          Resume
        </div>
        <div class="text-base flex flex-wrap justify-between items-center ml-8 mr-0">
          <div class="flex flex-col lg:flex-row-reverse justify-between items-center mt-3 w-full p-4">
            <div class="bg-green-500 p-4 text-xl flex justify-center items-center rounded-lg">
              <a href="assets/document/fatkhurrahman.pdf">Unduh Resume</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>