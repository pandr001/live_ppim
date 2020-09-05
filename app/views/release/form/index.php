<div class="row">
        <div class="col-xs-1"></div>

        <div class="col-xs-10">
           <form class="form-horizontal" method="post" enctype="multipart/form-data" responsive>
				 <div class="card-body">
				 	<div class="form-group row">
						<div class="col-sm-3 col-xs-1"></div>
						<div class="col-sm-6 col-xs-10">
						

							

						   
							<div class="form-group has-feedback">
								<label class="center">Name<b style="color:red; font-size: 20px;"> *</b></label>
							    <input type="text" class="form-control is is" placeholder="Name" name="<?=$data['field'][0];?>"  value="<?=isset($_POST[$data['field'][0]]) ? $_POST[$data['field'][0]]: $data['fetch'][$data['field'][0]];?>" required>
							</div>

							<div class="form-group has-feedback">
								<label class="center">Version</label>
							    <input type="text" class="form-control is is" placeholder="Version" name="<?=$data['field'][1];?>"  value="<?=isset($_POST[$data['field'][1]]) ? $_POST[$data['field'][1]]: $data['fetch'][$data['field'][1]];?>">
							</div>

							<div class="form-group has-feedback">
								<label class="center">Description<b style="color:red; font-size: 20px;"> *</b></label>
								<textarea id="desc" type="text" style="resize:none; width:100%;" rows="5" cols="30" maxlength="1000" size="1000" name="<?=$data['field'][2];?>" class="is" required>
								<?=isset($_POST[$data['field'][2]]) ? $_POST[$data['field'][2]]: $data['fetch'][$data['field'][2]];?></textarea>
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


