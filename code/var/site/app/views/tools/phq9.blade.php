@extends('layouts.jquerymobile') {{-- Web site Title --}}
@section('title') PHQ9 @stop{{-- Content --}}

@section('content')
<script>
$(document).ready(function() {
	$("#submitbtn").click(function(e) {

		$.each([ "1a","2a","3a","4a","5a","6a","7a","8a","9a","10a" ], function( i, v ) {
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
The following questions are a screening focusing on symptoms of depression. Please read each question carefully, then select the answer that indicates how much you have been bothered by that problem in the past 2 weeks. Instructions on scoring and interpreting your results are located after the final question.
@else
Las siguientes preguntas son una proyección centrada en los síntomas de la depresión. Por favor, lea atentamente cada pregunta , a continuación, seleccione la respuesta que indica cuánto le han molestado por ese problema en las últimas 2 semanas . Las instrucciones de anotar e interpretar sus resultados se encuentran después de la pregunta final.
@endif

<h1>PHQ-9</h1>

<form id="form1" name="form1" method="post" action="" data-ajax="false" >
<input type="hidden" name="ts" value="<?php echo time();?>">
<input type="hidden" name="proxy" value="<?php echo $proxy;?>">
<input type="hidden" name="lang" value="<?php echo $lang;?>">

@if($lang == "en")
	@include('tools.phq9_en')
@else
	@include('tools.phq9_es')
@endif


</form>
<legend>The PHQ-9 is a Pfizer product. </legend>
<legend>PRIME-MD® is a trademark of Pfizer Inc. </legend>
<legend>PHQ Copyright © 1999 Pfizer Inc. All rights reserved. Reproduced with permission.</legend>

</div>
@stop