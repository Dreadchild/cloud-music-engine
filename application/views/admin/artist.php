
<?php if($edit){ ?>
<div class="col-md-4">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Artist</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST">
      <div class="box-body">
        <div class="form-group">
          <label for="artist">Artist</label>
          <input required type="text" class="form-control" id="artist" value="<?php echo $edit['artist']; ?>" name="artist" >
        </div>
        <div class="form-group">
          <label for="picture_small">Picture Small</label>
          <input required type="text" class="form-control" id="picture_small" value="<?php echo $edit['picture_small']; ?>" name="picture_small" >
        </div>
      <div class="form-group">
          <label for="picture_medium">Picture Medium</label>
          <input required type="text" class="form-control" id="picture_medium" value="<?php echo $edit['picture_medium']; ?>" name="picture_medium" >
        </div>
     
     <div class="form-group">
          <label for="picture_extra">Picture Extra</label>
          <input required type="text" class="form-control" id="picture_extra" value="<?php echo $edit['picture_extra']; ?>" name="picture_extra" >
        </div>
     
        
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</div>
<?php } ?>

<div class="col-md-<?php if($edit){ echo '8'; }else{ echo '12'; } ?>">
	<div class="box">
        <div class="box-header">
          <h3 class="box-title">Artists</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
			 <table data-source="<?php echo base_url(); ?>admin/music/artist" class="table-ajax table table-hover table-striped table-bordered" id="lyricsTable">
				<thead>
				  <tr> 					    
				    <th></th>                						    
            <th>Artist</th>               
            <th>Likes</th>                
				    <th>Crawled</th>    				    
				    <th style="width:24px"></th>    						    
				  </tr>
				</thead>
			<tbody>           
			</tbody>
			</table>
		</div>
	</div>
</div>

