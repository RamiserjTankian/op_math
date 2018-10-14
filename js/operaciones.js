$(document).ready(function(){

  $(".tabla-figuras").on("click", ".btncalcular", function(){

    var figura = $(this).attr("figura");
  
    window.location = figura+".php";
          
  })
});

