@extends('layouts.jquerymobile') {{-- Web site Title --}}
@section('title') CAGEAID @stop{{-- Content --}}

@section('content')
<script>
$(document).ready(function() {
	$("#submitbtn").click(function(e) {

		$.each([ "1a","2a","3a","4a" ], function( i, v ) {
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
<h1>CAGE-AID</h1>
<form id="form1" name="form1" method="post" action="" data-ajax="false" >
<input type="hidden" name="ts" value="<?php echo time();?>">
<input type="hidden" name="proxy" value="<?php echo $proxy;?>">
<input type="hidden" name="lang" value="<?php echo $lang;?>">

@if($lang == "en")
	@include('tools.cageaid_en')
@else
	@include('tools.cageaid_es')
@endif

</form>
</div>
@stop