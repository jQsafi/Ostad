<?php
$posts=$site_info['posts'];
$categoris=$site_info['categories'];
?>
<div class="container">
<div class="row">
    <div class="col-lg-8 col-md-6 col-sm-12">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		<?php
		foreach($posts as $post_id=>$post)
		{
		?>
        <div class="col">
          <div class="card shadow-sm">
		  <img src="<?=$post['featured_image']?>" alt="<?=$post['title']?>" class="card-img-top" width="100%" height="225">
            <div class="card-body">
              <p class="card-text">
			  	<h5><?=excerpt($post['title'],20)?></h5>
				  <?=excerpt($post['description'],50)?>
			  </p>
			  <a href="?page=single&post=<?=$post_id?>" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
		<?php
		}
		?>
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
	
