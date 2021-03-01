$(document).ready(function () {
shop();
categycarou();
filtro();
mapa();
search();
pagination();
getSuggestions();

});

    console.log("shop");
    function shop () {
    if (document.getElementById('container_shop')) {

      
    $.ajax({ 
        type: "GET",
        dataType: "json",
        url: "module/shop/controller/controller_shop.php?&op=pageone"
    })
       .done(function(data,status) {
        
          $("#list_products").empty();


        json = data;
               $.each(json, function(index, list) {
                var ElementDiv = document.createElement('div');
                ElementDiv.id = "list_shop";
                ElementDiv.innerHTML = 	"<div id='cont_img'><img src='" + list.img + "' class='modaldet' id='" + list.id + "' data-toggle='modal' data-target='#exampleModal'></div><div id='list_header'><span id='li_brand'>  " + list.name + " " + list.codprod + "</span></div>" +
                                           "<div id='list_footer'><span id='" + list.id + "pr'>" + list.name+ "</span><div id='cont_comprar'><select class='qtyprod' id='" + list.id + "qty'></select><button class='baddcart' id='" + list.id + "'>Add to cart</button></div></div>";
                document.getElementById("list_products").appendChild(ElementDiv);
          });

        });
    }
  }
  function ajaxForSearch(durl) {
    var url=durl;
    //console.log(url)
    $.ajax({
       type: "GET",
       dataType: "json",
       url:url,
   })

   .done(function( data ) {
     if (data.length==0){
       //console.log(data);  
         $("#list_products").empty();
         $('<div><h3>No resultados</h3></div>').attr('id', 'list').appendTo('#list_products');
        }else{
          $("#list_products").empty();
          console.log("aaaaaa2");
          console.log(data);
          // json=data;
          var img2="";

          var shop="";
          for (var i=0; i<data.length; i++){
          img2 += '<div class="gallery"><img class="modaldet" id="'+data[i].id+'" src="'+data[i].img+'"/></div>'

            console.log(data);
            console.log("dataid55");
          }
          $("#list_products").html(
            img2
          );
          console.log("dataid");

        }

      
   })// end done
   .fail(function( data) {
       console.log("HELLOOOOO FAIL"+data);
   })
}


function filtro(){

  $('.filtershop').html(
    '<form name="sfil" class="filt">'+
    '<div class="6u 12u$(small)" class="fil"><td>'+
    '<b>Tipo</b><br>'+
        '<input type="checkbox" id="check1" value="anime" class="chk"/>'+
        '<label for="check1" value="anime">anime</label>'+
        '<input type="checkbox" id="check2" value="pelicula" class="chk"/>'+
        '<label for="check2" value="pelicula">pelicula</label>'+
        '<input type="checkbox" id="check3" value="videojuego" class="chk"/>'+
        '<label for="check3" value="videojuego">videojuego</label>'+
       '</td></div>'+ 

       '<div class="6u 12u$(small)" class="fil"><td>'+
    '<b>Madein</b><br>'+
        '<input type="checkbox" id="check4" value="spain" class="chk"/>'+
        '<label for="check4" value="spain">spain</label>'+
        '<input type="checkbox" id="check5" value="eeuu" class="chk"/>'+
        '<label for="check5" value="eeuu">eeuu</label>'+
        '<input type="checkbox" id="check6" value="japon" class="chk"/>'+
        '<label for="check6" value="japon">japon</label>'+
       '</td></div>'+ 
      // '</div><br><br>'+
      '</br><a id="env" href="javascript:deselect()">Filtrar</a></form>'

      
  )

  var checks = "";
  var count = 0;

  $('#check1').click(function () {
      if(count == 0){
          checks = "WHERE tipo = 'anime'";
          count=count+1;
      }else{
          checks = checks + " OR tipo = 'anime'";
      }
  });
  $('#check2').click(function () {
      if(count == 0){
          checks = "WHERE tipo = 'pelicula'";
          count=count+1;
      }else{
          checks = checks + " OR tipo = 'pelicula'";
      }
  });
  $('#check3').click(function () {
      if(count == 0){
          checks = "WHERE tipo = 'videojuego'";
          count=count+1;
      }else{
          checks = checks + " OR tipo = 'videojuego'";
      }
  });
  $('#check4').click(function () {
      if(count == 0){
          checks = "WHERE madein = 'spain'";
          count=count+1;
      }else{
          checks = checks + " OR madein = 'spain'";
      }
  });
  $('#check5').click(function () {
      if(count == 0){
          checks = "WHERE madein = 'eeuu'";
          count=count+1;
      }else{
          checks = checks + " OR madein = 'eeuu'";
      }
  });
  $('#check6').click(function () {
      if(count == 0){
          checks = "WHERE madein = 'japon'";
          count=count+1;
      }else{
          checks = checks + " OR madein = 'japon'";
      }
  });
 
  $('#env').click(function(){
      console.log(checks);
      $.ajax({
        type: "GET",
        dataType: "json",
        url:"module/shop/controller/controller_shop.php?op=filter&checks=" + checks,
    })
 
    .done(function( data ) {
     
          console.log(data);
          var manolo = json[0];
          $("#list_products").empty();
          $("#exampleModalLabel1").empty();
          count = 0;
          checks = "";
      
          var img2="";

          // var shop="";
          for (var i=0; i<data.length; i++){
            // console.log("dataid");

            // shop+= '<div class=gallery><img class="modaldet" id="'+data[i].id+' src="'+data[i].img+'"/><p>'+data[i].img+'</p></div>'
            img2 += '<div class="gallery"><img class="modaldet" id="'+data[i].id+'" src="'+data[i].img+'"/></div>'

            console.log(data);
            // console.log("dataid55");
          }
          $("#list_products").html(
            img2
          );
      });
  });



}

