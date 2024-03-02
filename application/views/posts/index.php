<h2><?= $title ?></h2>
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
<?php foreach ($posts as $post) : ?> 
	<h3><?php echo $post['title']; ?></h3>
	<html>
<head>
<style>
	.post-thumb{
	width:100%;
}
</style>
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