<?php include 'header.php';  ?>
<?php include 'parts/nuzzo-header.php'; ?>
<?php include 'parts/nuzzo-nav.php'; ?>
<div class="container-fluid">
	<div class="jumbotron jumbotron-fluid mt-3">
		<div class="container">
			<h1 id="test1" class="display-4">Fun with JQuery</h1>
			<p class="lead">Lets hope this is fun! Ready!</p>
			<a id="showbutton" class="btn btn-primary btn-lg pr-5 pl-5" role="button">GO!</a>
		</div>
	</div>

	<div class="card-columns my-3 invisible">  
		<div class="card mb-4 bg-dark">
			<div class="postpic">
				<img src="assets/img/land1.jpg" class="card-img zoom" alt="long exposure night sky">
			</div>
			<div class="card-body">
				<h5 class="card-title"><?php echo date('D, M dS Y'); ?></h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
			</div>
		</div>
      <div class="card mb-4 bg-dark">
			<div class="postpic">
				<img src="assets/img/land2.jpg" class="card-img zoom" alt="long exposure night sky">
			</div>
			<div class="card-body">
				<h5 class="card-title"><?php echo date('D, M dS Y'); ?></h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
			</div>
		</div>
     <div class="card mb-4 bg-dark">
			<div class="postpic">
				<img src="assets/img/port1.jpg" class="card-img zoom" alt="long exposure night sky">
			</div>
			<div class="card-body">
				<h5 class="card-title"><?php echo date('D, M dS Y'); ?></h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';  ?>
