<?php
    $name = "Hanan Abdul Ghani";
    $skill = "Fullstack Website Development";
    $univ = "Universitas Amikom Purwoketo";
    $sosmed ="@habdulghani_";
    $no = "085320313071";
    $email = "ha149366@gmail.com";
?>
<div class="jumbotron text-center">
      <img
        class="rounded-circle shadow"
        src="https://media.hitekno.com/thumbs/2022/07/11/10980-one-punch-man-saitama/730x480-img-10980-one-punch-man-saitama.jpg"
        alt=""
        width="200px"
      />
      <h1 class="display-4"><?=substr($name,0,-12)?></h1>
      <p class="lead"><?=$skill?></p>
    </div>

<section id="tentang">
      <div class="container text-center mt-5" >
        <div class="row">
          <div class="col mb-4">
            <h2>About me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-4">
            saya <?=$name?> Asal Purwoketo, saat ini sedang menempuh
            pendidikan di <?=$univ?>.
          </div>
          <div class="col-4">
            Skill yang saya miliki <?=$skill?>. bukan haya
            pada Website Development saya juga mampu dalam pembuatan aplikasi
            Mobile menggunakan Flutter dan juga aplikasi Desktop menggunkan Java
          </div>
        </div>
      </div>
      
    </section>