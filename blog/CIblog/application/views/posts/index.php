<h2><?php echo $title;?></h2>

<?php

foreach ($posts as $post) :?>

    <h3 class="text-info"><?php echo $post['title'] ;?></h3>
  <div class="row">

    <div class="col-md-3">

      <img src="<?php echo site_url(); ?>asset/images/posts/<?php echo $post['post_image'] ;?>" width="250" height="250" />

  </div>
  <div class="col-md-9">
  <small class='post-date'><?php echo $post['created_at']; ?> in<strong> <?php echo $post['name'];?></strong></small><br>
<?php  echo word_limiter($post['body'],60);?>

  <br><p><a class='btn btn-primary' href="<?php echo site_url('/posts/'.$post['slug'])?>"> Read more </a></p>
  </div>
</div>
</br></br>

<?php endforeach;?>
