<h2><?= $title ?></h2>
<body style="background-color:Aquamarine;">
<?php foreach ($posts as $post) : ?> 
	<h3><?php echo $post['title']; ?></h3>
	<br>
	<div class="row">
		<div class="col-md-3">
 			<img width="102%" height="32%" class="posts-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'];?>">
		</div>
		<div class="col-md-9">
			<small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small><br>
		<?php echo word_limiter($post['body'], 100); ?><br>
		<br>
		<p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p><br>
	</div>
	</div>
	
<?php endforeach; ?>