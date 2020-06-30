//CALCULAR EDAD
$(function(){
    $('#birthday').on('change', calcularEdad);
});

function calcularEdad() {
    
    fecha = $(this).val(); 
    var hoy = new Date();
    var cumpleanos = new Date(fecha);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();

    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    $('#age').val(edad);
}

// FUNCIÓN DE PRUEBA ALERT
function mifuncion() {
    alert("Hello! I am an alert box!");
  }



//SELECT DINAMICO BOOTSTRAP 


/* var catAndActs = {};
catAndActs['Ajedrez'] = ['Assessment Day', 'Common Assessment Development', 'Data Team', 'Kindergarten Screening', 'Other'];
catAndActs['Curriculum Development and Alignment'] = ['Capstone Development', 'Course Of Study Development / Revision', 'Standards Alignment / Rollout', 'Other'];
catAndActs['District Committee'] = ['Curriculum Council', 'Grading & Assessment Task Force', 'Professional Development Planning Committee', 'Race To The Top Committee', 'Teacher Evaluation Committee', 'Other'];
catAndActs['Meeting'] = ['Academic Support Team', 'ELL / eKLIP Teachers', 'Gifted Intervention Specialist', 'Intervention Assistance Team', 'Intervention Teachers', 'Kindergarten Parent Conference', 'KLIP Teachers', 'Title I Teachers', 'Other'];
catAndActs['Other Category'] = ['Other'];
catAndActs['Professional Conference'] = ['Conference'];
catAndActs['Professional Workshop / Training'] = ['In-District', 'Out-Of-District'];
catAndActs['Pupil Services'] = ['IEP Meeting', 'IEP Writing'];

function ChangecatList() {
    var catList = document.getElementById("validationCustom03");
    var actList = document.getElementById("validationCustom04");
    var selCat = catList.options[catList.selectedIndex].value;
    while (actList.options.length) {
        actList.remove(0);
    }
    var cats = catAndActs[selCat];
    if (cats) {
        var i;
        for (i = 0; i < cats.length; i++) {
            var cat = new Option(cats[i], i);
            actList.options.add(cat);
        }
    }
}  */

/* var catAndActs = {};
catAndActs['Ajedrez'] = ['Individual', 'Mixto'];
catAndActs['Atetismo'] = ['Salto de longitud', 'Relevo Mixto', '100 metros'];
catAndActs['Curriculum Development and Alignment'] = ['Capstone Development', 'Course Of Study Development / Revision', 'Standards Alignment / Rollout', 'Other'];
catAndActs['District Committee'] = ['Curriculum Council', 'Grading & Assessment Task Force', 'Professional Development Planning Committee', 'Race To The Top Committee', 'Teacher Evaluation Committee', 'Other'];
catAndActs['Meeting'] = ['Academic Support Team', 'ELL / eKLIP Teachers', 'Gifted Intervention Specialist', 'Intervention Assistance Team', 'Intervention Teachers', 'Kindergarten Parent Conference', 'KLIP Teachers', 'Title I Teachers', 'Other'];
catAndActs['Other Category'] = ['Other'];
catAndActs['Professional Conference'] = ['Conference'];
catAndActs['Professional Workshop / Training'] = ['In-District', 'Out-Of-District'];
catAndActs['Pupil Services'] = ['IEP Meeting', 'IEP Writing'];

function ChangecatList() {
    var catList = document.getElementById("validationCustom03");
    var actList = document.getElementById("validationCustom04");
    var selCat = catList.options[catList.selectedIndex].value;
    while (actList.options.length) {
        actList.remove(0);
    }
    var cats = catAndActs[selCat];
    if (cats) {
        var i;
        for (i = 0; i < cats.length; i++) {
            var cat = new Option(cats[i], i);
            actList.options.add(cat);
        }
    }
}  */
//TERMINA SELECT DINAMICO BOOTSTRAP 


//
/* $('#deportes1').on('change', function (e) {
    $('.deporte1').hide();
    $('#deporte1-' + e.target.value).show();
}); */

//

$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});

//
/* 
$(function() {
    $('#colorselector').change(function(){
      $('.colors').hide();
      $('#' + $(this).val()).show();
    });
  });
 */



//

/* $().ready(function(){
	$('#cambiarDeporte').change(function(e){
		if($('#cambiarDeporte').val()==0){//muestro el div1 y oculto los demas
			$('#Ajedrez0').show();
			$('#Atletismo1').hide();
			$('#Fut5x5_2').hide();
			$('#Voleibol3').hide();
		}else if($('#cambiarDeporte').val()=="Ajedrez"){//muestro el div2 y oculto los demas
			$('#Ajedrez0').hide();
			$('#Atletismo1').show();
			$('#Fut5x5_2').hide();
			$('#Voleibol3').hide();
		}else if($('#cambiarDeporte').val()=="Atletismo"){//muestro el div3 y oculto los demas
			$('#Ajedrez0').hide();
			$('#Atletismo1').hide();
			$('#Fut5x5_2').show();
			$('#Voleibol3').hide();
		}else if($('#cambiarDeporte').val()==3){//muestro el div3 y oculto los demas
			$('#Ajedrez0').hide();
			$('#Atletismo1').hide();
			$('#Fut5x5_2').hide();
			$('#Voleibol3').show();
		}
	});
}) */



//Funcion mostrar u esconder select 

$().ready(function(){
	$('#cambiar').change(function(e){
		if($('#cambiar').val()=="ajedrez"){//muestro el div1 y oculto los demas
			$('#Ajedrez_').show(); 
			$('#Atletismo_').hide();
			$('#futbol5x5_').hide();
			$('#taekwondo_').hide();
      $('#voleibol_').hide();
		}else if($('#cambiar').val()=="atletismo"){//muestro el div2 y oculto los demas
			$('#Ajedrez_').hide();
			$('#Atletismo_').show();
			$('#futbol5x5_').hide();
			$('#taekwondo_').hide();
      $('#voleibol_').hide();
		}else if($('#cambiar').val()=="Futbol5x5"){//muestro el div3 y oculto los demas
			$('#Ajedrez_').hide();
			$('#Atletismo_').hide();
			$('#futbol5x5_').show();
			$('#taekwondo_').hide();
      $('#voleibol_').hide();
		}else if($('#cambiar').val()=='Taekwondo'){//muestro el div3 y oculto los demas
			$('#Ajedrez_').hide();
			$('#Atletismo_').hide();
			$('#futbol5x5_').hide();
			$('#taekwondo_').show();
      $('#voleibol_').hide();
		}else if($('#cambiar').val()=='Voleibol'){//muestro el div3 y oculto los demas
            $('#Ajedrez_').hide();
            $('#Atletismo_').hide();
            $('#futbol5x5_').hide();
            $('#taekwondo_').hide();
            $('#voleibol_').show();
  }
	});
}) 


