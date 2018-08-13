<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url()?>asset/css/bootstrap.css">
    <link rel='stylesheet' href="<?= base_url()?>asset/css/font-awesome.min.css" />
    <link rel='stylesheet' href="<?= base_url()?>asset/css/style.css" />

    <title></title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://cdn.ckeditor.com/4.7.1/basic/ckeditor.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">

      <div class="container">

        <div class="navbar-brand">

        </div>


        <div class="navbar-link">

          <span class="navbar-brand label-info" ><?php echo  $this->session->userdata('username')?></h3></span>

          <a class="navbar-brand" href="<?= base_url();?>posts">CIBLOG</a>
        </div>

        <div id="navbar">
          <ul class="nav navbar-nav">

            <li><a href="<?= base_url();?>about">About</a></li>
            <li><a href="<?= base_url();?>posts">Blog</a></li>
            <li><a href="<?= base_url();?>categories">categories</a></li>

          </ul>



            <!-- <ul class="nav navbar-nav navbar-right">
              <li><a href="<?= base_url();?>barcode/create">Create barcode</a></li>

            </ul> -->
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?= base_url();?>users/login">login</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?= base_url();?>users/register">Sign Up</a></li>
            </ul>

        <?php endif; ?>

    <?php if($this->session->userdata('logged_in')) : ?>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url();?>users/logout">logout</a></li>
      </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= base_url();?>posts/create">Create Post</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= base_url();?>categories/create">Create Category</a></li>
          </ul>
        </ul>


<?php endif; ?>

        </div>
      </div>
    </nav>



    <div class="container">


<?php if($this->session->flashdata('user_registered')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
<?php endif;?>

<?php if($this->session->flashdata('post_created')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
<?php endif;?>

<?php if($this->session->flashdata('post_updated')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
<?php endif;?>

<?php if($this->session->flashdata('category_created')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
<?php endif;?>

<?php if($this->session->flashdata('post_deleted')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
<?php endif;?>


<?php if($this->session->flashdata('user_loggedin')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
<?php endif;?>

<?php if($this->session->flashdata('user_loggedin_failed')) : ?>
  <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_loggedin_failed').'</p>'; ?>
<?php endif;?>

<?php if($this->session->flashdata('user_loggedout')) : ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
<?php endif;?>
