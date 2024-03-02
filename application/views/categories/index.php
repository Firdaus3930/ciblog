<h2><?= $title; ?></h2>
<style>
body {
  background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20230415/pngtree-blue-background-and-wallpaper-hd-image-victor-free-vector-image_2422840.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<ul class="list-group">
<?php foreach($categories as $category) : ?>
	<li class="list-group-item"><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
		<?php if($this->session->userdata('user_id') == $category['user_id']): ?>
			<form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
			<div class="col-md-12 bg-light text-right">
			<button type="submit" class="btn btn-danger">DELETE</button>
			</div>
			</form>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>