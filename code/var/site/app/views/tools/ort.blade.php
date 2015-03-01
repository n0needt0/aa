@extends('layouts.jquerymobile') {{-- Web site Title --}}
@section('title') ORT @stop{{-- Content --}}

@section('content')
<script>

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
<h1>Opioid Risk Tool (ORT)</h1>
@else
<h1>Herramienta Riesgo de opiáceos (ORT)</h1>
@endif

<form id="form1" name="form1" method="post" action="" data-ajax="false" >
<input type="hidden" name="ts" value="<?php echo time();?>">
<input type="hidden" name="proxy" value="<?php echo $proxy;?>">
<input type="hidden" name="lang" value="<?php echo $lang;?>">

@if($lang == "en")
	@include('tools.ort_en')
@else
	@include('tools.ort_es')
@endif


</form>
</div>
@stop