<h2>Creat Your Repository Name</h2>
<style>
body {
  background-image: url('https://img.freepik.com/free-vector/blue-curve-background_53876-113112.jpg?size=626&ext=jpg&ga=GA1.1.1395880969.1709164800&semt=ais');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<?php echo form_open_multipart('categories/create'); ?>
	<div class="form-group">
		<br>
		<label>Name</label>
		<Label>(Please put your full name and name of your class at the end of your name)</label>
		<p class="text-danger">FOR EXAMPLE = MUHAMMAD FIRDAUS BIN NOORHISAM CS4B</p>
		<input type="text" class="form-control" name="name" placeholder="Enter name">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
