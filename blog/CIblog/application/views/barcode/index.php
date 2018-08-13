<h2><?php echo $title;?></h2>

<div class="alert alert-success" style="display:none">

</div>
<form id="myForm" action="" method="post">
  <div class="form-group">
    <label > barcode  : </label>
    <input type="text" name="barcode_name" class="form-control"  placeholder="Add barcode">

      </div>
<button type="submit" class="btn btn-default" id="AddBarcode">Add </button>
</form>


  <table class="table table-bordered table-responsive table-striped">
        <thead>
          <tr>
            <td>Text Barcode</td>
            <td>Barcode Img</td>
            <td>Created at</td>
            <td >Action</td>
          </tr>
        </thead>

        <tbody id="showdata">

        </tbody>

      </table>


  <script>

      $(function(){

  ShowAllbarcode();
  //add new


      $('#AddBarcode').click(function() {

  var data=$('#myForm').serialize();

          //validate form
          var barcode_name=$('input[name=barcode_name]');

          var result='';

          if(barcode_name.val()=='')
          {
            barcode_name.parent().addClass('has-error');
          }
          else {
            barcode_name.parent().removeClass('has-error');
            result+=1;
          }



          if(result=='1')
          {
            $.ajax({
              url: '<?php echo base_url();?>barcode/create',
              type:'ajax',
              method: 'post',
              dataType:'json',
              data: data,
              async:false,
              success:function(response)
              {
                if(response.success)
                {
                  $('.alert-success').html("Employee Added successfully").fadeIn().delay(4000).fadeOut('slow');
                  ShowAllbarcode();
                }
                else {
                  alert('error');
                }
              },
              error:function() {
                alert('coud not add new employee');
              }
            });

          }

      });


        //function

          function ShowAllbarcode()
          {
            $.ajax({
              type: 'ajax',
              url: '<?php echo base_url(); ?>barcode/ShowAllbarcode',
              dataType: 'json',
              async:false,
              success:function(data)
              {
                var element='';
                var i;
                for (i = 0; i < data.length; i++) {
                    element+='<tr>'+
                      '<td>'+data[i].barcode_name+'</td>'+
                      '<td> <img src="<?php echo site_url(); ?>asset/images/barcode/'+ data[i].imgbarcode +'" width="50" height="50" /></td>'+
                      '<td>'+data[i].created_at+'</td>'+
                      '<td width>'+
                        '<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'"> Edit </a>'+
                        '<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id+'"> Delete </a>'+

                      '</td>'+
                    '</tr>';
                }
                $('#showdata').html(element);
              },
              error:function()
              {
                alert("could not get data from database");
              }
            });

          }

      });

  </script>
