<!DOCTYPE html>
<html>
<meta charset='UTF-8' />
<meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5'
  name='viewport' />
<meta content='IE=edge' http-equiv='X-UA-Compatible' />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
<link href="https://feeldreams.github.io/inidariku/style.css" rel="stylesheet" type="text/css" />
<script src="https://kit.fontawesome.com/4f3ce16e3e.js" crossorigin="anonymous"></script>

<head>
  <title>Selamat Hari Raya Idul Fitri 1444H</title>
  <meta name="description" content="HTML Feeldream Repl Co">
  <!-- 
  Made with love by Rayys!
  
     Blog: feeldream.id
     Instagram: @rayyarrr
     TikTok: @feelthisray
     Email: rayyar73@gmail.com
     
  Thanks to all <3
-->
</head>

<body>

  <!-- Ganti Audio di sini -->
  <audio src="https://inidariku.feeldream.repl.co/lbrn.mp3" id="linkmp3" class="sembunyi"></audio>

  <div id="bodyblur">
    <!-- Wallpaper / Background --><img src="https://feeldreams.github.io/pics/awan8.jpg" id="wallpaper" />
  </div>

  <div id='Content'>

    <div id="ftAwal">
      <!-- Stiker Pembuka -->
      <img src="https://feeldreams.github.io/pandaputih.gif" id="ftoAwal" />
    </div>

    <div id="loveIn">
      <!-- Tombol LOVE --><label class='lovein'>&#10084;</label>
    </div>
    <p id="ket">Sentuh LOVEnya!</p>

    <div class="kumpulanstiker">
      <!-- Stiker untuk Konten -->
      <img src="https://feeldreams.github.io/pusn.gif" id="fotostiker" />
      <img src="https://feeldreams.github.io/bunga.gif" id="fotostiker1" />
      <img src="https://feeldreams.github.io/ngumpet.gif" id="fotostiker2" />
      <img src="https://feeldreams.github.io/pandaketawa2.gif" id="fotostiker3" />
      <img src="https://feeldreams.github.io/emawh.gif" id="fotostiker4" />
    </div>

    <div>
      <div id='pergeseran'>

        <!-- Pesan -->
        <p><b>
            <span>hii kamuuu 😍<br>ga kerasa ya..<br>udah lebaran aja :(</span>
          </b></p>

        <p><b>
            <span>minal aidzin wal faidzin<br>taqabalallahu minna<br>wa minkum</span>
          </b></p>

        <p><b>
            <span>selamat hari raya idul fitri!<br>mohon maaf lahir dan batin<br><i>dari aku buat kamu</i> ✨</span>
          </b></p>

        <p><b>
            <span>oh iya, jngan lupa juga thr<br>atau traktirannya nyusul yaa,<br><i>aku tunggu mwhehehe</i> 😆</span>
          </b></p>

        <p><b>
            <span><i class="ft">have a happy day! ✨</i><br><br><i>selamat hari raya buat kamu..</i> 🥳</span>
          </b></p>

      </div>
    </div>

    <div id="Tombol">
      <a onClick="multifungsi()">
        <b id="tmbl">Geser &#128073;</b>
      </a>
    </div>

  </div>

  <script>
    const body = document.querySelector("body"); const iniwp = []; iden = 1; const swalst = Swal.mixin({ timer: 2500, allowOutsideClick: false, showConfirmButton: false, timerProgressBar: true, imageHeight: 90, }); audio = new Audio('' + linkmp3.src); ftganti = 0; fungsi = 0; fungsiAwal = 0; deffotostiker = fotostiker.src; function berjatuhan() { const heart = document.createElement("div"); heart.className = "fas fa-heart"; heart.style.left = (Math.random() * 90) + "vw"; heart.style.animationDuration = (Math.random() * 3) + 2 + "s"; body.appendChild(heart); } setInterval(function name(params) { var heartArr = document.querySelectorAll(".fa-heart"); if (heartArr.length > 100) { heartArr[0].remove() } }, 100); Content.style = "opacity:1;margin-top:14vh"; const swals = Swal.mixin({ allowOutsideClick: false, cancelButtonColor: '#FF0040', imageHeight: 80, });   
  </script>
  <script src="https://feeldreams.github.io/inidariku/script.js"></script>
  <!-- Sampai Sini -->
</body>

</html>