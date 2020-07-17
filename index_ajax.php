
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Handlebars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <title>Dischi musicali AJAX PHP</title>
    <!-- My style -->
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <div class="container">
        <!-- Spotify-Logo -->
        <div class="logo">
          <img src="img/logo.png" alt="Spotify-Logo">
        </div>
        <!-- Artist selection -->
        <div class="artist_selection">
          <select class="artist" name="">
            <option value="Bon Jovi">Bon Jovi</option>
            <option value="Queen">Queen</option>
            <option value="Sting">Sting</option>
            <option value="Steve Gadd Band">Steve Gadd Band</option>
            <option value="Iron Maiden">Iron Maiden</option>
            <option value="Eric Clapton">Eric Clapton</option>
          </select>
        </div>
      </div>
    </header>


    <main>
      <div class="container">
        <ul class="album_container">


        </ul>
      </div>
    </main>

    <!-- TEMPLATE HANDLEBARS -->
    <script id="albums-template" type="text/x-handlebars-template">

      <li class="single_album">

        <img src="{{path}}" alt="">
        <h2>{{title}}</h2>
        <span>{{author}}</span>
        <span>{{year}}</span>

      </li>

    </script>

    <script type="text/javascript" src="src/app.js"></script>



  </body>
</html>
