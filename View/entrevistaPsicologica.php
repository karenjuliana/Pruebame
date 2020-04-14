
<?php include"../config.php";
sessionValidate();
?>

<?php include FOLDER_TEMPLATE. "head.php"; ?>
<link href="../vendor/fontawesome-free/css/bootstrap.css" rel="stylesheet" type="text/css">
  <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>


<div class="container">
<div class="text-center" >
<h1 class="jumbotron">Entrevista Psicologica</h1>
</div>
<div class="progress">
<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<form id="regiration_form" novalidate action="action.php"  method="post">
<fieldset>
  <h2 style="">Paso 1: Datos</h2>
  <div class="form-group row">
    <div class="col-sm-6">
  <label for="apellido">Nombre Completo</label>
  <input type="Text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE COMPLETO" required>
</div>
<div class="col-sm-6">
  <label for="cedula">Cedula</label>
  <input type="number" class="form-control" id="cc" name="cc" placeholder="NUMERO DE DOCUMENTO" required>
</div>
</div>

<div class="form-group row">
<div class="col-sm-4">
  <label for="fecha_nac">Fecha de nacimiento</label>
  <input type="date" class="form-control form-control-user" id="fecha_nac" name="fecha_nac" placeholder="Fecha Nacimiento" max="2005-01-01" required>
</div>
<div class="col-sm-4">
  <label for="dependencia">Dependencia</label>
  <input type="text" class="form-control form-control-user" id="dependencia" name="dependencia" placeholder="DEPENDENCIA" required>
</div>
<div class="col-sm-4">
  <label for="cargo">Cargo</label>
  <input type="text" class="form-control form-control-user" id="cargo" name="cargo" placeholder="CARGO" required>
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
  <label for="cargoAspira">Cargo al que aspira</label>
  <input type="text" class="form-control form-control-user" id="cargoAspira" name="cargoAspira" placeholder="CARGO AL QUE ASPIRA" required>
</div>
</div>
<div class="form-group row">
<div class="col-sm-6">
  <label for="telefono">Telefono</label>
  <input type="number" class="form-control form-control-user" id="telefono" name="telefono" placeholder="TELEFO O CELULAR" required>
</div>
<div class="col-sm-6">
  <label for="aspiracionSal">Aspiracion Salarial</label>
  <input type="number" class="form-control form-control-user" id="aspiracionSal" name="aspiracionSal" placeholder="ASPIRACION SALARIAL" required>
</div>
</div>
<div class="form-group row">
<div class="col-sm-6">
  <label for="fechaEntrevista">Fecha de la Entrevista</label>
  <input type="text" class="form-control form-control-user" id="fechaEntrevista" name="fechaEntrevista" placeholder="<?php echo $fecha_actual?>" readonly="readonly" required>
</div>
<div class="col-sm-6">
  <label for="psicologa">Entrevistador(a)</label>
  <input type="text" class="form-control form-control-user" id="psicologa" name="psicologa" placeholder="<?php echo $_SESSION['user']?>" readonly="readonly" required>
</div>
</div>
  <input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />
</fieldset>





<fieldset>
  <h2> Paso 2: Comportamientos</h2>
  <div class="form-group row">
  <div class="col-sm-3">
  <label for="responsabilidad">Responsabilidad</label>
  <input type="number" class="form-control" name="responsabilidad" id="responsabilidad" placeholder="1-5" min="1" max="5" required>
</div>
<div class="col-sm-3">
  <label for="productividad">Productividad</label>
  <input type="number" class="form-control" name="productividad" id="productividad" placeholder="1-5" min="1" max="5" required>
</div>
<div class="col-sm-3">
  <label for="gestionCambio">Gestion de Cambio</label>
  <input type="number" class="form-control" name="gestionCambio" id="gestionCambio" placeholder="1-5" min="1" max="5" required>
</div>
<div class="col-sm-3">
  <label for="innovacion">Innovacion</label>
  <input type="number" class="form-control" name="innovacion" id="innovacion" placeholder="1-5" min="1" max="5" required>
</div>
</div>
<div class="form-group row">
<div class="col-sm-6">
  <label for="resiliencia">Resiliencia</label>
  <input type="number" class="form-control" name="resiliencia" id="resiliencia" placeholder="1-5" min="1" max="5" required>
