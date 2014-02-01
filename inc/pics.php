

<?php require('../includes/config.php'); ?>


	<div id="wrapper">

		<h1>Pictures</h1>
		<hr />

		<?php
			try {

				$stmt = $db->query('SELECT picID, picTitle, picThumbURL, picURL FROM pictures ORDER BY picID DESC');
				while($row = $stmt->fetch()){
					
					echo '<div id="pic-wrapper">';		
					echo '<a href="'.$row['picURL'].'" data-lightbox="album" title="'.$row['picTitle'].'" class="pic-box">
								<img src="'.$row['picThumbURL'].'" alt="thumbnail" /></a>';				
					echo '</div>';

				}

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>

	</div>

