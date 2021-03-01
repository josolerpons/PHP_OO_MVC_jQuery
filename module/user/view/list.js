
$(document).ready(function () {
    // $.ajax({
    //     //data: {"parametro1" : "valor1"},
    //     type: "GET",
    //     dataType: "json",
    //     url: "module/user/controller/controller_user.php?op=read_modal&modal=" + id,
    // })
    //  .done(function( data) {
//////
console.log("prod");
    $('#table_crud').DataTable();

    ////
    // $('.user').click(function () {
        $('body').on("click", ".user", function() {

        var id = this.getAttribute('id');
        // alert(id);
        // console.log("read");
        // console.log(id);
        $.ajax({
            //data: {"parametro1" : "valor1"},
            type: "GET",
            dataType: "json",
            url: "module/user/controller/controller_user.php?op=read_modal&modal=" + id,
        })
         .done(function( data) {
                 $('#modalcontent').empty();
                 $('#codprod').html(data.codprod);
                 $("#name").html(data.name);
                 $("#madein").html(data.madein);
                 $("#tipo").html(data.tipo);
                 $("#reed").html(data.reed);
                 $("#prov").html(data.prov);
                 $('<div></div>').attr('id','Div1').appendTo('#modalcontent');
                 $('<div></div>').attr('id','Div2').appendTo('#modalcontent');
                
                 $("#modal_content").html(
                            '<br><span>Codprod:   <span id="codprod">'+data.codprod+'</span></span></br>'+
                            '<br><span>Name:   <span id="name">'+data.name+'</span></span></br>'+
                            '<br><span>Madein:     <span id="madein">'+data.madein+'</span></span></br>'+
                            '<br><span>Tipo:     <span id="tipo">'+data.tipo+'</span></span></br>'+
                            '<br><span>Restr. edad:     <span id="reed">'+data.reed+'</span></span></br>'+
                            '<br><span>prov:    <span id="prov">'+data.prov+'</span></span></br>'
                 )
                 $("#Div2").html(
                    '<br><span>Codprod:   <span id="codprod">'+data.codprod+'</span></span></br>'+
                    '<br><span>Madein:     <span id="madein">'+data.madein+'</span></span></br>'+
                     '<br><span>Name:   <span id="name">'+data.name+'</span></span></br>'+
                   '<br><span>Tipo:     <span id="tipo">'+data.tipo+'</span></span></br>'+
                    '<br><span>Restr. edad:     <span id="reed">'+data.reed+'</span></span></br>'+
                    '<br><span>prov:    <span id="prov">'+data.prov+'</span></span></br>'
                 )

                modal(data.codprod);
         })
         .fail(function( jqXHR, textStatus, errorThrown ) {
             if ( console && console.log ) {
                 console.log( "La solicitud ha fallado: " +  textStatus);
             }
        });
    });
 });

function modal(data){
    // $("#modal_content").show();
    $("#modal_content").dialog({
        width: 850, //<!-- ------------- ancho de la ventana -->
        height: 500, //<!--  ------------- altura de la ventana -->
        //show: "scale", <!-- ----------- animación de la ventana al aparecer -->
        //hide: "scale", <!-- ----------- animación al cerrar la ventana -->
        resizable: "false", //<!-- ------ fija o redimensionable si ponemos este valor a "true" -->
        //position: "down",<!--  ------ posicion de la ventana en la pantalla (left, top, right...) -->
        modal: "true", //<!-- ------------ si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
        buttons: {
            Ok: function () {
                $(this).dialog("close");
            }
        },
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
                });
}

//         $.get("module/user/controller/controller_user.php?op=read_modal&modal=" + id, 
//         function (data, status) {
//             // console.log("holapppp");
//             // console.log(data);



//             var json = JSON.parse(data); 
            
//             console.log(json);
//             console.log("heyy");


//             if(json === 'error') {
//                 console.log("erro");
//                 //pintar 503
//                 window.location.href='index.php?page=503';
//             }else{
//                 console.log(json.codprod);
                // $("#codprod").html(json.codprod);
                // $("#name").html(json.name);
                // $("#madein").html(json.madein);
                // $("#tipo").html(json.tipo);
                // $("#reed").html(json.reed);
                // $("#prov").html(json.prov);
           
//      console.log("else");
                // $("#details_user").show();
                // $("#user_modal").dialog({
                //     width: 850, //<!-- ------------- ancho de la ventana -->
                //     height: 500, //<!--  ------------- altura de la ventana -->
                //     //show: "scale", <!-- ----------- animación de la ventana al aparecer -->
                //     //hide: "scale", <!-- ----------- animación al cerrar la ventana -->
                //     resizable: "false", //<!-- ------ fija o redimensionable si ponemos este valor a "true" -->
                //     //position: "down",<!--  ------ posicion de la ventana en la pantalla (left, top, right...) -->
                //     modal: "true", //<!-- ------------ si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
                //     buttons: {
                //         Ok: function () {
                //             $(this).dialog("close");
                //         }
                //     },
                //     show: {
                //         effect: "blind",
                //         duration: 1000
                //     },
                //     hide: {
                //         effect: "explode",
                //         duration: 1000
                //     }
//                 });
//             }//end-else
//         });


//     });
// });
