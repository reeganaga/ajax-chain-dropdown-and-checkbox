<div class="form-group">
	<label class="col-md-4">Pilih Hotel Favorit Anda</label>
	<div class="col-md-6">
		<?php 
		$style_hotel  = 'class="form-control input-sm" id="hotel_dropdown"';
		echo form_dropdown('hotel_dropdown',$hotel,'',$style_hotel);
		 ?>
	</div>
</div>