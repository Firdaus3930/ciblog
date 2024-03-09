<h2>Register</h2>
<style>
body {
  background-image: url('https://img.freepik.com/free-vector/blue-curve-background_53876-113112.jpg?size=626&ext=jpg&ga=GA1.1.1395880969.1709164800&semt=ais');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" placeholder="Name">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email" placeholder="Email">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" name="username" placeholder="Username">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label>Confirmation Password</label>
		<input type="password" class="form-control" name="password2" placeholder="Confirmation Password">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>