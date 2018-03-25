<?php 

if(isset($_POST['send'])){
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$dateofbirth = $_POST['dateofbirth'];
	$adress = $_POST['adress'];
	$companies = $_POST['Company[]'];
	$jobs = $_POST['JobTitle[]'];
	$jobdescriptions = $_POST['JobDescription[]'];
	$scoala = $_POST['scoala'];
	$specializarescoala = $_POST['specializarescoala'];
	$liceu = $_POST['liceu'];
	$specializareliceu = $_POST['specializareliceu'];
	$facultate = $_POST['facultate'];
	$specializarefacultate = $_POST['specializarefacultate'];

	$abilitati = $_POST['abilitati[]'];
	$abilitatidobandite = $_POST['abilitatidobandite{}'];


	 echo "<!doctype html>
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
				<h2 class='h2'>".$firstName." " .$lastName."</h2>
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
				<p class='text-center'>".$dateofbirth."</p>
				<p class='text-center'>".$email."</p>
				</div>
				</div>
			
				<div class='row'>
				<div col-md-4>
				<h2><p class='text-center'>Experienta profesionala</p></h2>
				</div>
				</div>
				</br>
			
				foreach($companies as $company){
												foreach($jobs as $job){
													foreach($jobdescriptions as $JobDescription){
														<div class='row'>
												<div class='col-md-4'>
								<h5><p class='text-center'>$company</p> <small><p class='text-center'>01.10.2016 - 15.09.2017</p></small></h5>
								</div>
								<div class='col-md-8'>
								<h5><p class='text-center'>$job</p></h5>
								<small><p class='text-center'>testarea manuala de extensii Joomla</p></small>
								<small><p class='text-center'>updatarea sau modificarea extensiilor de pe Demo-server(platforma online in care clientul poate testa
									produsul fara sa il cumpere)</p></small>
								<small><p class='text-center'>alcatuirea sau actualizarea documentatiei pentru produsele noi/existente</p></small>
								<small><p class='text-center'>aprofundarea cunostiintelor de PHP</p></small>
								</div>
								</div>
									}
								}}
				
			
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
				<p class='text-center'>$facultate</p>
				<small><p class='text-center'>$specializarefacultate</p></small>
				</div>
				</div>
			
				<div class='row'>
				<div class='col-md-4'>
				<p class='text-center'>
				2009-2014
				</p>
				</div>
				<div class='col-md-8'>
				<p class='text-center'>$liceu</p>
				<small><p class='text-center'>$specializareliceu</p></small>
				</div>
				</div>
			
				<div class='row'>
				<div class='col-md-4'>
				<p class='text-center'>
				2009-2014
				</p>
				</div>
				<div class='col-md-8'>
				<p class='text-center'>$scoala</p>
				<small><p class='text-center'>$specializarescoala</p></small>
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
				<p class='text-left'>Microsoft Office, JavaScript, HTML - nivel mediu, CSS - nivel mediu, PHP - nivel mediu, Laravel, GitHub</p>
				</div>
				</br>
			
				<div class='row'>
				<p class='text-left'><strong>Abilitati dobandite la locul de munca</strong></p>
				</div> 
				<div class='row'>
				<p class='text-left'>Microsoft Office, GitHub, bitbucket, joomla cms, joomla - mediu</p>
				</div>
			
				<div class='row'>
				<div class='col-md-4'><h2><p class='text-left'>Limbi straine</p></h2></div>
				</div>
				</br>
				<div class='row'>
				<p>Engleza - <small>Avansat</small></p>
				</div>
				<div class='row'>
				<p>Franceza - <small>Incepator</small></p>
				</div>
				<div class='row'>
				<p>Romana - <small>De aici</small></p>
				</div>
				</div>
			
			
				</div>
			
			
			
			
			
			
			
				<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
				<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
				<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
				</body>
				</html>";

}
?>