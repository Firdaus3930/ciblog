<h2><?= $title; ?></h2>
<body style="background-color:00DE9E;">
<ul class="list-group">
<?php foreach($categories as $category) : ?>
	<li class="list-gorup-item"><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a></li>
<?php endforeach; ?>
</ul>