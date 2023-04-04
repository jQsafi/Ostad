<?php
$post_id=$_GET['post'];
$post=$site_info['posts'][$post_id];
$categoris=$site_info['categories'];
?>
<div class="container">
<div class="row">
    <div class="col-lg-8 col-md-6 col-sm-12">
      <div cass="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
	  <div class="col-lg-12">
	  <h2><?=$post['title']?></h2>
			<div class="featured-post-image">
			<img src="<?=$post['featured_image']?>" alt="<?=$post['title']?>" class="img-fluid">
			</div>
			<div class="featured-post-content">
			<p><?=$post['description']?></p>
			</div>
		</div>
	  </div>
</div>
	<div class="col-lg-4 col-md-6 col-sm-12">
	<div class="recent-posts">
          <h3>Post Category</h3>
          <ul class="list-group">
          <?php
            foreach($categoris as $category)
            {
            ?>
            <li class="list-group-item"><a href="#"><?=$category?></a></li>
            <?php
            }
            ?>
          </ul>
        </div>
	</div>
</div>
    </div>
	
