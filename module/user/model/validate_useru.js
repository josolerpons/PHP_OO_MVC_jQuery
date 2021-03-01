function validate_codprod(texto){
    if (texto.length > 0){
        var reg=/^[0-9]{5}$/;
        return reg.test(texto);
    }
    return false;
}

// function validate_password(texto){
//     if (texto.length > 0){
//         var reg = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
//         return reg.test(texto);
//     }
//     return false;
// }

function validate_name(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_madein(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_tipo(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_reed(texto){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_prov(array){
    var i;
    var ok=0;
    for(i=0; i<array.length;i++){
        if(array[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

// function validate_DNI(dni){
    
//   var numero = dni.substr(0,dni.length-1);
//   var let = dni.substr(dni.length-1,1);
//   numero = numero % 23;
//   var letra='TRWAGMYFPDXBNJZSQVHLCKET';
//   letra=letra.substring(numero,numero+1);
//   if (letra!=let){
//       return false;
//   }else{
//       return true;
//   }
// }

// function validate_sexo(texto){
//     var i;
//     var ok=0;
//     for(i=0; i<texto.length;i++){
//         if(texto[i].checked){
//             ok=1
//         }
//     }
 
//     if(ok==1){
//         return true;
//     }
//     if(ok==0){
//         return false;
//     }
// }

// function validate_fecha(texto){
//     if (texto.length > 0){
//         return true;
//     }
//     return false;
// }

// function validate_edad(texto){
//     if (texto.length > 0){
//         var reg=/^[0-9]{1,2}$/;
//         return reg.test(texto);
//     }
//     return false;
// }

// function validate_pais(texto){
//     if (texto.length > 0){
//         return true;
//     }
//     return false;
// }

// function validate_idioma(array){
//     var check=false;
//     for ( var i = 0, l = array.options.length, o; i < l; i++ ){
//         o = array.options[i];
//         if ( o.selected ){
//             check= true;
//         }
//     }
//     return check;
// }

// function validate_observaciones(texto){
//     if (texto.length > 0){
//         return true;
//     }
//     return false;
// }

// function validate_aficion(array){
//     var i;
//     var ok=0;
//     for(i=0; i<array.length;i++){
//         if(array[i].checked){
//             ok=1
//         }
//     }
 
//     if(ok==1){
//         return true;
//     }
//     if(ok==0){
//         return false;
//     }
// }

function validateu(){
    var check=true;
    
    var v_codprod=document.getElementById('codprod').value;
     var v_name=document.getElementById('name').value;
     var v_madein=document.getElementById('madein').value;
     var v_tipo=document.getElementById('tipo').value;
     var v_reed=document.getElementsByName('reed');
     var v_prov=document.getElementsByName('prov[]');

    // var v_sexo=document.getElementsByName('sexo');
    // var v_fecha_nacimiento=document.getElementById('fecha').value;
    // var v_edad=document.getElementById('edad').value;
    // var v_idioma=document.getElementById('idioma[]');
    // var v_observaciones=document.getElementById('observaciones').value;
    // var v_aficion=document.getElementsByName('aficion[]');
    
    var r_codprod=validate_codprod(v_codprod);
     var r_name=validate_name(v_name);
     var r_madein=validate_madein(v_madein);
     var r_tipo=validate_tipo(v_tipo);
     var r_reed=validate_reed(v_reed);
     var r_prov=validate_prov(v_prov);

    // var r_sexo=validate_sexo(v_sexo);
    // var r_fecha_nacimiento=validate_fecha(v_fecha_nacimiento);
    // var r_edad=validate_edad(v_edad);
    // var r_idioma=validate_idioma(v_idioma);
    // var r_observaciones=validate_observaciones(v_observaciones);
    // var r_aficion=validate_aficion(v_aficion);
    
    if(!r_codprod){
        document.getElementById('error_codprod').innerHTML = " * El codprod introducido no es valido";
        check=false;
        return 0;
    }else{
        document.getElementById('error_codprod').innerHTML = "";
    }
     if(!r_name){
        document.getElementById('error_name').innerHTML = " * El nombregg introducido no es valida";
        check=false;
        return 0;
    }else{
        document.getElementById('error_name').innerHTML = "";
    }
    if(!r_madein){
        document.getElementById('error_madein').innerHTML = " * El madein introducido no es valido";
        check=false;
        return 0;
    }else{
        document.getElementById('error_madein').innerHTML = "";
    }
    if(!r_tipo){
        document.getElementById('error_tipo').innerHTML = " * El tipo introducido no es valido";
        check=false;
        return 0;
    }else{
        document.getElementById('error_tipo').innerHTML = "";
    }
    if(!r_reed){
        document.getElementById('error_reed').innerHTML = " * No has seleccionado ninguna restriccion de edad";
        check=false;
        return 0;
    }else{
        document.getElementById('error_reed').innerHTML = "";
    }
    if(!r_prov){
        document.getElementById('error_prov').innerHTML = " * No has seleccionado ningun proveedor";
        check=false;
        return 0;
    }else{
        document.getElementById('error_prov').innerHTML = "";
    }
    // if(!r_sexo){
    //     document.getElementById('error_sexo').innerHTML = " * No has seleccionado ningun genero";
    //     check=false;
    // }else{
    //     document.getElementById('error_sexo').innerHTML = "";
    // }
    // if(!r_fecha_nacimiento){
    //     document.getElementById('error_fecha_nacimiento').innerHTML = " * No has introducido ninguna fecha";
    //     check=false;
    // }else{
    //     document.getElementById('error_fecha_nacimiento').innerHTML = "";
    // }
    // if(!r_edad){
    //     document.getElementById('error_edad').innerHTML = " * La edad introducida no es valida";
    //     check=false;
    // }else{
    //     document.getElementById('error_edad').innerHTML = "";
    // }
    // if(!r_idioma){
    //     document.getElementById('error_idioma').innerHTML = " * No has seleccionado ningun idioma";
    //     check=false;
    // }else{
    //     document.getElementById('error_idioma').innerHTML = "";
    // }
    // if(!r_observaciones){
    //     document.getElementById('error_observaciones').innerHTML = " * El texto introducido no es valido";
    //     check=false;
    // }else{
    //     document.getElementById('error_observaciones').innerHTML = "";
    // }
    // if(!r_aficion){
    //     document.getElementById('error_aficion').innerHTML = " * No has seleccionado ninguna aficion";
    //     check=false;
    // }else{
    //     document.getElementById('error_aficion').innerHTML = "";
    // }

    document.update_user.submit();
    document.update_user.action="index.php?page=controller_user&op=list";  
 

    return check;
 
 
}
