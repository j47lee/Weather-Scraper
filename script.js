$( document ).ready(function() {

    $('#findMyWeather').click(function(event){

      event.preventDefault(); //stops form from being submitted
      $('.alert').hide(); //hides previous all alerts on click
      if ($('#city').val()!='') {
        $.get('scraper.php?city='+$('#city').val(), function(data){
          if (data=='') {
            $('#fail').fadeIn();
          } else {
            $('#success').html(data).fadeIn();
          }
        })
      } else {
        $('#noCity').fadeIn();
      }

    }) //end findMyWeather

});
