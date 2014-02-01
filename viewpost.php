<?php require('includes/config.php'); 


$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();



//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: blogindex.php');
	exit;
}

?>
<?php include("inc/blogheader.php"); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<div id="wrapper">

		<h1>Blog</h1>
		<hr />
		<p><a href="blogindex.php">Blog Index</a></p>


		<?php	
			echo '<div class="view-post">';
				echo '<h1>'.$row['postTitle'].'</h1>';
				echo '<p>Julkaistu '.date('j'.'.'.'m'.'.'.'Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
		?>
		<div class="fb-like" data-href="https://www.facebook.com/hakala.hj" 
		data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
	</div>


<?php include("inc/footer.php"); ?>