</div>
<div class="col-sm-6">
  <label for="confianza">Confianza</label>
  <input type="number" class="form-control" name="confianza" id="confianza" placeholder="1-5" min="1" max="5" required>
</div>
</div>
  <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset> 



<fieldset>
  <h2>Paso 3: Información de contacto</h2>
<div class="form-group row">
  <div class="col-sm-6">
  <label for="comportamientoEtico">Comportamiento Etico</label>
  <input type="text" class="form-control" id="comportamientoEtico" name="comportamientoEtico" placeholder="COMPORTAMIENTO ETICO">
</div>
  <div class="col-sm-6">
  <label for="fuenteR">Fuente de Reclutamiento</label>
  <input type="text" class="form-control" id="fuenteR" name="fuenteR" placeholder=" FUENTE DE RECLUTAMIENTO">
</div>
</div>
<div class="form-group row">
  <div class="col-sm-3">
  <label for="resultadoI">Resultado de Idiomas(si se requiere)</label>
  <input type="text" class="form-control" id="resultadoI" name="resultadoI" placeholder="RESULTADO DE IDIOMAS">
</div>
  <div class="col-sm-6">
  <label for="inteligenciaE">Inteligencia Emocional</label>
  <input type="text" class="form-control" id="inteligenciaE" name="inteligenciaE" placeholder=" FUENTE DE RECLUTAMIENTO">
</div>
  <div class="col-sm-3">
    <label for="candidatoU">¿Es candidato unico?</label>
    <select class="form-control" id="candidatou" name="candidatoU" required>
      <option value="no">NO</option>
      <option value="si">SI</option>
    </select>
  </div>
</div>
<div class="form-group row">
<div class="col-sm-12">
  <label for="explicacion">Explicacion(si es candidato unico)</label>
  <textarea  class="form-control" name="explicacion" id="explicacion" placeholder="explicacion"></textarea>
</div>
</div>
<div class="form-group row">
  <div class="col-sm-12">
  <label for="resolucionProblemas">Resolucion de Problemas Complejos</label>
  <input type="text" class="form-control" id="resolucionProblemas" name="resolucionProblemas" placeholder="RESOLUCION DE PROBLEMAS COMPLEJOS">
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
  <label for="observaciones">Observaciones</label>
  <textarea  class="form-control" name="observaciones" id="observaciones" placeholder="¿Registra informacion relevante al proceso de seleccion y/o contratacio?"></textarea>
</div>
</div>
<br />


<h1 style="text:center">Concepto (Resumen de la Valoracion)</h1>
<div class="form-group row">
<div class="col-sm-6">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="si" id="adecuado" name="adecuado">
  <label class="form-check-label" for="defaultCheck1">
    Adecuado(a)
  </label>
</div>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="si" id="adecuadoP" name="adecuadoP">
  <label class="form-check-label" for="defaultCheck1">
    Adecuado(a) para otro cargo 
  </label>
</div>
</div>
<div class="form-group row">
<div class="col-sm-6">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="si" id="parcialmente" name="parcialmente">
  <label class="form-check-label" for="defaultCheck1">
    Parcial mente adecuado(a)
  </label>
</div>
</div>
<div class="form-group row">
<div class="col-sm-6">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="si" id="primera" name="primera">
  <label class="form-check-label" for="defaultCheck1">
    Primera Opcion
  </label>
</div>
</div>
<div class="form-group row">
<div class="col-sm-6">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="si" id="no" name="no">
  <label class="form-check-label" for="defaultCheck1">
    No Adecuado(a)
  </label>
</div>
</div>
<div class="col-sm-6">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="si" id="segunda" name="segunda">
  <label class="form-check-label" for="defaultCheck1">
    Segunda opcion
  </label>
</div>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
  <label for="concepto">Concepto Psicologa</label>
  <textarea  class="form-control" name="concepto" id="concepto" placeholder="¿Cual es tu Concepto?"></textarea>
</div>
</div>

  <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  <input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
</fieldset>
</form>
</div>

<?php include FOLDER_TEMPLATE. "scripts.php"; ?>

<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>
