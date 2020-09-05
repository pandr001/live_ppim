

<style>
.resultImageWrapper {

display: none;

margin-top: 5px;
}
   .dragArea {
			background-color: #efefef;
			border: 2px dashed #cccccc;
			border-radius: 10px;
		}
		.dragArea.over {
			border-color: #00e64d;
			background-color: #ffffff;
		}

#myImg {
    box-shadow: rgba(0,0,0,0.4) 0 2px 5px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}


</style>

		
         

    <div class="row">
        <div class="col-xs-1"></div>

        <div class="col-xs-10">
           <form class="form-horizontal" method="post" enctype="multipart/form-data" responsive>
				 <div class="card-body">
				 	<div class="form-group row">
						<div class="col-xs-4"></div>
						<div class="col-xs-4">
							<div class="center">
							</div>
							<!-- <p>Contract Number -</p> -->
							<div class="form-group has-feedback">
								<label class="center">First Name</label>
							    <input type="text" class="form-control" placeholder="First Name" name="<?=$data['field'][1];?>" required value="<?=isset($_POST[$data['field'][1]]) ? $_POST[$data['field'][1]]: $data['fetch'][$data['field'][1]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Last Name</label>
							    <input type="text" class="form-control" placeholder="Last Name" name="<?=$data['field'][2];?>" required value="<?=isset($_POST[$data['field'][2]]) ? $_POST[$data['field'][2]]: $data['fetch'][$data['field'][2]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Email Address</label>
							    <input type="email" class="form-control" placeholder="Email Address" name="<?=$data['field'][3];?>" required value="<?=isset($_POST[$data['field'][3]]) ? $_POST[$data['field'][3]]: $data['fetch'][$data['field'][3]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Mobile Number</label>
							    <input type="text" class="form-control" placeholder="Mobile Number" name="<?=$data['field'][4];?>" required value="<?=isset($_POST[$data['field'][4]]) ? $_POST[$data['field'][4]]: $data['fetch'][$data['field'][4]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Street Address</label>
							    <input type="text" class="form-control" placeholder="Street Address" name="<?=$data['field'][5];?>" required value="<?=isset($_POST[$data['field'][5]]) ? $_POST[$data['field'][5]]: $data['fetch'][$data['field'][5]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">No. of Panels</label>
							    <input type="number" class="form-control" placeholder="No. of Panels" name="<?=$data['field'][6];?>" required value="<?=isset($_POST[$data['field'][6]]) ? $_POST[$data['field'][6]]: $data['fetch'][$data['field'][6]];?>">
							</div>


							<div class="form-group has-feedback">
								<label class="center">Capacity of Each Panel</label>
							    <input type="text" class="form-control" placeholder="Capacity of Each Panel" name="<?=$data['field'][7];?>" required value="<?=isset($_POST[$data['field'][7]]) ? $_POST[$data['field'][7]]: $data['fetch'][$data['field'][7]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Capacity System</label>
							    <input type="number" class="form-control" placeholder="Capacity System" name="<?=$data['field'][8];?>" required value="<?=isset($_POST[$data['field'][8]]) ? $_POST[$data['field'][8]]: $data['fetch'][$data['field'][8]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Inverter Capacity</label>
							    <input type="number" class="form-control" placeholder="Inverter Capacity" name="<?=$data['field'][9];?>" required value="<?=isset($_POST[$data['field'][9]]) ? $_POST[$data['field'][9]]: $data['fetch'][$data['field'][9]];?>">
							</div>


			               <div class="form-group has-feedback">
						    <label class="center">Roof Type</label>
						      <select id="roof_type" class="form-control" name="<?=$data['field'][10];?>" required>
						        <option value="<?=isset($_POST[$data['field'][10]]) ? $_POST[$data['field'][10]]: $data['fetch'][$data['field'][10]];?>" label="--Please choose an option--">
						        </option>
							        <?php foreach ($data['roof_type'] as $key => $value) {
					                  if ($key == $data['fetch'][$data['field'][10]]){
					                    $selected = "selected=\"selected\""; }
					                  else {
					                    $selected = ($data['fetch'][$data['field'][10]]==$key) ? 'selected':'';
					                  }
					                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
					                } ?> 
						      </select>
						    </div>
						    <div> 

							<div class="form-group has-feedback">
								<label class="center">Metre</label>
							    <input type="number" class="form-control" placeholder="Metre" name="<?=$data['field'][11];?>" required value="<?=isset($_POST[$data['field'][11]]) ? $_POST[$data['field'][11]]: $data['fetch'][$data['field'][11]];?>">
							</div>

							<div class="form-group has-feedback">
							<!--(bottom three options of house type) -->
								<label class="center">Roof Height</label>
							    <input type="number" class="form-control" placeholder="Roof Height" name="<?=$data['field'][12];?>" required value="<?=isset($_POST[$data['field'][12]]) ? $_POST[$data['field'][12]]: $data['fetch'][$data['field'][12]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Tilt Frame</label>
							    <input type="number" class="form-control" placeholder="Tilt Frame" name="<?=$data['field'][13];?>" required value="<?=isset($_POST[$data['field'][13]]) ? $_POST[$data['field'][13]]: $data['fetch'][$data['field'][13]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Split Array</label>
							    <input type="number" class="form-control" placeholder="Split Array" name="<?=$data['field'][14];?>" required value="<?=isset($_POST[$data['field'][14]]) ? $_POST[$data['field'][14]]: $data['fetch'][$data['field'][14]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Main Switch</label>
							    <input type="number" class="form-control" placeholder="Main Switch" name="<?=$data['field'][15];?>" required value="<?=isset($_POST[$data['field'][15]]) ? $_POST[$data['field'][15]]: $data['fetch'][$data['field'][15]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Switch Board Upgrade</label>
							    <input type="number" class="form-control" placeholder="Switch Board Upgrade" name="<?=$data['field'][16];?>" required value="<?=isset($_POST[$data['field'][16]]) ? $_POST[$data['field'][16]]: $data['fetch'][$data['field'][16]];?>">
							</div>
							<div class="form-group has-feedback">
								<label class="center">NMI</label>
							    <input type="number" class="form-control" placeholder="NMI" name="<?=$data['field'][17];?>" required value="<?=isset($_POST[$data['field'][17]]) ? $_POST[$data['field'][17]]: $data['fetch'][$data['field'][17]];?>">
							</div>

							<div class="form-group has-feedback">
								<label for="addn">Additional Notes</label><br>	
								<textarea id="addn" type="text" style="resize:none; width:100%;" rows="5" cols="30" maxlength="1000" size="1000" name="<?=$data['field'][18];?>" class="" required>
								<?=isset($_POST[$data['field'][18]]) ? $_POST[$data['field'][18]]: $data['fetch'][$data['field'][18]];?></textarea>
							</div>

							<div class="form-group has-feedback">
								<label class="center">Installer Company</label>
							    <input type="text" class="form-control" placeholder="Installer Company" name="<?=$data['field'][19];?>" required value="<?=isset($_POST[$data['field'][19]]) ? $_POST[$data['field'][19]]: $data['fetch'][$data['field'][19]];?>">
							</div>
							<div class="form-group has-feedback">
								<label class="center">Meter Number</label>
							    <input type="number" class="form-control" placeholder="Meter Number" name="<?=$data['field'][20];?>" required value="<?=isset($_POST[$data['field'][20]]) ? $_POST[$data['field'][20]]: $data['fetch'][$data['field'][20]];?>">
							</div>
						    <div class="form-group has-feedback">
						      <label class="center">Job Type</label>
						      <select id="job_type" class="form-control sel" name="<?=$data['field'][21];?>" required>
						        <option value="<?=isset($_POST[$data['field'][21]]) ? $_POST[$data['field'][21]]: $data['fetch'][$data['field'][21]];?>" label="--Please choose an option--" class="">
						        </option>
						        <?php foreach ($data['job_type'] as $key => $value) {
				                  if ($key == $data['fetch'][$data['field'][21]]){
				                    $selected = "selected=\"selected\""; }
				                  else {
				                    $selected = ($data['fetch'][$data['field'][21]]==$key) ? 'selected':'';
				                  }
				                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
				                } ?> 
						      </select>
						    </div>

						    <div class="form-group has-feedback">
								<label for="desc">Description</label><br>	
								<textarea type="text" style="resize:none; width:100%;" rows="5" cols="30" maxlength="1000" size="1000" name="<?=$data['field'][22];?>" class="" required>
								<?=isset($_POST[$data['field'][22]]) ? $_POST[$data['field'][22]]: $data['fetch'][$data['field'][22]];?></textarea>
							</div>
						  

						    <div class="form-group has-feedback">
						    	<label class="center">Sale Date</label>
						     	<input type="date" class="form-control" placeholder="Sale Date" name="<?=$data['field'][23];?>" required value="<?=isset($_POST['sdate']) ? $_POST['sdate']: $data['fetch'][$data['field'][23]];?>">
						    </div>


						    <div class="form-group has-feedback">
						    	<label class="center">Proposed Installation Date</label>
						     	<input type="date" class="form-control" placeholder="Proposed Installation Date" name="<?=$data['field'][24];?>" required value="<?=isset($_POST['idate']) ? $_POST['idate']: $data['fetch'][$data['field'][24]];?>">
						    </div>
			               
						   
						   	<div class="form-group has-feedback">
						      <label class="center">Customer Temperament</label>
						      <select id="cust_temp" class="form-control" name="<?=$data['field'][25];?>" required>
						        <option value="<?=isset($_POST['cust_temp']) ? $_POST['cust_temp']: $data['fetch']['ID_Priority'];?>" label="--Please choose an option--">
						        </option>
						        <?php foreach ($data['cust_temp'] as $key => $value) {
				                  if ($key == $data['fetch'][$data['field'][25]]){
				                    $selected = "selected=\"selected\""; }
				                  else {
				                    $selected = ($data['fetch'][$data['field'][25]]==$key) ? 'selected':'';
				                  }
				                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
				                } ?> 
						      </select>
						    </div>

						    <div class="form-group has-feedback">
								<label class="center">Is GST ?</label>
								<input type="checkbox" name="<?=$data['field'][26];?>" value="<?=isset($_POST[$data['field'][26]]) ? $_POST[$data['field'][26]]: $data['fetch'][$data['field'][26]];?>">
						    </div>
							<!--
						    <div class="form-group has-feedback">
								<label class="center">GST Document</label>
						     	<input type="file" class="form-control" placeholder="GST Document" name="<?=$data['field'][27];?>" required value="<?=isset($_POST[$data['field'][27]]) ? $_POST[$data['field'][27]]: $data['fetch'][$data['field'][27]];?>">
						     	<?=isset($_POST[$data['field'][27]]) ? $_POST[$data['field'][27]]: $data['fetch'][$data['field'][27]];?>
                  				<p class="help-block">Image file only, recommended size: 5mb.
                      			</p>
						    </div>

						    <div class="form-group has-feedback">
								<label class="center">GST File</label>
						     	<input type="file" class="form-control" placeholder="File Base" name="<?=$data['field'][28];?>" required value="<?=isset($_POST[$data['field'][28]]) ? $_POST[$data['field'][28]]: $data['fetch'][$data['field'][28]];?>">
						     	<?=isset($_POST[$data['field'][28]]) ? $_POST[$data['field'][28]]: $data['fetch'][$data['field'][28]];?>
						     	<p class="help-block">Image file only, recommended size: 5mb.
						    </div>
							-->
			
  <figure>		
	<div class="dragArea" style="width:160px; height:160px;">
	 <center>
	 <div class="resultImageWrapper">
	 <img src="" alt="Contract" id="myImg"  style="width:150px; height:150px;">
	 <input type="file" name="imageContract" id="image1">
     </div>
	</center>
	</div>
