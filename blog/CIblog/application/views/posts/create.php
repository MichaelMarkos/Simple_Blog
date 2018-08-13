<h2><?php echo $title;?></h2>

<h5 class="text-danger"><?php  echo validation_errors(); ?></h5>
<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label >Title</label>
    <input type="text" name="title" class="form-control"  placeholder="Add Title">
      </div>
  <div class="form-group">
    <label >Body</label>
    <textarea type="text" id="editor1" name="body" class="form-control"  placeholder="Add Body">
    </textarea>
</div>

<div class="form-group">
<label>Category </label>
<select name="category_id" class="form-control">
    <?php foreach ($category as $cat): ?>

        <option value="<?php echo $cat['id']; ?>"> <?php echo $cat['name']; ?></option>
  <?php  endforeach ;?>
</select>

  </div>

  <div class="form-group">
  <label>Upload File  </label>
  <input name="userfile" type="file" size="20"/>
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
