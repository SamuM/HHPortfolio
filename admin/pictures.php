<?php
//include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['delpic'])){ 	
	

		$stmt = $db->prepare('DELETE FROM pictures WHERE picID = :picID') ;
		$stmt->execute(array(':picID' => $_GET['delpic']));

		header('Location: pictures.php?action=deleted');
		exit;

	
} 

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Pictures</title>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <script language="JavaScript" type="text/javascript">
  function delpic(id, picTitle)
  {
	  if (confirm("Haluatko varmasti poistaa kuvan '" + picTitle + "'"))
	  {
	  	window.location.href = 'pictures.php?delpic=' + id;
	  }
  }
  </script>
</head>
<body>

	<div id="wrapper">

	<?php include('menu.php');?>

	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<h3>Picture '.$_GET['action'].'.</h3>'; 
	} 
	?>

	<table>
	<tr>
		<th>Title</th>
		<th>Pictures Thumbnail</th>
		<th>Thumbnail URL</th>
		<th>Picture URL</th>
		<th></th>
	</tr>
	<?php
		try {

			$stmt = $db->query('SELECT picID, picTitle, picThumbURL, picURL FROM pictures ORDER BY picID');
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td>'.$row['picTitle'].'</td>';
				echo '<td> <img src="'.$row['picThumbURL'].'" alt="Thumbnail" ></img></td>';
				echo '<td>'.$row['picThumbURL'].'</td>';
				echo '<td>'.$row['picURL'].'</td>';
				?>

				<td>
					<a href="edit-pictures.php?id=<?php echo $row['picID'];?>">Edit</a> 					
					<a href="javascript:delpic('<?php echo $row['picID'];?>','<?php echo $row['picTitle'];?>')">Delete</a>
					
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</table>

	<p><a href='add-pictures.php'>Add Picture</a></p>

</div>

</body>
</html>
