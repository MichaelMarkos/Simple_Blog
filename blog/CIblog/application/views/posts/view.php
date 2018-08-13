<h2><?php echo $post['title'];?></h2>

<small class='post-date'><?php echo  $post['created_at'];?></small>
<img src="<?php echo site_url(); ?>asset/images/posts/<?php echo $post['post_image'] ;?>" width="250" height="250" />


<div class="post_body" >

<?php echo $post['body']; ?>

</div>

<hr>
check if this owner for post or no
<?php if($this->session->userdata('user_id')==$post['user_id']) :?>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<a class="btn btn-info" href='<?php echo base_url(); ?>/posts/Edit/<?php echo $post['slug']; ?>' > Edit </a>
<input type="submit" value="Delete" class="btn btn-danger" />

</form>
<?php endif; ?>



<hr>

<h3>comments</h3>

    <?php if($comment) : ?>

      <?php foreach ($comment as $comment) : ?>
        <div class="well">
      <h5><?php echo $comment['body']; ?> [by : <strong><?php echo $comment['name'];?></strong>]</h5>
    </div>
      <?php endforeach; ?>

    <?php else : ?>
<p> No Comments To Display </p>
<?php endif;?>

<hr>
<h3>Add Comment</h3>
<h5 class="text-danger"><?php  echo validation_errors(); ?></h5>
<?php echo form_open('/comment/create/'.$post['id']); ?>
    <div class="form-group">
      <label>Name :</label>
      <input type="text" name="name" class="form-control" />
    </div>

    <div class="form-group">
      <label>Email :</label>
      <input type="text" name="email" class="form-control" />
    </div>

    <div class="form-group">
      <label>Body :</label>
      <textarea type="text" name="body" class="form-control" /></textarea>
    </div>

    <input type="text" name="slug" hidden="hidden" value="<?php echo $post['slug'];?>"/>

    <input type="submit" class="btn btn-primary" value="submit"/>
</form>
<br><br><br>
