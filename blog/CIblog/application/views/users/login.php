
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1 class="text-center"><?php echo $title; ?> </h1>
<?php echo form_open('users/login'); ?>

 <div class="form-group">
  <input type="text" class="form-control" name="username" placeholder="Enter username" required autofocus>
</div>

<div class="form-group">
 <input type="password" class="form-control" name="password" placeholder="Enter Password" required autofocus>
</div>


<div class="form-group">

 <input type="submit" class="btn btn-primary btn-block" value="login">
   </div>
</div>
</div>
</form>
