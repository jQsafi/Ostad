<?php
$posts=$site_info['posts'];
$featered_post=$site_info['featured_post'];
$recent_post=$site_info['recent_post'];
?>
<section class="featured-post">
  <div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-12">
    <h3>Featured Posts</h3>
        <?php
        foreach($featered_post as $post_id)
        {
            $post=$posts[$post_id];
            ?>
                <div class="col-lg-12">
                <div class="featured-post-image">
                <img src="<?=$post['featured_image']?>" alt="<?=$post['title']?>" class="img-fluid">
                </div>
                <div class="featured-post-content">
                <h2><?=$post['title']?></h2>
                <p><?=excerpt($post['description'],100)?></p>
                <a href="?page=single&post=<?=$post_id?>" class="btn btn-primary">Read More</a>
                </div>
                </div>
            <?php
        }
        ?>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="recent-posts">
          <h3>Recent Posts</h3>
          <ul class="list-group">
          <?php
            foreach($recent_post as $post_id)
            {
            $post=$posts[$post_id];
            ?>
            <li class="list-group-item"><a href="?page=single&post=<?=$post_id?>"><?=excerpt($post['title'],20)?></a></li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