<figcaption>Contract</figcaption>
</figure>

  <figure>		
	<div class="dragArea2" style="width:160px; height:160px;">
	 <center>
	 <div class="resultImageWrapper2">
	 <img src="" alt="ProposedPlan" id="myImg2"  style="width:150px; height:150px;">
	 <input type="file" name="imageProposed" id="image2">
     </div>
	</center>
	</div>
<figcaption>Proposed Plan</figcaption>
</figure>


  <figure>		
	<div class="dragArea3" style="width:160px; height:160px;">
	 <center>
	 <div class="resultImageWrapper3">
	 <img src="" alt="Roof Shot" id="myImg3"  style="width:150px; height:150px;">
	 <input type="file" name="imageRoof" id="image3">
     </div>
	</center>
	</div>
<figcaption>Roof Shot</figcaption>
</figure>


  <figure>		
	<div class="dragArea4" style="width:160px; height:160px;">
	 <center>
	 <div class="resultImageWrapper4">
	 <img src="" alt="Switch Board" id="myImg4"  style="width:150px; height:150px;">
	 <input type="file" name="imageSwitch" id="image4">
     </div>
	</center>
	</div>
<figcaption>Switch Board</figcaption>
</figure>

  <figure>		
	<div class="dragArea5" style="width:160px; height:160px;">
	 <center>
	 <div class="resultImageWrapper5">
	 <img src="" alt="Other" id="myImg5"  style="width:150px; height:150px;">
	 <input type="file" name="imageOther" id="image5">
     </div>
	</center>
	</div>
