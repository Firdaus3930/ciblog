<?php echo form_open('users/login'); ?>
<style>
body {
  background-image: url('https://img.freepik.com/free-vector/blue-curve-background_53876-113112.jpg?size=626&ext=jpg&ga=GA1.1.1395880969.1709164800&semt=ais');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1 class="text-center"><?php echo $title; ?></h1>
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
	</div>
	<button type="submit" class="btn btn-primary btn-block">Login</button>

</div>
<?php echo form_close(); ?>