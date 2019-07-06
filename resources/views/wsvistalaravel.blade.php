<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Video JS</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/modal.css">
  <!-- <link rel="stylesheet" href="../resources/css/home.css" />
  <link rel="stylesheet" href="../resources/css/modal.css" /> -->
</head>
<body>
  <section class="home" id="home">
    <div class="home-sidebar">
      <div class="sidebar">
        <div class="logo">
          <figure class="logo-image">
            <img src="images/logoVid.png" alt="Platzi Video - la Plataforma de videos cheveres"/>
          </figure>
        </div>
        <div class="sidebarPlaylist">
          <h2 class="sidebarPlaylist-title">Mis Reproducciones <span class="btn warning"></br> Mirar Playlist</span> </h2>
          <ol class="myPlaylist">
            <li class="myPlaylist-item">
              <a href="#">
                <span>
                  Reasons To Choose A Notebook Over A Computer Desktop
                </span>
              </a>
            </li>
            <li class="myPlaylist-item">
              <a href="#">
                <span>
                  Programming
                </span>
              </a>
            </li>
            <li class="myPlaylist-item">
              <a href="#">
                <span>
                  Programmin POO
                </span>
              </a>
            </li>
            <li class="myPlaylist-item">
              <a href="#">
                <span>
                  El Padrino
                </span>
              </a>
            </li>
            <li class="myPlaylist-item">
              <a href="#">
                <span>
                  Marte
                </span>
              </a>
            </li>
            <li class="myPlaylist-item">
              <a href="#">
                <span>
                 Terra Nova
                </span>
              </a>
            </li>
            <li class="myPlaylist-item">
              <a href="#">
                <span>
                 Odisea
                </span>
              </a>
            </li>
            <li class="myPlaylist-item">
              <a href="#">
                <span>
                  Apolo 13
                </span>
              </a>
            </li>
            <li class="myPlaylist-item">
              <a href="#">
                <span>
                  Predator
                </span>
              </a>
            </li>
          </ol>
        </div>
        <div class="sidebarPlaylist">
          <h2 class="sidebarPlaylist-title">Reproducciones de Amigos</h2>
          <ul class="playlistFriends">
            <li class="playlistFriends-item">
              <a href="#">
                <img src="images/covers/robert.jpg" alt="echame la culpa" />
                <span>
                  Alberto Robles
                </span>
              </a>
            </li>
            <li class="playlistFriends-item">
              <a href="#">
                <img src="images/covers/katerine.jpg" alt="echame la culpa" />
                <span>
                 Marian robles
                </span>
              </a>
            </li>
            <li class="playlistFriends-item">
              <a href="#">
                <img src="images/covers/karen.jpg" alt="echame la culpa" />
                <span>
                  Karen Rodriguez
                </span>
              </a>
            </li>
            <li class="playlistFriends-item">
              <a href="#">
                <img src="images/covers/esmeralda.jpg" alt="echame la culpa" />
                <span>
                  Esmeralda Mitre
                </span>
              </a>
            </li>
            <li class="playlistFriends-item">
              <a href="#">
                <img src="images/covers/jose.jpg" alt="echame la culpa" />
                <span>
                  Javier Perez
                </span>
              </a>
            </li>
            <li class="playlistFriends-item">
              <a href="#">
                <img src="images/covers/betsy.jpg" alt="echame la culpa" />
                <span>
                  Betsy Heredia
                </span>
              </a>
            </li>
            <li class="playlistFriends-item">
              <a href="#">
                <img src="images/covers/charlie.jpg" alt="echame la culpa" />
                <span>
                  Carlos Gonzalez
                </span>
              </a>
            </li>
            <li class="playlistFriends-item">
              <a href="#">
                <img src="images/covers/maquenzie.jpg" alt="echame la culpa" />
                <span>
                  Vanesa Flores
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <div class="home-primary">
      <!-- <section class="primary"> -->
        <div class="primary-search">
          <form action="" class="search" id="form">
            <input type="text" name="name" placeholder="Buscar un artista o tema favorito"/>
          </form>
        </div>
        <div class="primary-user">
          <div class="user">
            <p>
              <img src="images/covers/Abdiel.png" alt=""/>
              <span>Abdiel Carrasco</span>
            </p>
          </div>
        </div>
        <div class="primary-list">
          <div class="primaryPlaylist">
            <h3 class="primaryPlaylist-topic">A los golpes</h3>
            <h2 class="primaryPlaylist-title">Acción</h2>
            <div class="primaryPlaylist-list" id="action">
              <img src="src/images/loader.gif" width="50" height="50" alt="">
            </div>
          </div>
          <div class="primaryPlaylist">
            <h3 class="primaryPlaylist-topic">Para llorar</h3>
            <h2 class="primaryPlaylist-title">Drama</h2>
            <div class="primaryPlaylist-list" id="drama">
              <img src="src/images/loader.gif" width="50" height="50" alt="">
            </div>
          </div>
          <div class="primaryPlaylist">
            <h3 class="primaryPlaylist-topic">Dibujitos animados</h3>
            <h2 class="primaryPlaylist-title">Animación</h2>
            <div class="primaryPlaylist-list" id="animation">
              <img src="src/images/loader.gif" width="50" height="50" alt="">
            </div>
          </div>
        </div>
      <!-- </section> -->
    </div>
    <div class="home-featuring" id="featuring">

    </div>
  </section>
  <div class="overlay" id="overlay">
  </div>
  <div class="modal" id="modal">
    <h1>Título de pelicula</h1>
    <div class="modal-content">
      <img src="" alt="" width="170" height="256">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione impedit maiores enim alias ex accusantium quasi cum autem, nam, voluptas tenetur laudantium quod! Odit voluptate illo, voluptas vel quia, quae.</p>
    </div>
    <div class="modal-buttons">
      <button class="modal-btn primary" id="hide-modal">Cerrar Modal</button>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/home.js"></script>
</body>
</html>