<figcaption>Bills Or New Roof Layout</figcaption>
</figure>
	

							<div class="row">
							    <div class="col-xs-2"></div>
							    <div class="col-xs-8">
							      <button type="submit" name="submit" title="<?=$data['btn_name'];?>" class="btn btn-success btn-block btn-log">
							        <b>Submit</b>
							      </button>
							    </div>
							    <div class="col-xs-2"></div>
							</div>
						</div>
						<div class="col-xs-4"></div>
					</div>
				</div>
			</form><br>
        </div>
        
        <div class="col-xs-1"></div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>

<script>
	// Required for drag and drop file access
	jQuery.event.props.push('dataTransfer');
	$(function(){
		var dropTimer;
		var dropTarget = $('.dragArea');
		var dropTarget2 = $('.dragArea2');
		var dropTarget3 = $('.dragArea3');
		var dropTarget4 = $('.dragArea4');
		var dropTarget5 = $('.dragArea5');
		var fileInput = $('#image1');
		var fileInput2 = $('#image2');
		var fileInput3 = $('#image3');
		var fileInput4 = $('#image4');
		var fileInput5 = $('#image5');
		dropTarget.on("dragover", function(event) {
			clearTimeout(dropTimer);
			if (event.currentTarget == dropTarget[0]) {
				dropTarget.addClass('over');
			}
			return false; // Required for drop to work
		});
		dropTarget2.on("dragover", function(event) {
			clearTimeout(dropTimer);
			if (event.currentTarget == dropTarget2[0]) {
				dropTarget2.addClass('over');
			}
			return false; // Required for drop to work
		});
		dropTarget3.on("dragover", function(event) {
			clearTimeout(dropTimer);
			if (event.currentTarget == dropTarget3[0]) {
				dropTarget3.addClass('over');
			}
			return false; // Required for drop to work
		});
		dropTarget4.on("dragover", function(event) {
			clearTimeout(dropTimer);
			if (event.currentTarget == dropTarget4[0]) {
				dropTarget4.addClass('over');
			}
			return false; // Required for drop to work
		});
		dropTarget5.on("dragover", function(event) {
			clearTimeout(dropTimer);
			if (event.currentTarget == dropTarget5[0]) {
				dropTarget5.addClass('over');
			}
			return false; // Required for drop to work
		});
		dropTarget2.on('dragleave', function(event) {
			if (event.currentTarget == dropTarget2[0]) {
				dropTimer = setTimeout(function() {
					dropTarget2.removeClass('over');
				}, 200);
			}
		});
		dropTarget3.on('dragleave', function(event) {
			if (event.currentTarget == dropTarget3[0]) {
				dropTimer = setTimeout(function() {
					dropTarget3.removeClass('over');
				}, 200);
			}
		});
		dropTarget4.on('dragleave', function(event) {
			if (event.currentTarget == dropTarget4[0]) {
				dropTimer = setTimeout(function() {
					dropTarget4.removeClass('over');
				}, 200);
			}
		});
		dropTarget5.on('dragleave', function(event) {
			if (event.currentTarget == dropTarget5[0]) {
				dropTimer = setTimeout(function() {
					dropTarget5.removeClass('over');
				}, 200);
			}
		});
		dropTarget.on('dragleave', function(event) {
			if (event.currentTarget == dropTarget[0]) {
				dropTimer = setTimeout(function() {
					dropTarget.removeClass('over');
				}, 200);
			}
		});
		handleDrop = function(files){
			dropTarget.removeClass('over');
			var file = files[0];
            // var file = files[1]; 			// Multiple files can be dropped. Lets only deal with the "first" one.
			if (file.type.match('image.*')) {
				resizeImage(file, 1000, function(result) {
					$('#myImg').attr('src', result);
					$("input:file[id*=image1]").attr("value",file.name);
					 // $('#image1').val(result);
					  
				
					$('.resultImageWrapper').show();
				});
			} else {
				alert("That file wasn't an image.");
			}
		};
		handleDrop2 = function(files){
			dropTarget2.removeClass('over');
			var file = files[0];
            // var file = files[1]; 			// Multiple files can be dropped. Lets only deal with the "first" one.
			if (file.type.match('image.*')) {
				resizeImage(file, 1000, function(result) {
					$('#myImg2').attr('src', result);
				    $("input:file[id*=image2]").attr("value",file.name);
					$('.resultImageWrapper2').show();
				});
			} else {
				alert("That file wasn't an image.");
			}
		};
		handleDrop3 = function(files){
			dropTarget3.removeClass('over');
			var file = files[0];
            // var file = files[1]; 			// Multiple files can be dropped. Lets only deal with the "first" one.
			if (file.type.match('image.*')) {
				resizeImage(file, 1000, function(result) {
					$('#myImg3').attr('src', result);
				    $("input:file[id*=image3]").attr("value",file.name);
					$('.resultImageWrapper3').show();
				});
			} else {
				alert("That file wasn't an image.");
			}
		};
		handleDrop4 = function(files){
			dropTarget4.removeClass('over');
			var file = files[0];
            // var file = files[1]; 			// Multiple files can be dropped. Lets only deal with the "first" one.
			if (file.type.match('image.*')) {
				resizeImage(file, 1000, function(result) {
					$('#myImg4').attr('src', result);
					$("input:file[id*=image4]").attr("value",file.name);
				    $('.resultImageWrapper4').show();
				});
			} else {
				alert("That file wasn't an image.");
			}
		};
		handleDrop5 = function(files){
			dropTarget5.removeClass('over');
			var file = files[0];
            // var file = files[1]; 			// Multiple files can be dropped. Lets only deal with the "first" one.
			if (file.type.match('image.*')) {
				resizeImage(file, 1000, function(result) {
					$('#myImg5').attr('src', result);
					$("input:file[id*=image5]").attr("value",file.name);
				    $('.resultImageWrapper5').show();
				});
			} else {
				alert("That file wasn't an image.");
			}
		};
		dropTarget.on('drop', function(event) {
			event.preventDefault(); // Or else the browser will open the file
			handleDrop(event.dataTransfer.files);
		});
		dropTarget2.on('drop', function(event) {
			event.preventDefault(); // Or else the browser will open the file
			handleDrop2(event.dataTransfer.files);
		});
		dropTarget3.on('drop', function(event) {
			event.preventDefault(); // Or else the browser will open the file
			handleDrop3(event.dataTransfer.files);
		});
		dropTarget4.on('drop', function(event) {
			event.preventDefault(); // Or else the browser will open the file
			handleDrop4(event.dataTransfer.files);
		});
		dropTarget5.on('drop', function(event) {
			event.preventDefault(); // Or else the browser will open the file
			handleDrop5(event.dataTransfer.files);
		});
		
		
		fileInput.on('change', function(event) {
			handleDrop(event.target.files);
		});
				fileInput2.on('change', function(event) {
			handleDrop2(event.target.files);
		});
				fileInput3.on('change', function(event) {
			handleDrop3(event.target.files);
		});
				fileInput4.on('change', function(event) {
			handleDrop4(event.target.files);
		});
				fileInput5.on('change', function(event) {
			handleDrop5(event.target.files);
		});
		resizeImage = function(file, size, callback) {
			var fileTracker = new FileReader;
			fileTracker.onload = function() {
				var image = new Image();
				image.onload = function(){
					var canvas = document.createElement("canvas");
					/*
					if(image.height > size) {
						image.width *= size / image.height;
						image.height = size;
					}
					*/
					if(image.width > size) {
						image.height *= size / image.width;
						image.width = size;
					}
					var ctx = canvas.getContext("2d");
					ctx.clearRect(0, 0, canvas.width, canvas.height);
					canvas.width = image.width;
					canvas.height = image.height;
					ctx.drawImage(image, 0, 0, image.width, image.height);
					callback(canvas.toDataURL("image/png"));
				};
				image.src = this.result;
			}
			fileTracker.readAsDataURL(file);
			fileTracker.onabort = function() {
				alert("The upload was aborted.");
			}
			fileTracker.onerror = function() {
				alert("An error occured while reading the file.");
			}
		};
	});
	
	
</script>
