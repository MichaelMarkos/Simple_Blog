<h2><?php echo $title;?></h2>

<?php  echo validation_errors(); ?>
<?php echo form_open_multipart('categories/create'); ?>
  <div class="form-group">
    <label > Category Name : </label>
    <input type="text" name="category_name" class="form-control"  placeholder="Add category">

      </div>
<button type="submit" class="btn btn-default" >Add </button>
</form>
