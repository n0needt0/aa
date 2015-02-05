<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CAGE-AID</title>
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/_assets/css/jqm-demos.css">
	<script src="http://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="http://demos.jquerymobile.com/1.4.5/_assets/js/index.js"></script>
	<script src="http://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true">
<div role="main" class="ui-content jqm-content">
<a href>español</a>
<h2>John Doe <?php echo date("M.d.Y"); ?> </h2>
<h1>CAGE-AID</h1>

<form>
<div>
	<fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Have you ever felt you ought to cut down on your drinking or drug use? </legend>
        <input type="radio" name="radio-choice-h-1" id="radio-choice-h-1a" value="off">
        <label for="radio-choice-h-1a">Yes</label>
        <input type="radio" name="radio-choice-h-1" id="radio-choice-h-1b" value="off">
        <label for="radio-choice-h-1b">No</label>
    </fieldset>
</div>

<div>
	<fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Have people annoyed you by criticizing your drinking or drug use? </legend>
        <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2a" value="off">
        <label for="radio-choice-h-2a">Yes</label>
        <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2b" value="off">
        <label for="radio-choice-h-2b">No</label>
    </fieldset>
</div>

<div>
	<fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Have you felt bad or guilty about your drinking or drug use? </legend>
        <input type="radio" name="radio-choice-h-3" id="radio-choice-h-3a" value="off">
        <label for="radio-choice-h-3a">Yes</label>
        <input type="radio" name="radio-choice-h-3" id="radio-choice-h-3b" value="off">
        <label for="radio-choice-h-3b">No</label>
    </fieldset>
</div>


<div>
	<fieldset data-role="controlgroup" data-type="horizontal">
        <legend>Have you ever had a drink or used drugs first thing in the morning to steady
your nerves or to get rid of a hangover (eye-opener)?  </legend>
        <input type="radio" name="radio-choice-h-4" id="radio-choice-h-4a" value="off">
        <label for="radio-choice-h-4a">Yes</label>
        <input type="radio" name="radio-choice-h-4" id="radio-choice-h-4b" value="off">
        <label for="radio-choice-h-4b">No</label>
    </fieldset>
</div>

<legend>Please Check for Accuracy before submitting</legend>
<button class="ui-btn ui-btn-b ui-corner-all">Submit</button>

</form>
</div>
</div>
</body>
</html>