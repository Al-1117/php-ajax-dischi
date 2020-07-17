//
// var $ = require( "jquery" );
// var Handlebars = require("handlebars");
//
$(document).ready(function(){

  // Faccio la chiamata AJAX al server per ottenere gli album
  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',

      // SE LA CHIAMATA HA SUCCESSO:
      success: function(serverResponse){
        
        console.log(serverResponse);
      },
      // SE LA CHIAMATA FALLISCE
      // visualizzo un errore
      error: function(request, status, error){
        alert('Si è verificato il seguente errore: ' + error);

      }
    }
  );











});