function deselect(){
  for (i=0;i<document.sfil.elements.length;i++)
    if(document.sfil.elements[i].type == "checkbox")
    document.sfil.elements[i].checked = 0
}

function search(){
  if (document.getElementById('top')){

  var val = sessionStorage.getItem('val');

  if ((!val) || (val==='null')){
    ajaxForSearch("module/shop/controller/controller_shop.php?op=list");
    // localStorage.removeItem('category');
    console.log("if");

  }else{
    ajaxForSearch("module/shop/controller/controller_shop.php?op=list_search&auto="+val);
    sessionStorage.removeItem('val');


  }
}
}

function mapa(){
  $(".fomap").click(function () { 

    console.log("ee");
    if(document.getElementById("mapa") != null){
      var script = document.createElement('script');
      script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyCZUaXOqdGKsYwOB48NzmeWRLSXTkRMho8&callback=initMap";
      script.async;
      script.defer;
      // console.log(script);
  
      document.getElementsByTagName('script')[0].parentNode.appendChild(script);
  // console.log(script);
    }

  // initMap();
  });
  }
  function initMap() {
    $.ajax({
      type: "GET",
      dataType: "json",
      url:"module/shop/controller/controller_shop.php?op=maps",
  })

  .done(function( data ) {
    
    console.log("gg");

    console.log(data);

    var markers = [];


    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: new google.maps.LatLng(38.9050, -0.5446),
      mapTypeId: google.maps.MapTypeId.ROADMAP

    });

    var infowindow = new google.maps.InfoWindow();

    for (var i = 0; i < data.length; i++){
      var newMarker = new google.maps.Marker({

          position: new google.maps.LatLng(data[i].lat, data[i].lng),
          map: map,
          title: data[i].nombre
      });

      google.maps.event.addListener(newMarker, 'click', (function (newMarker, i) {
        return function () {
            infowindow.setContent(data[i].nombre);
            infowindow.open(map, newMarker);
        }
      })(newMarker, i));

    }
  })
    
        }


function pagination() {
  $.ajax({
    type: 'GET',
    dataType: "json",
    url: "module/shop/controller/controller_shop.php?op=countp",
  })
    .done(function (data) {
      console.log("pagination");
      var numprods = data[0].allpages;
      page = numprods / 3;

      $('#pagination').bootpag({
        total: page,
        page: 1,
        maxVisible: 4
      }).on("page", function (event, num) {
        console.log("pagin");
        limit= 3 *(num-1);
        $.ajax({
          type: 'GET',
          dataType: "json",
          url: "module/shop/controller/controller_shop.php?op=productos&limit=" + limit,
        })
        .done(function (data) {
          $("#list_products").empty();
        console.log(num);
        console.log(data);
        console.log(limit + "limit");
       
        json = data;
               $.each(json, function(index, list) {
                var ElementDiv = document.createElement('div');
                ElementDiv.id = "list_shop";
                ElementDiv.innerHTML = 	"<div id='cont_img'><img src='" + list.img + "' class='modaldet' id='" + list.id + "' data-toggle='modal' data-target='#exampleModal'></div><div id='list_header'><span id='li_brand'>  " + list.name + " " + list.codprod + "</span></div>" +
                                           "<div id='list_footer'><span id='" + list.id + "pr'>" + list.name+ "</span><div id='cont_comprar'><select class='qtyprod' id='" + list.id + "qty'></select><button class='baddcart' id='" + list.id + "'>Add to cart</button></div></div>";
                document.getElementById("list_products").appendChild(ElementDiv);
          });
        
      });
    });
    })
    .fail(function( data) {
      console.log("F PAG"+data);
  })
}


