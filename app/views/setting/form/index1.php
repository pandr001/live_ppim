<?=$this->view('includes/header',$data);?>
<?=$this->view('includes/alert',$data);?>
<!-- <style>
.form-control {
width:250px;
}
</style> -->
		<form class="form-horizontal" method="post" responsive>
			 <div class="card-body">
			 	<div class="form-group row">
					<div class="col-xs-4"></div>
					<div class="col-xs-4">
						<div class="center">
						</div>
						<p>Contract Number -</p>
						<div class="form-group has-feedback">
						    <input type="text" class="form-control is" placeholder="First Name" name="firstn" required value="<?=isset($_POST['firstn']) ? $_POST['firstn']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="text" class="form-control is" placeholder="Last Name" name="lastn" required value="<?=isset($_POST['lastn']) ? $_POST['lastn']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="email" class="form-control is" placeholder="Email Address" name="email" required value="<?=isset($_POST['email']) ? $_POST['email']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="text" class="form-control is" placeholder="Mobile Phone number" name="mobilenumber" required value="<?=isset($_POST['mobilenumber']) ? $_POST['mobilenumber']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="text" class="form-control is" placeholder="Street Address" name="street" required value="<?=isset($_POST['street']) ? $_POST['street']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="No. of Panels" name="noofpanels" required value="<?=isset($_POST['noofpanels']) ? $_POST['noofpanels']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="text" class="form-control is" placeholder="Capacity of each panel" name="coep" required value="<?=isset($_POST['coep']) ? $_POST['coep']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="Capacity System" name="csys" required value="<?=isset($_POST['csys']) ? $_POST['csys']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="Inverter Capacity" name="invc" required value="<?=isset($_POST['invc']) ? $_POST['invc']:'';?>">
						</div>

                       <div class="form-group has-feedback">
					    <label class="center">Roof Type</label>
					      <select id="roof_type" class="form-control is" name="roof_type" required>
					        <option value="<?=isset($_POST['roof_type']) ? $_POST['roof_type']:'';?>" label="--Please choose an option--"></option>
					        <?php 
					          foreach ($data['roof_type'] as $key => $value) {
					         echo '<option class="center" value="'.$key.'" >'.$value.'</option>';
					        } ?>
					      </select>
					    </div>
					    <div> 

						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="Metre" name="metre" required value="<?=isset($_POST['metre']) ? $_POST['metre']:'';?>">
						</div>

						<div class="form-group has-feedback">
						<!--(bottom three options of house type) -->
						    <input type="number" class="form-control is" placeholder="Roof Height" name="roof_height" required value="<?=isset($_POST['roof_height']) ? $_POST['roof_height']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="Tilt Frame" name="tilt_frame" required value="<?=isset($_POST['tilt_frame']) ? $_POST['tilt_frame']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="Split Array" name="split_array" required value="<?=isset($_POST['split_array']) ? $_POST['split_array']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="Main Switch" name="main_switch" required value="<?=isset($_POST['main_switch']) ? $_POST['main_switch']:'';?>">
						</div>

						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="Switch Board Upgrade" name="sbu" required value="<?=isset($_POST['sbu']) ? $_POST['sbu']:'';?>">
						</div>
						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="NMI" name="nmi" required value="<?=isset($_POST['nmi']) ? $_POST['nmi']:'';?>">
						</div>

						<div>
						<label for="addn">Additional Notes</label><br>	
						    <textarea id="addn" type="text" style="resize:none; width:100%;width:250px;" rows="5" cols="30" maxlength="1000" size="1000" name="addn" required value="<?=isset($_POST['addn']) ? $_POST['addn']:'';?>">
						</textarea>
						</div>

						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="Installer Company" name="icom" required value="<?=isset($_POST['icom']) ? $_POST['icom']:'';?>">
						</div>
						<div class="form-group has-feedback">
						    <input type="number" class="form-control is" placeholder="Meter Number" name="mnum" required value="<?=isset($_POST['mnum']) ? $_POST['mnum']:'';?>">
						</div>
					    <div class="form-group has-feedback">
					      <label class="center">Job Type</label>
					      <select id="job_type" class="form-control is" name="job_type" required>
					        <option value="<?=isset($_POST['job_type']) ? $_POST['job_type']:'';?>" label="--Please choose an option--"></option>
					        <?php 
					          foreach ($data['job_type'] as $key => $value) {
					         echo '<option class="center" value="'.$key.'" >'.$value.'</option>';
					        } ?>
					      </select>
					    </div>
					    <div>
						<label for="desc">Description</label><br>	
						    <textarea type="text" style="resize:none; width:100%;width:250px;" rows="5" cols="30" maxlength="1000" size="1000" name="desc" required value="<?=isset($_POST['desc']) ? $_POST['desc']:'';?>">
						</textarea>
						</div>
					  

					    <div class="form-group has-feedback">
					    <label class="center">Sale Date</label>
					     <input type="date" class="form-control is" placeholder="Sale Date" name="sdate" required value="<?=isset($_POST['sdate']) ? $_POST['sdate']:'';?>">
					    </div>


					    <div class="form-group has-feedback">
					    <label class="center">Proposed Installation Date</label>
					     <input type="date" class="form-control is" placeholder="Proposed Installation Date" name="idate" required value="<?=isset($_POST['idate']) ? $_POST['idate']:'';?>">
					    </div>
                       
					   
					   	<div class="form-group has-feedback">
					      <label class="center">Customer Temperament</label>
					      <select id="cust_temp" class="form-control is" name="cust_temp" required>
					        <option value="<?=isset($_POST['cust_temp']) ? $_POST['cust_temp']:'';?>" label="--Please choose an option--"></option>
					        <?php
					          foreach ($data['cust_temp'] as $key => $value) {
					         
					          echo '<option class="center" value="'.$key.'" >'.$value.'</option>';
					        } ?>
					      </select>
					    </div>

					   <!--  <div class="form-group has-feedback">
					     <input type="text" class="form-control is" placeholder="GST" name="gst" required value="<?=isset($_POST['gst']) ? $_POST['gst']:'';?>">
					    </div>
					    <div class="form-group has-feedback">
					     <input type="text" class="form-control is" placeholder="Document" name="document" required value="<?=isset($_POST['document']) ? $_POST['document']:'';?>">
					    </div>

					    <div class="form-group has-feedback">
					     <input type="text" class="form-control is" placeholder="File Base" name="file_base" required value="<?=isset($_POST['file_base']) ? $_POST['file_base']:'';?>">
					    </div> -->

						<div class="row">
						    <div class="col-xs-2"></div>
						    <div class="col-xs-8">
						      <button type="submit" name="submit" title="<?=$data['btn_name'];?>" class="btn btn-default btn-block btn-log">
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

<?=$this->view('includes/footer',$data);?>