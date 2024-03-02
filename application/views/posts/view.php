<h2><?php echo $post['title']; ?></h2>
<head>
<style>
body {
  background-image: url('https://img.freepik.com/free-vector/blue-curve-background_53876-113112.jpg?size=626&ext=jpg&ga=GA1.1.1395880969.1709164800&semt=ais');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</head>
<body>

<style>
.post-date{
	background:#f4f4f4;
	padding:4px;
	margin:3px 0;
	display:block;
}
</style>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br><br>
<div class="post-body">
	<?php echo $post['body']; ?>

</div>

<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
<hr>
	<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>">Edit</a>
	<?php echo form_open('posts/delete/'.$post['id']); ?>
		<input type="submit" value="delete" class="btn btn-danger">
	</form>
<?php endif; ?>