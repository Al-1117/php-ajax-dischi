//
// var $ = require( "jquery" );
// var Handlebars = require("handlebars");

$(document).ready(function(){

  // Faccio la chiamata AJAX al server per ottenere gli album
  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',

      // SE LA CHIAMATA HA SUCCESSO:
      success: function(serverResponse){

        // Stampo gli elementi con l'apposita funzione
        printAlbumsInTemplate(serverResponse);

        // Con la ricerca, tramite select, mostra l'artista selezionato
        $(document).on('change', '.artist_selection select',
          function(){
            
            getArtist(serverResponse);


          }
        );
      },
      // SE LA CHIAMATA FALLISCE
      // visualizzo un errore
      error: function(request, status, error){
        alert('Si è verificato il seguente errore: ' + error);

      }
    }
  );


  // FUNZIONE PER STAMPARE GLI ALBUM
  // <!-- richiede un array contenente i dati da stampare -->
  //ritorna gli album stampati nel template

  function printAlbumsInTemplate(array){

    // Inserisco le variabili di Handlebars
    var source = $("#albums-template").html();
    var template = Handlebars.compile(source);

    // Inizializzo un ciclo for per scorrere gli elementi dell'array
    for (var i = 0; i < array.length; i++) {
      var singleAlbum = array[i];

      var context = {
        path: singleAlbum.poster,
        title: singleAlbum.title,
        author: singleAlbum.author,
        year: singleAlbum.year,
      };

      var html = template(context);

      $('.album_container').append(html)
    }

  }

  // <!-- Funzione per trovare gli artisti -->
  // <!-- richiede un array contente il nome da cercare -->
  // <!-- ritorna solo gli album dell'artista cercato -->
  function getArtist(array){

    $('.album_container').html("");

    var inputValue = $('select').val();


    var source = $("#albums-template").html();

    var template = Handlebars.compile(source);

    for (var i = 0; i < array.length; i++) {

      var thisArtist = array[i];

      var artistName = thisArtist.author;

      var context = {
        path: thisArtist.poster,
        title: thisArtist.title,
        author: thisArtist.author,
        year: thisArtist.year,
      };

      var html = template(context);

      if (inputValue.includes(artistName)) {

        $('.album_container').append(html);

      }

    }

  }

});
