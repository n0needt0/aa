@extends('layouts.jquerymobile') {{-- Web site Title --}}
@section('title') SOAPP®-R @stop{{-- Content --}}

@section('content')
<script>
$(document).ready(function() {
	$("#submitbtn").click(function(e) {

		$.each([ "1a","2a","3a","4a","5a","6a","7a","8a","9a","10a","11a","12a","13a","14a","15a","16a","17a","18a","19a","20a","21a","22a","23a","24a" ], function( i, v ) {
			if( !$("[name='" + v + "']").is(':checked')) {
				e.preventDefault();
				@if($lang == "es")
					$("[name='" + v + "']").parent().parent().parent().append("<label class='error'>exigir</label>");
				@else
					$("[name='" + v + "']").parent().parent().parent().append("<label class='error'>required</label>");
				@endif
			}
		});
	});
});
</script>
<style>
label.error{color:red;
			font-weight:bold;
			}
</style>
<div role="main" class="ui-content jqm-content">

<?php echo View::make('partials.languagelink')->with(array("lang"=>$lang, "ref"=>$ref)) ?>

<h2><?php echo date("M.d.Y"); ?> </h2>
@if($lang == "en")
The following are some questions given to patients who are on or being considered for medication for their pain. Please answer each question as honestly as possible. There
are no right or wrong answers.
@else
Las siguientes son algunas de las preguntas dadas a los pacientes que están en o siendo considerados para medicamentos para el dolor. Por favor, responda a cada pregunta lo más honestamente posible . Ya Está
hay respuestas correctas o incorrectas .
@endif

<h1>SOAPP®-R</h1>

<form id="form1" name="form1" method="post" action="" data-ajax="false" >
<input type="hidden" name="ts" value="<?php echo time();?>">
<input type="hidden" name="proxy" value="<?php echo $proxy;?>">
<input type="hidden" name="lang" value="<?php echo $lang;?>">

@if($lang == "en")
	@include('tools.soapr_en')
@else
	@include('tools.soapr_es')
@endif


</form>
<legend>©2009 Inflexxion, Inc. Permission granted solely for use in published format by individual 
practitioners in clinical practice. No other uses or alterations are authorized or permitted by
copyright holder. Permissions questions: PainEDU@inflexxion.com. The SOAPP®-R was
developed with a grant from the National Institutes of Health and an educational grant from Endo
Pharmaceuticals.</legend>
</div>
@stop