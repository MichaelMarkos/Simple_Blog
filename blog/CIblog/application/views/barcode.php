<h2><?php echo $post['title'];?></h2>


<hr>

<?php echo form_open('/posts/set_barcode/'.$barcode['id']); ?>
<input type="text" value="Enter code" name="barcode" class="form-control" />
<img src="<?php echo site_url(); ?>asset/images/barcode/<?php echo $barcode['imgbarcode'] ;?>" width="250" height="250" />


<input type="submit" value="add Barcode" class="btn btn-info" />

</form>

<br><br><br>
