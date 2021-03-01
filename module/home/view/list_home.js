$(document).ready(function () {
    console.log("h");
 
 function carousel(){
 
   $.ajax({
     url: "module/home/controller/controller_home.php?op=dades",
     type: "GET",
     dataType: "json",
 })
 .done(function(data) {
     console.log(data);
     
     var img = "";
     for (var i=0; i<data.length; i++ ){
         img += '<div id="dades2"><img class="dades2" id="'+data[i].tipo+'" src="'+data[i].img+'"></div>'
         // console.log(data[i]);
     }
 
     $('.slider').empty();
     $(".slider").html(
         img
     );
 
 
     $('.slider').bxSlider({
         mode: 'fade',
         captions: true,
         adaptiveHeight: true,
         speed: 400,
         auto: true,
         infiniteLoop: true
         // slideWidth: 600
     });
  })
  .fail(function( jqXHR, textStatus, errorThrown ) {
      if ( console && console.log ) {
          console.log( "La solicitud ha fallado: " +  textStatus);
      }
 });
 
 }
 

function scroll() {
    $.ajax({
      type: 'GET',
      dataType: "json",
      url: "module/home/controller/controller_home.php?op=countp",
    })
      .done(function (data) {
        console.log("pagination");
        var numprods = data[0].allpages;
        page = numprods / 1;
  
        $('#pagination').bootpag({
          total: page,
          page: 1,
          maxVisible: 4
        }).on("page", function (event, num) {
          console.log("pagin");
          limit= 1 *(num);
          $.ajax({
            type: 'GET',
            dataType: "json",
            url: "module/home/controller/controller_home.php?op=productos&limit=" + limit,
          })
          .done(function (data) {
            $("#list_products").empty();
          console.log(num);
          console.log(data);
          console.log(limit + "limit");
          //           $("#list_products").empty();
  
          //   var json = JSON.parse(data);
          //un atra opcio es comentar el datatype i comentar la linea de baix i descomentar la de dalt
          var img2 = "";
          for (var i=0; i<data.length; i++ ){
              img2 += '<div class="gallery"><img class="dades2" id="'+data[i].tipo+'" src="'+data[i].img+'"/></div>'
              console.log(data[i].id);
          
         
               $('.cata').empty();
               $(".cata").html(
                  img2
              );
          
          }
          
        });
      });
      })
      .fail(function( data) {
        console.log("F PAG"+data);
    })
  }
  

  
 function categories(){
 $.ajax({
     
     url: "module/home/controller/controller_home.php?op=catalo",
     type: "GET",
     dataType: "json",
 })
 .done(function(data) {
      console.log("heeeeeeeee");
 
     console.log(data);
 
     var img2 = "";
 for (var i=0; i<data.length; i++ ){
     img2 += '<div class="gallery"><img class="dades2" id="'+data[i].tipo+'" src="'+data[i].img+'"/></div>'
     console.log(data[i].id);
 

      $('.cata').empty();
      $(".cata").html(
         img2
     );
 
 }
 
   });
 }
   function select_catycar(){
     $('body').on("click", ".dades2", function(){
     var cat = this.getAttribute('id');
     
     console.log("jeje");
     console.log(cat);
     localStorage.setItem('category', cat);
     
     if(cat=""){
         toastr["info"];
     }else{
         setTimeout('window.location.href = "index.php?page=controller_shop&op=list",1000');
     }
     
 //Amb esto puc fer que funcionen tant el catalog com el carousel 
     
     });
         
     }
 
 carousel();
 categories();
 select_catycar();
 scroll();
 });
 
 
 