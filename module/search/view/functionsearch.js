
$(document).ready(function () {
    var id="";
    $.ajax({ 
        type: "GET",
        dataType: "json",
        url: "module/search/controller/controller_search.php?op=firstdrop" 
    })
    .done(function( data, textStatus, jqXHR ) {
    //    console.log( data );
       var $drop1 = $("#drop1");
       //$drop.empty();
       console.log("ggggg");
         $.each(data, function(i, item) {///bucle para rellenar el dropdown1
            //console.log( item);
            $drop1.append("<option>" + item.tipo + "</option>")        
        });
    });
        
    console.log("search");
    $("#drop1").on("change", function () {
        var valPro = $(this).val();
        console.log(valPro);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "module/search/controller/controller_search.php?op=seconddrop&id=" + valPro, 
        })
        .done(function( data, textStatus, jqXHR ) {
            var $drop2 = $("#drop2");
            $drop2.empty();
            $drop2.append("<option value=false>" + "Selecciona genero" + "</option>");
            $.each(data, function(i, item) {///bucle para rellenar el dropdown1
               console.log("item");
                $drop2.append("<option>" + item.genero + "</option>")
            });
        });
    });

    $("#autocom").on("keyup", function () {
        var auto=$(this).val();///valor de lo que estamos escribiendo
        var drop2=$("#drop2").val();// valor del combo de localidades
        var drop1=$("#drop1").val();
        var autCom = {auto: auto, drop2: drop2, drop1:drop1}; 
        console.log(autCom);
        $.ajax({
            type: "POST",
            url: "module/search/controller/controller_search.php?op=autocomplete",  
            data: autCom,
        })
        .done(function( data, textStatus, jqXHR ) {
            // console.log(data);
            console.log( "autcom" );

            $('#optionsauto').fadeIn(1000).html(data);// se ve
            ///si selecciono valor
            $('.autoelement').on('click', function(){
                var id = $(this).children('a').attr('id');
                console.log(id);
                $('#autocom').val(id);
                //$('#autocom').val($('#'+id).attr('data'));
                $('#optionsauto').fadeOut(1000);
            });
            ///si click fuera se borra value y se cierra
            $("#contenido, .slider__img").on('click', function(){
                $('#optionsauto').fadeOut(1000);
                $('#autocom').val("");
            });
        });
    });
    console.log( "data" );

    //// BTN SEARCH
    $("#searchlist").on("click", function (){
        var drop1 = $("#drop1").val();
        var drop2=$("#drop2").val();
        var auto=$("#autocom").val();
        // var id = $(this).children('a').attr('id');

        //console.log(drop);
        // console.log(drop2);
        // console.log(auto);
        sessionStorage.setItem('tipo', drop1); // save data
        sessionStorage.setItem('local', drop2); // save data
        sessionStorage.setItem('val', auto); // save data
        // console.log(auto);
        // console.log("pos ok");
        if((drop1==0)&&(drop2==0)&&(auto==="")){
            // console.log("ingresa criterios de busqueda");
            toastr["info"]("Ingresa criterios de busqueda"),{"iconClass":'toast-info'};
        }else{
            // window.location.href = 'index.php?page=controller_shop&op=list_search&auto=' +auto;
            console.log(auto);
            setTimeout('window.location.href = "index.php?page=controller_shop&op=list",1000');

        }
    });
});