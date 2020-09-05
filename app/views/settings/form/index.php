<div class="row">
        <div class="col-xs-1"></div>

        <div class="col-xs-10">
           <form class="form-horizontal" method="post" enctype="multipart/form-data" responsive>
				 <div class="card-body">
				 	<div class="form-group row">
						<div class="col-sm-3 col-xs-1"></div>
						<div class="col-sm-6 col-xs-10">
						

							<div class="form-group has-feedback">
						   	  <label for="mp_type" class="center">Setting Type<b style="color:red; font-size: 20px;"> *</b></label>
						      <select id="mp_type" class="form-control sel" name="<?=$data['field'][2];?>" >
						        <option value="<?=isset($_POST[$data['field'][2]]) ? $_POST[$data['field'][2]]: $data['fetch'][$data['field'][2]];?>" label="--Please choose an option--" required>
						        </option>
							        <?php foreach ($data['type'] as $key => $value) {
					                  if ($key == $data['fetch'][$data['field'][2]]){
					                    $selected = "selected=\"selected\""; }
					                  else {
					                    $selected = ($data['fetch'][$data['field'][2]]==$key) ? 'selected':'';
					                  }
					                  echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
					                } ?> 
						      </select>
						    </div>

						   
							<div class="form-group has-feedback">
								<label class="center">Name<b style="color:red; font-size: 20px;"> *</b></label>
							    <input type="text" class="form-control is is" placeholder="Name" name="<?=$data['field'][1];?>"  value="<?=isset($_POST[$data['field'][1]]) ? $_POST[$data['field'][1]]: $data['fetch'][$data['field'][1]];?>" required>
							</div>

							
							<div class="form-group has-feedback">
								<label class="center">Start Value</label>
							    <input type="text" class="form-control is is" placeholder="Start Value" name="<?=$data['field'][3];?>"  value="<?=isset($_POST[$data['field'][3]]) ? $_POST[$data['field'][3]]: $data['fetch'][$data['field'][3]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">End Value</label>
							    <input type="text" class="form-control is" placeholder="End Value" name="<?=$data['field'][4];?>"  value="<?=isset($_POST[$data['field'][4]]) ? $_POST[$data['field'][4]]: $data['fetch'][$data['field'][4]];?>">
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


