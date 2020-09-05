<div class="row">
        <div class="col-xs-1"></div>

        <div class="col-xs-10">
           <form class="form-horizontal" method="post" enctype="multipart/form-data" responsive>
				 <div class="card-body">
				 	<div class="form-group row">
						<div class="col-sm-3 col-xs-1"></div>
						<div class="col-sm-6 col-xs-10">
						

							<div class="form-group has-feedback">
						   	  <label for="mp_type" class="center">Manpower Type<b style="color:red; font-size: 20px;"> *</b></label>
						      <select id="mp_type" class="form-control sel select2" name="<?=$data['field'][0];?>" multiple="multiple" data-placeholder=" Select Manpower/s">
						        <option value="<?=isset($_POST[$data['field'][0]]) ? $_POST[$data['field'][0]]: $data['fetch'][$data['field'][0]];?>" label="--Please choose an option--" required>
						        </option>
							        <?php foreach ($data['manpower'] as $key => $value) {
					                  if ($key == $data['fetch'][$data['field'][0]]){
					                    $selected = "selected=\"selected\""; }
					                  else {
					                    $selected = ($data['fetch'][$data['field'][0]]==$key) ? 'selected':'';
					                  }
					                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
					                } ?> 
						      </select>
						    </div>

						   
							<div class="form-group has-feedback">
								<label class="center">First Name<b style="color:red; font-size: 20px;"> *</b></label>
							    <input type="text" class="form-control is is" placeholder="First Name" name="<?=$data['field'][1];?>"  value="<?=isset($_POST[$data['field'][1]]) ? $_POST[$data['field'][1]]: $data['fetch'][$data['field'][1]];?>" required>
							</div>

							<div class="form-group has-feedback">
								<label class="center">Middle Name</label>
							    <input type="text" class="form-control is is" placeholder="Middle Name(Optional)" name="<?=$data['field'][2];?>"  value="<?=isset($_POST[$data['field'][2]]) ? $_POST[$data['field'][2]]: $data['fetch'][$data['field'][2]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Last Name<b style="color:red; font-size: 20px;"> *</b></label>
							    <input type="text" class="form-control is is" placeholder="Last Name" name="<?=$data['field'][3];?>"  value="<?=isset($_POST[$data['field'][3]]) ? $_POST[$data['field'][3]]: $data['fetch'][$data['field'][3]];?>" required>
							</div>

							<div class="form-group has-feedback">
								<label class="center">CEC Accreditation Number</label>
							    <input type="text" class="form-control is" placeholder="CEC Accreditation Number" name="<?=$data['field'][4];?>"  value="<?=isset($_POST[$data['field'][4]]) ? $_POST[$data['field'][4]]: $data['fetch'][$data['field'][4]];?>">
							</div>

							<div class="form-group has-feedback">
						   	  <label for="cn" class="center">Company/Contractor Name<b style="color:red; font-size: 20px;"> *</b></label>
						      <select id="cn" class="form-control sel" name="<?=$data['field'][5];?>" >
						        <option value="<?=isset($_POST[$data['field'][5]]) ? $_POST[$data['field'][5]]: $data['fetch'][$data['field'][5]];?>" label="--Please choose an option--" required>
						        </option>
							        <?php foreach ($data['contractor'] as $key => $value) {
					                  if ($key == $data['fetch'][$data['field'][5]]){
					                    $selected = "selected=\"selected\""; }
					                  else {
					                    $selected = ($data['fetch'][$data['field'][5]]==$key) ? 'selected':'';
					                  }
					                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
					                } ?> 
						      </select>
						    </div>

	
							<div class="row">
							    <div class="col-xs-2"></div>
							    <div class="col-xs-8">
							      <button type="submit" name="submit" title="<?=$data['btn_name'];?>" class="btn btn-primary btn-block btn-log">
							        <b>Submit</b>
							      </button>
							    </div>
							    <div class="col-xs-2"></div>
							</div>

						</div>

						<div class="col-sm-3 col-xs-1"></div>

					</div>
				</div>
			</form><br>
        </div>
        
        <div class="col-xs-1"></div>
    </div>