function loadsuggestions() {
  var limit = 2;
  $(document).on("click", '#loadsugest', function () {
      $('#featured').empty();
      $('#btnfeatured').empty();
      limit = limit + 2;

      $.ajax({
          type: 'GET',
          dataType: "json",
          url: "https://www.googleapis.com/books/v1/volumes?q=videogames",
      }).done(function (data) {
              var DatosJson = JSON.parse(JSON.stringify(data));

              for (i = 0; i < limit; i++) {
                  var ElementDiv = document.createElement('div');
                  ElementDiv.innerHTML =
                      "<br><div id='cont_img'><img src='" + data['items'][i]['volumeInfo']['imageLinks']['thumbnail'] + "' class='cart' cat='" + data['items'][i]['volumeInfo']['categories'] + "' data-toggle='modal' data-target='#exampleModal'></div><div id='list_header'><hr><span id='li_brand'>  " + DatosJson.items[i].volumeInfo.title + "</br>" + "</span></div></hr>";
                  document.getElementById("featured").appendChild(ElementDiv);

              }
              if (limit === 10) {
                  $('#btnfeatured').empty();
                  $("#nomore").append(
                      ' <div id="loadsugest" style=""><a>NO HAY MAS LIBROS</a></div>'
                  );
              }
              $("#btnfeatured").append(
                  ' <div id="loadsugest" style=""><a>MoreBooks</a></div>'
              );
          });
  })
}

function getSuggestions() {
  limit = 2;
  $.ajax({
      type: 'GET',
      dataType: "json",
      url: "https://www.googleapis.com/books/v1/volumes?q=videogames",
  }).done(function (data) {
          var DatosJson = JSON.parse(JSON.stringify(data));
          DatosJson.items.length = limit;

          for (i = 0; i < DatosJson.items.length; i++) {
              var ElementDiv = document.createElement('div');
              ElementDiv.innerHTML =
                  "<br><div id='cont_img'><img src='" + data['items'][i]['volumeInfo']['imageLinks']['thumbnail'] + "' class='cart' cat='" + data['items'][i]['volumeInfo']['categories'] + "' data-toggle='modal' data-target='#exampleModal'></div><div id='list_header'><hr><span id='li_brand'>  " + DatosJson.items[i].volumeInfo.title + "</br>" + "</span></div></hr>";
              document.getElementById("featured").appendChild(ElementDiv);
          }
          $("#featured").append(
              ' <div id="loadsugest" style=""><a>MoreBooks</a></div>'
          );
      });
  loadsuggestions();
}

function categycarou(){  
  if (document.getElementById('container_shop')){

    var cat = localStorage.getItem('category');
    console.log(cat);

    if ((!cat) || (cat==='null')){
      ajaxForSearch("module/shop/controller/controller_shop.php?op=list");
      localStorage.removeItem('category');
      console.log("if");

    }else{
      ajaxForSearch("module/shop/controller/controller_shop.php?op=cat&tipo="+cat);
      console.log("else");
      console.log(cat);

      localStorage.removeItem('category');
    }
  }
        }

  // function c (){
    $(document).on('click','.modaldet',function () {
      console.log("wwwww");

        $("#list_products").empty();
     

        $("#exampleModalLabel1").empty();
        var id = this.getAttribute('id');
        $.ajax({ 
          type: "GET",
          dataType: "json",
          url: "module/shop/controller/controller_shop.php?op=details&modal=" + id,
      })
      .done(function (data, status)  {
        json = data;

              // var json = JSON.parse(data);
              // $("#exampleModalLabel1").append("Zapatillas " + json.name + " " + json.tipo);
              var ElementDiv = document.createElement('div');
              ElementDiv.id = "modal_shop";
              ElementDiv.innerHTML =  "<div style='width:46%; display:inline-block;' class='provamodal'><img src='" + json.img + "' style='width:100%;'></div>" +
                                      "<div style='width:44%; display:inline-block; vertical-align:top; font-size:30px; margin-left:10%;'><div style='width:100%;'> Category: " + json.tipo + "</div>" +
                                      "<div style='width:100%;'> Name: " + json.name + "</div><div style='font-size: 18px;text-align:  justify;margin-top: 44px;margin-right: 33px'>" + json.madein + "</div>" +
                                      "<select id='qty" + json.id + "modal' style='width: 60%; font-size:20px; margin-top: 53px; border: solid 3px #bbbbbb; background-color: #808080bd; color: white;'></select></div>";
              
              // ElementDiv.innerHTML = '<a href="module/shop/controller/controller_shop.php?&op=list_all"></a>'
              document.getElementById("exampleModalLabel1").appendChild(ElementDiv);
    
        });

    });
  