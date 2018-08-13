<h2><?php echo $title; ?></h2>
<div class="alert alert-danger"> <?php echo validation_errors(); ?> </div>

<?php echo form_open('users/register'); ?>

 <div class="form-group">
  <label for="name">Name </label>
  <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
</div>

<div class="form-group">
 <label for="zipCode">ZipCode </label>
 <input type="text" class="form-control" name="zipCode" placeholder="Enter Your ZipCode">
</div>

<div class="form-group">
 <label for="email">Email </label>
 <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
</div>

<div class="form-group">
 <label for="username">username </label>
 <input type="text" class="form-control" name="username" placeholder="Enter Your username">
</div>

<div class="form-group">
 <label for="password">Password </label>
 <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
</div>

<div class="form-group">
 <label for="confirmPassword">Confirm Passowrd </label>
 <input type="text" class="form-control" name="confirmPassword" placeholder="Confirm Password">
</div>

<div class="form-group">

 <input type="submit" class="btn btn-primary" value="Submit">
</div>

</form>
