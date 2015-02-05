<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Opioid Risk Tool (ORT) </title>
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
<h1>Opioid Risk Tool</h1>

<form>
<div>
	<fieldset data-role="controlgroup">
		<legend>Your Family History of Substance Abuse</legend>
		<input type="checkbox" name="a-1v-2a" id="a-1v-2a">
		<label for="a-1v-2a">Alcohol</label>
		<input type="checkbox" name="a-1v-2b" id="a-1v-2b">
		<label for="a-1v-2b">Illegal Drugs</label>
		<input type="checkbox" name="a-1v-2c" id="a-1v-2c">
		<label for="a-1v-2c">Prescription Drugs</label>

	</fieldset>
</div>

<div>
	<fieldset data-role="controlgroup">
		<legend>Your Personal History of Substance Abuse</legend>
		<input type="checkbox" name="a-2v-2a" id="a-2v-2a">
		<label for="a-2v-2a">Alcohol</label>
		<input type="checkbox" name="a-2v-2b" id="a-2v-2b">
		<label for="a-2v-2b">Illegal Drugs</label>
		<input type="checkbox" name="a-2v-2c" id="a-2v-2c">
		<label for="a-2v-2c">Prescription Drugs</label>

	</fieldset>
</div>

<div>
	<fieldset data-role="controlgroup">
		<legend>Are you between 16 and 45 years old?</legend>
		<input type="checkbox" name="a-3v-2a" id="a-3v-2a">
		<label for="a-3v-2a">Yes</label>
		<input type="checkbox" name="a-3v-2b" id="a-3v-2b">
		<label for="a-3v-2b">No</label>
		</fieldset>
</div>

<div>
	<fieldset data-role="controlgroup">
		<legend>Any History of Preadolescent Sexual Abuse</legend>
		<input type="checkbox" name="a-4v-2a" id="a-4v-2a">
		<label for="a-4v-2a">Yes</label>
		<input type="checkbox" name="a-4v-2b" id="a-4v-2b">
		<label for="a-4v-2b">No</label>
		</fieldset>
</div>

<div>
	<fieldset data-role="controlgroup">
		<legend>Have you ever been diagnosed with?...</legend>
		<input type="checkbox" name="answer-5v-2a" id="answer-5v-2a">
		<label for="answer-5v-2a">Attention Deficit Disorder</label>
		<input type="checkbox" name="answer-5v-2b" id="answer-5v-2b">
		<label for="answer-5v-2b">Obsessive Compulsive Disorder</label>
		<input type="checkbox" name="answer-5v-2c" id="answer-5v-2c">
		<label for="answer-5v-2c">Bipolar Disorder</label>
		<input type="checkbox" name="answer-5v-2d" id="answer-5v-2d">
		<label for="answer-5v-2d">Schizophrenia</label>
		<input type="checkbox" name="answer-5v-2e" id="answer-5v-2e">
		<label for="answer-5v-2e">Depression</label>
	</fieldset>
</div>
<legend>Please Check for Accuracy before submitting</legend>
<button class="ui-btn ui-btn-b ui-corner-all">Submit</button>

</form>
</div>
</div>
</body>
</html>