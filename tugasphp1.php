<?php
    $name = "Hanan Abdul Ghani";
    $skill = "Fullstack Website Development";
    $univ = "Universitas Amikom Purwoketo";
    $sosmed ="@habdulghani_";
    $no = "085320313071";
    $email = "ha149366@gmail.com";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylePorto.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
  </head>

  <body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="">Hello</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projek">Projek</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar -->
    <!-- home -->
    <div class="jumbotron text-center">
      <img
        class="rounded-circle shadow"
        src="image/fotoHananCrop.jpg"
        alt=""
        width="200px"
      />
      <h1 class="display-4"><?=substr($name,0,-12)?></h1>
      <p class="lead"><?=$skill?></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,64L26.7,85.3C53.3,107,107,149,160,176C213.3,203,267,213,320,202.7C373.3,192,427,160,480,154.7C533.3,149,587,171,640,149.3C693.3,128,747,64,800,69.3C853.3,75,907,149,960,154.7C1013.3,160,1067,96,1120,106.7C1173.3,117,1227,203,1280,213.3C1333.3,224,1387,160,1413,128L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </div>

    <!-- home -->

    <!-- about -->
    <section id="tentang">
      <div class="container text-center">
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
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#cedebd"
          fill-opacity="1"
          d="M0,128L48,154.7C96,181,192,235,288,240C384,245,480,203,576,160C672,117,768,75,864,80C960,85,1056,139,1152,149.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- about -->
    <!-- projek -->
    <section id="projek">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2>My Project</h2>
          </div>
        </div>
        <div class="row justify-content-md-center text-center">
          <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem">
              <img
                class="card-img-top"
                src="image/projek1.jpeg"
                alt="Card image cap"
              />
              <div class="card-body">
                <p class="card-text fw-bold">
                  Aplikasi Cek Kesehatan "Healtyskuy"
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem">
              <img
                class="card-img-top"
                src="image/projek2.jpeg"
                alt="Card image cap"
              />
              <div class="card-body">
                <p class="card-text fw-bold">
                  Aplikasi Pembayaran lisktrik "Zeus Ngamuk"
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#cedebd"
        fill-opacity="1"
        d="M0,160L48,154.7C96,149,192,139,288,122.7C384,107,480,85,576,90.7C672,96,768,128,864,154.7C960,181,1056,203,1152,192C1248,181,1344,139,1392,117.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg>

    <!-- projek -->

    <!-- kontak -->
    <div class="container" id="kontak">
      <div class="row text-center">
        <div class="col mb-4">
          <h2>Contact saya</h2>
        </div>
      </div>

      <section class="kontak">
        <div class="row text-center">
          <div class="col-3">
            <div class="card border-white">
              <div class="container text-center">
                <svg
                  id="svg1"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="#9EB384"
                  class="bi bi-instagram"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                  />
                </svg>
              </div>
              <div class="card-body">
                <p class="card-text"><?=$sosmed?></p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card border-white">
              <div class="container text-center">
                <svg
                  id="svg2"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="#9EB384"
                  class="bi bi-twitter-x"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"
                  />
                </svg>
              </div>
              <div class="card-body">
                <p class="card-text"><?=$sosmed?></p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card border-white">
              <div class="container text-center">
                <svg
                  id="svg2"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="#9EB384"
                  class="bi bi-whatsapp"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
                  />
                </svg>
              </div>
              <div class="card-body">
                <p class="card-text"><?=$no?></p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card border-white">
              <div class="container text-center">
                <svg
                  id="svg4"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="#9EB384"
                  class="bi bi-envelope"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"
                  />
                </svg>
              </div>
              <div class="card-body">
                <p class="card-text"><?=$email?></p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#435334"
        fill-opacity="1"
        d="M0,160L48,160C96,160,192,160,288,181.3C384,203,480,245,576,234.7C672,224,768,160,864,138.7C960,117,1056,139,1152,138.7C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
    <!-- kontak -->
    <!-- fotter -->
    <footer id="fotter" class="text-light text-center p-1">
      Crate with
      <i class="bi bi-heart-fill"
        ><a
          href="https://www.instagram.com/habdulghani_/?hl=id"
          target="_blank"
          class="fw-bold text-light"
        >
          <?=$sosmed?></a
        ></i
      >
    </footer>
    <!-- fottoer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>