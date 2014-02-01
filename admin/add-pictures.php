<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Add User</title>
 <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script src="../js/jQuery.js"></script>
</head>
<body>

<div id="wrapper">

	<?php include('menu.php');?>	

	<h2>Add picture</h2>

	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		//collect form data
		extract($_POST);

		//very basic validation
		if($picTitle ==''){
			$error[] = 'Anna kuvalle otsikko.';
		}

		if($picThumbURL ==''){
			$error[] = 'Anna kuvan thumbnailin osoite.';
		}		

		if($picURL == ''){
			$error[] = 'Anna kuvan osoite.';
		}

		

		if(!isset($error)){			

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO pictures (picTitle, picThumbURL, picURL) VALUES (:picTitle, :picThumbURL, :picURL)') ;
				$stmt->execute(array(					
					':picTitle' => $picTitle,
					':picThumbURL' => $picThumbURL,
					':picURL' => $picURL
				));

				//redirect to index page
				header('Location: pictures.php?action=added');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>

	<p>Muista lisätä oikean kokoinen thumbnail! Voit luoda kuvasta thumbnailin <a href="http://www.imageeditor.net/image_resizer.asp">TÄÄLLÄ</a>. Käytä seuraavia asetuksia: </p>
	<ol>
		<li>Height: 150px</li>
		<li>Width: 100px</li>
		<li>Ruksita "Constrain proportions"</li>
		<li>Tallenna kuva tietokoneelle</li>
		<li>Uploadaa kuva <a href="http://imgur.com/">IMGURLIIN</a> ja syötä thumbnailin osoite Thumbnail URL kenttään.</li>
		<li>Uploadaa myös oikean kokoinen kuva imgurliin ja syötä sen osoite picture URL kenttään.</li>
	</ol>	

	<form action='' method='post'>

		<p><label>Picture Title</label><br />
		<input type='text' name='picTitle' value='<?php if(isset($error)){ echo $_POST['picTitle'];}?>'></p>

		<p><label>Thumbnail URL</label><br />
		<input type='text' name='picThumbURL' value='<?php if(isset($error)){ echo $_POST['picThumbURL'];}?>'></p>

		<p><label>Picture URL</label><br />
		<input type='text' name='picURL' value='<?php if(isset($error)){ echo $_POST['picURL'];}?>'></p>

		
		
		<p><input type='submit' name='submit' value='Add Picture'></p>

	</form>

</div>
