$("#campo1").change(function() {
      if($("#campo1").val() !== "0"){
        $('#peliculas').prop('disabled', false);
      }else{
        $('#peliculas').prop('disabled', 'disabled');
        $('#formato').prop('disabled', 'disabled');
        $('#hora').prop('disabled', 'disabled');
        $('#btncomprar').prop('disabled', 'disabled');
      }
    });
    
    $("#peliculas").change(function() {
      if($("#peliculas").val() !== "0"){
        $('#formato').prop('disabled', false);
      }else{
        $('#formato').prop('disabled', 'disabled');
        $('#hora').prop('disabled', 'disabled');
      }
    });
    $("#formato").change(function() {
      if($("#formato").val() !== "0"){
        $('#hora').prop('disabled', false);
      }else{
        $('#hora').prop('disabled', 'disabled');
        
      }
    });

    $("#hora").change(function() {
      if($("#hora").val() !== "0"){
        $('#btncomprar').prop('disabled', false);
      }else{
        $('#btncomprar').prop('disabled', 'disabled');
        
      }
    });