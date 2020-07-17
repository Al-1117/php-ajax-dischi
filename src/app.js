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






      },
      // SE LA CHIAMATA FALLISCE
      // visualizzo un errore
      error: function(request, status, error){
        alert('Si è verificato il seguente errore: ' + error);

      }
    }
  );







  // FUNZIONE PER STAMPARE GLI ALBUM

  function printAlbumsInTemplate(array){

    var source = $("#albums-template").html();
    var template = Handlebars.compile(source);

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



});
