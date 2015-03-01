@extends('layouts.jquerymobile') {{-- Web site Title --}}
@section('title') TEST CASES @stop{{-- Content --}}

@section('content')
<script>

</script>
<style>
label.error{color:red;
			font-weight:bold;
			}
</style>
<div role="main" class="ui-content jqm-content">

<h1>CAGEAID</h1>
<h3><a href="tools/cageaid" data-ajax="false">badref</a></h3>
<h3><a href="tools/cageaid?ref=<?php echo time();?>" data-ajax="false">base</a></h3>
<h3><a href="tools/cageaid?ref=<?php echo time();?>&lang=en" data-ajax="false">english</a></h3>
<h3><a href="tools/cageaid?ref=<?php echo time();?>&lang=es" data-ajax="false">spanish</a></h3>
<h3><a href="tools/cageaid?ref=<?php echo time();?>&lang=en" data-ajax="false">self</a></h3>
<h3><a href="tools/cageaid?ref=<?php echo time();?>&lang=en&proxy=translator" data-ajax="false">proxy</a></h3>

<h1>ORT</h1>
<h3><a href="tools/ort" data-ajax="false">badref</a></h3>
<h3><a href="tools/ort?ref=<?php echo time();?>" data-ajax="false">base</a></h3>
<h3><a href="tools/ort?ref=<?php echo time();?>&lang=en" data-ajax="false">english</a></h3>
<h3><a href="tools/ort?ref=<?php echo time();?>&lang=es" data-ajax="false">spanish</a></h3>
<h3><a href="tools/ort?ref=<?php echo time();?>&lang=en" data-ajax="false">self</a></h3>
<h3><a href="tools/ort?ref=<?php echo time();?>&lang=en&proxy=translator" data-ajax="false">proxy</a></h3>

<h1>PHQ9</h1>
<h3><a href="tools/phq9" data-ajax="false">badref</a></h3>
<h3><a href="tools/phq9?ref=<?php echo time();?>" data-ajax="false">base</a></h3>
<h3><a href="tools/phq9?ref=<?php echo time();?>&lang=en" data-ajax="false">english</a></h3>
<h3><a href="tools/phq9?ref=<?php echo time();?>&lang=es" data-ajax="false">spanish</a></h3>
<h3><a href="tools/phq9?ref=<?php echo time();?>&lang=en" data-ajax="false">self</a></h3>
<h3><a href="tools/phq9?ref=<?php echo time();?>&lang=en&proxy=translator" data-ajax="false">proxy</a></h3>

</div>
@stop