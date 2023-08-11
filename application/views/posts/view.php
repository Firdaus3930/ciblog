<h2><?php echo $post['title']; ?></h2>
<body style="background-color:Aquamarine;">
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