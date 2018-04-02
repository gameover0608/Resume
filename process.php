<?php 

if(isset($_POST['send'])){
	$firstName = isset($_POST['firstname']) ? filter_var($_POST['firstname'],FILTER_SANITIZE_STRING) : '';
	$lastName = isset($_POST['lastname']) ? filter_var($_POST['lastname'],FILTER_SANITIZE_STRING) : '';
	$email = isset($_POST['email']) ? filter_var($_POST['email'],FILTER_SANITIZE_EMAIL) : '';
	$dateofbirth = isset($_POST['dateofbirth']) ? $_POST['dateofbirth'] : '';
	$adress = isset($_POST['adress']) ? filter_var($_POST['adress'],FILTER_SANITIZE_STRING) : '';

	$companies = isset($_POST['Company']) ? filter_var($_POST['Company'],FILTER_SANITIZE_STRING) : '';
	$jobs = isset($_POST['JobTitle']) ? filter_var($_POST['JobTitle'],FILTER_SANITIZE_STRING): '';
	$jobdescriptions = isset($_POST['JobDescription']) ? filter_var($_POST['JobDescription'],FILTER_SANITIZE_STRING) : '';

	$scoala = isset($_POST['scoala']) ? filter_var($_POST['scoala'],FILTER_SANITIZE_STRING) : '';
	$specializarescoala = isset($_POST['specializarescoala']) ? filter_var($_POST['specializarescoala'],FILTER_SANITIZE_STRING) : '';
	$liceu = isset($_POST['liceu']) ? filter_var($_POST['liceu'],FILTER_SANITIZE_STRING) : '';
	$specializareliceu = isset($_POST['specializareliceu']) ? filter_var($_POST['specializareliceu'],FILTER_SANITIZE_STRING) : '';
	$facultate = $_POST['facultate'];
	$specializarefacultate = isset($_POST['specializarefacultate']) ? filter_var($_POST['specializarefacultate'],FILTER_SANITIZE_STRING) : '';

	$abilitati = isset($_POST['abilitati']) ? filter_var($_POST['abilitati'],FILTER_SANITIZE_STRING) : '';
	$abilitatidobandite = isset($_POST['abilitatidobandite']) ? filter_var($_POST['abilitatidobandite'],FILTER_SANITIZE_STRING) : '';

	$limbistraine = isset($_POST['limbistraine']) ? filter_var($_POST['limbistraine'],FILTER_SANITIZE_STRING) : '';
	$nivellimbi = isset($_POST['nivellimba']) ? filter_var($_POST['nivellimba'],FILTER_SANITIZE_STRING) : '';

	
	

}
?>

<!doctype html>
<html lang='en'>
<head>
	<!-- Required meta tags -->
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

	<!-- Bootstrap CSS -->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

	<title>Your CV</title>
</head>
<body>
	<div class='container'>
		<div class='row'>
			
			<div class='col-md-4'>
				<img src='poza.jpg' class='img-rounded' alt='Cinque Terre' width='200' height='200' style='display:block;margin-right: auto;margin-left: auto;'>
			</div>
			<div class='col-md-4'>
				<h2 class='h2'><?php echo $firstName ." ". $lastName; ?></h2>
				<h3>23 ani, necasatorit</h3>
			</div>
			
		</div>

		<div class='row'>
			<div class='col-md-4'>
				<h2><p class='text-center'>Date Contact</p></h2>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-12 '>
				<p class='text-center'><?php echo $dateofbirth; ?></p>
				<p class='text-center'><?php echo $email;?></p>
				<p class="text-center"><?php echo $adress; ?></p>
			</div>
		</div>

		<div class='row'>
			<div col-md-4>
				<h2><p class='text-center'>Experienta profesionala</p></h2>
			</div>
		</div>
	</br>



	<?php
	for($i=0;$i<count($companies);$i++){
		echo "<div class='row'>
		<div class='col-md-4'>
		<h5><p class='text-center'>{$companies[$i]}</p> <small><p class='text-center'>01.10.2016 - 15.09.2017</p></small></h5>
		</div>
		<div class='col-md-8'>
		<h5><p class='text-center'>{$jobs[$i]}</p></h5>
		<small><p class='text-center'>{$jobdescriptions[$i]}</p></small>
		
		</div>
		</div>";
	}
	?>
	
	

	



	<div class='row'>
		<div col-md-4>
			<h2><p class='text-center'>Educatie</p></h2>
		</div>
	</div>
</br>



<div class='row'>
	<div class='col-md-4'>
		<p class='text-center'>
			2013-2017
		</p>
	</div>
	<div class='col-md-8'>
		<p class='text-center'><?php echo $facultate ; ?></p>
		<small><p class='text-center'><?php echo $specializarefacultate ; ?></p></small>
	</div>
</div>

<div class='row'>
	<div class='col-md-4'>
		<p class='text-center'>
			2009-2014
		</p>
	</div>
	<div class='col-md-8'>
		<p class='text-center'><?php echo $liceu; ?></p>
		<small><p class='text-center'><?php echo $specializareliceu; ?> </p></small>
	</div>
</div>

<div class='row'>
	<div class='col-md-4'>
		<p class='text-center'>
			2009-2014
		</p>
	</div>
	<div class='col-md-8'>
		<p class='text-center'><?php echo $scoala;?></p>
		<small><p class='text-center'><?php echo $specializarescoala; ?> </p></small>
	</div>
</div>

<div class='row'>
	<div class='col-md-4'><h2>Abilitati</h2></div>
</div>
</br>

<div class='row'>
	<p class='text-left'><strong>Abilitati Generale</strong></p>
</div>
<div class='row'>
	<p class='text-left'><?php foreach($abilitati as $ability){ echo $ability." ";} ?></p>
</div>
</br>

<div class='row'>
	<p class='text-left'><strong>Abilitati dobandite la locul de munca</strong></p>
</div> 
<div class='row'>
	<p class='text-left'><?php foreach($abilitatidobandite as $dobandite){ echo $dobandite." ";} ?></p>
</div>

<div class='row'>
	<div class='col-md-4'><h2><p class='text-left'>Limbi straine</p></h2></div>
</div>
</br>

<?php 
for($i=0;$i<count($limbistraine);$i++){
	echo "<div class='row'>
	<p>{$limbistraine[$i]} - <small>{$nivellimbi[$i]}</small></p>
	</div>

	";
}
?>




</div>







<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
</body>
</html>