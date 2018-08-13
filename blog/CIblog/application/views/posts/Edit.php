<h2><?php echo $title;?></h2>

<?php  echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
  <div class="form-group">
    <label >Title</label>
    <input type="text" name="id" hidden="hidden" value="<?php echo $posts['id'] ;?>" />
    <input type="text" name="title" class="form-control" value="<?php echo $posts['title'];?>"  placeholder="Add Title">
      </div>
  <div class="form-group">
    <label >Body</label>
    <textarea type="text" id="editor1" name="body" class="form-control"  placeholder="Add Body">
      <?php echo $posts['body'];?>
    </textarea>
  </div>

  <div class="form-group">
  <label>Category </label>
  <select name="category_id" class="form-control">
      <?php foreach ($category as $cat): ?>

          <option value="<?php echo $cat['id']; ?>"> <?php echo $cat['name']; ?></option>
    <?php  endforeach ;?>
  </select>
  <div class="form-group">
  <label>Upload File  </label>
  <input name="userfile" type="file" size="20"/>
    </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
