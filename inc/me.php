<?php require('../includes/config.php'); 


$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM me_post WHERE postID = :postID');
$stmt->execute(array(':postID' => 1));
$row = $stmt->fetch();

?>


	<div id="wrapper">

		<h1>About Me</h1>
		<hr />


		<?php	
			echo '<div class="view-post">';								
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
		?>
		
	</div>