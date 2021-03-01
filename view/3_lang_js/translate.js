// frases = {
//   "en": {
//     "Cambiar idioma:": "Change language:",
//     "Español": "Spanish",
//      "Inglés": "English",
//      "Valenciano": "Valencian",
//      "Inicio": "Home",
//      "Productos": "Product",
//      "Servicios": "Services",
//     "Conocenos": "Know us",
//     "Contacto": "Contact"
//   },
//   "va": {
//     "Cambiar idioma:": "Cambiar idioma:",
//     "Español": "Espanyol",
//     "Inglés": "Ingles",
//     "Valenciano": "Valencia",
//     "Inicio": "Inici",
//     "Productos": "Productes",
//     "Servicios": "Servicis",
//    "Conocenos": "Coneix-mos",
//    "Contacto": "Contacte"
 
//   }
// };

// function cambiarIdioma(lang) {
//   // Habilita las 2 siguientes para guardar la preferencia.
//   lang = lang || localStorage.getItem('app-lang') || 'es';
//   localStorage.setItem('app-lang', lang);
//   $('#lang').val(lang);
//   var elems = document.querySelectorAll('[data-tr]');
//   console.log(elems);
//   console.log(lang);
//     if (lang != "es"){
//       $.ajax({
//         type: 'POST',
//         url: 'view/3_lang_js/'+lang+'.json',
//         dataType: 'json',
//         success: function (data) {
//           for (var x = 0; x < elems.length; x++){
//             elems[x].innerHTML = data["strings"][elems[x].dataset.tr]
//           }
//         }
//       });
//     }else {
//       for (var x = 0; x < elems.length; x++){
//         elems[x].innerHTML = elems[x].dataset.tr;
//       }
//     }
//     }

    
// //     elems[x].innerHTML = frases.hasOwnProperty(lang)
// //       ? frases[lang][elems[x].dataset.tr]
// //       : elems[x].dataset.tr;
// //   }
// // }

// window.onload = function(){
//   cambiarIdioma();

//   $(document).ready(function(){
//     cambiarIdioma();
//     $('#lang').on("change", function(){
      

//       if ($(this).val()=="en")
//       cambiarIdioma('en');
  
//       if ($(this).val()=="va")
//       cambiarIdioma('va');
//       });
//     });
//   }

// frases = {
//   "en": {
//     "Cambiar idioma:": "Change language:",
//     "Español": "Spanish",
//      "Inglés": "English",
//      "Valenciano": "Valencian",
//      "Inicio": "Home",
//      "Productos": "Product",
//      "Servicios": "Services",
//     "Conocenos": "Know us",
//     "Contacto": "Contact"
   
//   },
//   "va": {
//     "Cambiar idioma:": "Cambiar idioma:",
//     "Español": "Espanyol",
//     "Inglés": "Ingles",
//     "Valenciano": "Valencia",
//     "Inicio": "Inici",
//     "Productos": "Productes",
//     "Servicios": "Servicis",
//    "Conocenos": "Coneix-mos",
//    "Contacto": "Contacte"
 
//   }
// };

function cambiarIdioma(lang,data) {
  // Habilita las 2 siguientes para guardar la preferencia.
  lang = lang || localStorage.getItem('app-lang') || 'es';
  localStorage.setItem('app-lang', lang);

  var elems = document.querySelectorAll('[data-tr]');
  for (var x = 0; x < elems.length; x++) {
    if (data) {
      elems[x].innerHTML = data[lang][elems[x].dataset.tr];
      // localStorage.setItem('app-lang', data);

    }  else 
      elems[x].innerHTML = elems[x].dataset.tr;
    
  }
}

window.onload = function(){
   cambiarIdioma();   
   $(document).ready(function(){
    cambiarIdioma();   

    $("#btn-es").on("click", function(){
      cambiarIdioma('es');
    });

    $("#btn-en").on("click", function(){
      $.ajax({
        url: 'view/3_lang_js/en.json',
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
          console.log(data);
          cambiarIdioma('en',data);  
        }
    })
    });

    $("#btn-va").on("click", function(){
      $.ajax({
        url: 'view/3_lang_js/va.json',
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
          console.log(data);
          cambiarIdioma('va',data);  
        }
    })
    });
  //   	$("#btn-es").on("click", function(){
  //   	  alert("The paragraph was clicked.");
  //     });

}); 
      
  // document.getElementById('btn-es').addEventListener('click', cambiarIdioma.bind(null, 'es'));
  // document.getElementById('btn-en').addEventListener('click', cambiarIdioma.bind(null, 'en'));
  // document.getElementById('btn-va').addEventListener('click', cambiarIdioma.bind(null, 'va'));
}

////////////////////////////////////////
// $(document)

// frases = {
//   "en": {

//     "Cambiar idioma:": "Change language:",
//     "Español": "Spanish",
//      "Inglés": "English",
//      "Valenciano": "Valencian",
//      "Inicio": "Home",
//      "Productos": "Product",
//      "Servicios": "Services",
//     "Conocenos": "Know us",
//     "Contacto": "Contact"

//   },
//   "va": {
//     "Cambiar idioma:": "Cambiar idioma:",
//     "Español": "Espanyol",
//     "Inglés": "Ingles",
//     "Valenciano": "Valencia",
//     "Inicio": "Inici",
//     "Productos": "Productes",
//     "Servicios": "Servicis",
//    "Conocenos": "Coneix-mos",
//    "Contacto": "Contacte"

//   }
// };
// function cambiarIdioma(lang) {
//   // Habilita las 2 siguientes para guardar la preferencia.
//   lang = lang || localStorage.getItem('app-lang') || 'es';
//   localStorage.setItem('app-lang', lang);

//   var elems = document.querySelectorAll('[data-tr]');
//   for (var x = 0; x < elems.length; x++) {
//     elems[x].innerHTML = frases.hasOwnProperty(lang)
//       ? frases[lang][elems[x].dataset.tr]
//       : elems[x].dataset.tr;
//   }
// }

// window.onload = function(){
//   cambiarIdioma();

//   $(document).ready(function(){
   
//     $("#btn-en").on("click", function(){
//       $.ajax({
//         url: 'view/3_lang_js/en.json',
//         type: 'POST',
//         dataType: 'JSON',
//         success: function (data) {
//           var elems = document.querySelectorAll('[data-tr]');
//           for (var x = 0; x < elems.length; x++) {
//             console.log("h");
//             elems[x].innerHTML = en.hasOwnProperty(lang)
//               ? en[lang][elems[x].dataset.tr]
//               : elems[x].dataset.tr;
//           }
//           cambiarIdioma('en');
//         }
//     })
//     });

//     $("#btn-es").on("click", function(){
//       cambiarIdioma('es');
//     });

//     $("#btn-va").on("click", function(){
//       cambiarIdioma('va');
//     });

//   });