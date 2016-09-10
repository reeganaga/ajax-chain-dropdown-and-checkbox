
<div class="form-group">
	<!-- <div class="label col-md-4"></div> -->
	<div class="col-md-6">
		<select name="kota" id="pilih_kota" onchange="tampil_kota()">
			<?php foreach ($kota as $row): ?>
				
			<option value="<?php echo $row->id; ?>"><?php echo $row->kota; ?></option>
			<?php endforeach ?>
			<option value="4">jogja</option>
			<option value="5">jogja</option>
		</select>
	</div>
	<div class="col-md-6">
		<input type="checkbox" name="star[]" value="1" onclick="tampil_kota()">satu<br>
		<input type="checkbox" name="star[]" value="2" onclick="tampil_kota()">satu<br>
		<input type="checkbox" name="star[]" value="3" onclick="tampil_kota()">satu<br>
		<input type="checkbox" name="star[]" value="4" onclick="tampil_kota()">satu<br>
		<input type="checkbox" name="star[]" value="5" onclick="tampil_kota()">satu<br>
		<input type="checkbox" name="star[]" value="6" onclick="tampil_kota()">satu<br>
	</div>
</div>
<div id="tampil_kota"></div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type="text/javascript">
function bintang() {

};

	function tampil_kota()
	{
		// ngambil data bintang
	    var checkboxes = document.getElementsByName('star[]');
	    // var checkboxes = document.forms[0].star;
	    var arr_bintang=[]

	    $("input:checkbox[name='star[]']:checked").each(function(){
		    arr_bintang.push($(this).val());
		});
		console.log("arrray = "+arr_bintang)
		
	    //ngambil data kota
		id_kota = document.getElementById('pilih_kota').value;
		console.log(id_kota)
		// console.log("arr_bintang = "+val)
		$.ajax({
			type:"POST",
			data:{arr_bintang:arr_bintang,id_kota:id_kota},
			/*change your custom url*/
			url:"<?php echo site_url(); ?>admins/users/cari_hotel_form_req/",
			success: function(response){
				$("#tampil_kota").html(response);
			},
			dataType:"html"
		});
		return false;
	}
</script>