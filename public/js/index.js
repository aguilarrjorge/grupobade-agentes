$(document).ready(function()
{

  $(document).on('click','#recuperaContrasenia',function(){
    $("#olvidoContrasenia").show();
    $("#autentificarse").hide();
  }) 
  
  $(document).on('click','#regresarLogin',function(){
    $("#olvidoContrasenia").hide();
    $('#autentificarse').show();
  })

});