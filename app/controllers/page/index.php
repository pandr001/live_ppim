<?php
class Page extends Controller{
	use DB_Function; 
	use Init_Function;
	public function index(){
		redirect('user');
	}
	public function dashboard(){
		$mod='blank';
		$name=$this->url[1];
		is_loggedin();
		is_system();
		$_ds=$this;
		$init='init_'.$mod;
		$data=$_ds->$init($name);
		$tbl=$data['tbl'];
		$data['list']=$_ds->db->select($tbl);
		$_ds->view($data['view'],$data);
	}
	public function release(){
		is_loggedin();
		$mod='release';
		$_ds=$this;
		$init='init_'.$mod;
		$data=$_ds->$init('r');
		$tbl=$data['tbl'];
		$process='select';
		$data['list']=$_ds->db->$process($tbl);
		$_ds->view($data['view'],$data);
	}
	
	public function release_add(){
		is_loggedin();
		$data=$this->init_release('c');
		$tbl=$data['tbl'];
		$field=$data['field'];
		$process='insert';
		$controller='page';
		if(isset($_POST['submit'])){ 

			$data['fetch']=get_fields_NoID($field,$_POST);  
			$exe=$this->db->$process($tbl,$data['fetch']);
			//data,crud,controller
			if ($exe) {
				$this->get_empty($data,1);
				redirect($controller.'/'.$data['view'],$data['success']);
			}
			else{
				$this->get_error();
			}
		}
		$this->view($data['view'],$data);
	}
	public function sms(){
		is_loggedin();
		$mod='blank';
		$name=$this->url[1];
		$_ds=$this;
		$init='init_'.$mod;
		$data=$_ds->$init($name);
		$tbl=$data['tbl'];
		$process='select';
		$data['list']=$_ds->db->$process($tbl);
		$_ds->view($data['view'],$data);
	}
	public function email(){
		is_loggedin();
		$mod='blank';
		$name=$this->url[1];
		$_ds=$this;
		$init='init_'.$mod;
		$data=$_ds->$init($name);
		$tbl=$data['tbl'];
		$process='select';
		$data['list']=$_ds->db->$process($tbl);
		$_ds->view($data['view'],$data);
	}
	public function call(){
		is_loggedin();
		$mod='blank';
		$name=$this->url[1];
		$_ds=$this;
		$init='init_'.$mod;
		$data=$_ds->$init($name);
		$tbl=$data['tbl'];
		$process='select';
		$data['list']=$_ds->db->$process($tbl);
		$_ds->view($data['view'],$data);
	}
	public function job_crud(){
		is_loggedin();
		$data=$this->init_job('c');
		$tbl=$data['tbl'];
		$field=$this->get_column_names($tbl);
		$data['field']=$field; 
		$data['fetch']=get_fields($field,0);
		if($data['crud']=='C') { 
			if(isset($_POST['submit'])){ 
				$data['fetch'] = get_fields($field,$_POST); 
				$count_email=$this->trap_email($tbl,$field[3]);
				$add=$this->db->insert($tbl,$data['fetch']);
				if($add){
					$data['success']=success($view,1);
		            $_POST=[];
		            $data['fetch']=get_fields($field,0);
		            $data['crud']='R';
				}else{
					$data['error']=error(0);
				}
			}
		}
		if($data['crud']=='R') {
			$query="
				SELECT *
				FROM $tbl
				WHERE SaleDate 
				BETWEEN '".$data['date-range']['start']."'
				AND '".$data['date-range']['end']."'
			";
			$data['list']=$this->db->getQuery($query);
			if(isset($_POST['add'])){
				$data['crud']='C';
			}
			elseif(isset($_POST['edit'])){
				$data['crud']='U';
			}
		}
		if($data['crud']=='U') { 
			echo "UPDATE";
			$query="
				SELECT * 
				FROM $tbl
				WHERE ID=$id
			";
			$data['fetch']=$this->db->getFetch($query);
			if(isset($_POST['submit'])){
				$data['fetch'] = get_fields($field,$_POST); 
				$edit=$this->db->update($tbl,$data['fetch'],$id);
				// $edit = $this->db->update($tbl,$data['fetch'],array('ID' => $id));
				if ($add) {
					$data['success']=success($view,1);
		            $_POST=[];
		            $data['crud']='R';
				}
				else{
					$data['error']=error(0);
				}
			}

		}
		if($data['crud']=='D') { 
			echo "DELETE";
			//$id to be identified
			$delete = $this->db->delete($tbl,$id);
			if ($delete) {
				$data['success']=success($view,4);
		        $data['crud']='R';
			}
			else{
	            $data['error']=error(0);
			}

		}
		$this->view($data);
	}
	public function job(){
		$mod='job';
		is_loggedin();
		$_ds=$this;
		$init='init_'.$mod;
		$data=$_ds->$init('r');
		//$data['date-range']=getDateRange();//not yet use
		$tbl=$data['tbl'];
		$data['list']=$_ds->db->select($tbl);
		$_ds->view($data['view'],$data);
	}
	public function job_add(){
		is_loggedin();
		$data=$this->init_job('c');
		$img_path = "";
		if(isset($_POST['submit'])){ 
			$count_email=$this->trap_email($tbl,$field[3]);
			if ($count_email) {
				$data['error']=error('Saving to database field!<br>Email already exist!');
			}else{
				$data['fetch'] = get_fields_NoID($field,$_POST); 
				$add=$this->db->insert($tbl,$data['fetch']);
				if ($add){
					$id=$add;
					$ctr=1;print_r('FILES: ');print_r($_FILES);exit;
					if(isset($_FILES)){ 
						$ctr=0;
						foreach ($_FILES as $key => $value) {
							$img_up=$this->image_upload($value,$tbl,$id);
							if ($img_up) {
								$ctr++;
							}
						}
					}
					if ($ctr) {
						get_empty(1);
					}
				}
				else{
					get_error();
				}
			}
			
		}
		$this->view($data['view'],$data);
	}
	public function job_edit(){
		is_loggedin();
		$data=$this->init_job('u');
		$tbl=$data['tbl'];
		$id = d($this->url[2]);
		$query="
			SELECT * 
			FROM $tbl
			WHERE ID=$id
		";
		$fetch=$this->db->getFetch($query);
		$field=$data['field'];
		$data['fetch']=get_fields_NoID($field,$fetch); 

		if(isset($_POST['submit'])){
			$data['fetch'] = get_fields_NoID($field,$_POST); 
			$edit = $this->db->update($tbl,$data['fetch'],array('ID' => $id));
			if ($edit) {
				get_empty(3);
			}
			else{
	            get_error();
			}
		}

		$this->view($data['view'],$data);
	}
	public function job_delete(){
		is_loggedin();
		$mod='job';
		$_ds=$this;
		$data=$_ds->init_.$mod('d');
		$controller='page';
		$process='delete';
		$tbl=$data['tbl'];
		$id=d($_ds->url[2]);
		$exe=$_ds->db->$process($tbl,$id);
		if ($exe) {
			$_ds->get_empty($data,4); 
			redirect($ontroller.'/'.$data['view'],$data['success']);
		}else{
			$_ds->get_error();
		}
		
	}

	public function manpower(){
		is_loggedin();
		$access = array(
			'Admin',
			'System'
		);
		if(is_access($access)){
			$data=$this->init_manpower('r');
			if(isset($_POST['submit'])){ 
				// $data['fetch'] = get_fields_NoID($field,$_POST); 
					if($_POST[$data['field'][0]]==0){
						$data['fetch'] = array(
							'ID_Contractor' => $_POST[$data['field'][5]], 
							'FirstName'     =>$_POST[$data['field'][1]],
							'LastName'      =>$_POST[$data['field'][3]],
							'CECAccreditationNumber' => $_POST[$data['field'][4]]

						);
						$tbl='tinstaller';
					}
					elseif ($_POST[$data['field'][0]]==1) {
						$data['fetch'] = array(
							'FirstName'     => $_POST[$data['field'][1]],
							'LastName'      => $_POST[$data['field'][3]],
							'FullName'      => $_POST[$data['field'][1]].' '.$_POST[$data['field'][3]],
							'CECAccreditationNumber' => $_POST[$data['field'][4]]
						);
						$tbl='tdesigner';
					}
					elseif ($_POST[$data['field'][0]]==2) {
						$data['fetch'] = array(
							'FirstName'     =>$_POST[$data['field'][1]],
							'LastName'      =>$_POST[$data['field'][3]],
							'FullName'      =>$_POST[$data['field'][1]].' '.$_POST[$data['field'][3]],
							'CECAccreditationNumber' => $_POST[$data['field'][4]]

						);
						$tbl='telectrician';
					}
					elseif ($_POST[$data['field'][0]]==3) {
						$data['fetch'] = array(
							'Name'     =>$_POST[$data['field'][1]]

						);
						$tbl='tdistributor';
					}
					
					$exe=1;
					if ($exe) {
						$this->get_empty($data,1);
						redirect('page/'.$data['view'],$data['success']);
					}
					else{
						get_error();
					}
			}
			$this->view($data['view'],$data);
		}else{
			$this->view('error/denied');
		}

	}
	public function manpower_add(){
		is_loggedin();
		$access = array(
			'PPUsers', 
			'Admin',
			'System'
		);
		if(is_access($access)){
			$data=$this->init_manpower('c');
			if(isset($_POST['submit'])){ 
				// $data['fetch'] = get_fields_NoID($field,$_POST); 
					if($_POST[$data['field'][0]]==0){
						$data['fetch'] = array(
							'ID_Contractor' => $_POST[$data['field'][5]], 
							'FirstName'     =>$_POST[$data['field'][1]],
							'LastName'      =>$_POST[$data['field'][3]],
							'CECAccreditationNumber' => $_POST[$data['field'][4]]

						);
						$tbl='tinstaller';
					}
					elseif ($_POST[$data['field'][0]]==1) {
						$data['fetch'] = array(
							'FirstName'     => $_POST[$data['field'][1]],
							'LastName'      => $_POST[$data['field'][3]],
							'FullName'      => $_POST[$data['field'][1]].' '.$_POST[$data['field'][3]],
							'CECAccreditationNumber' => $_POST[$data['field'][4]]
						);
						$tbl='tdesigner';
					}
					elseif ($_POST[$data['field'][0]]==2) {
						$data['fetch'] = array(
							'FirstName'     =>$_POST[$data['field'][1]],
							'LastName'      =>$_POST[$data['field'][3]],
							'FullName'      =>$_POST[$data['field'][1]].' '.$_POST[$data['field'][3]],
							'CECAccreditationNumber' => $_POST[$data['field'][4]]

						);
						$tbl='telectrician';
					}
					elseif ($_POST[$data['field'][0]]==3) {
						$data['fetch'] = array(
							'Name'     =>$_POST[$data['field'][1]]

						);
						$tbl='tdistributor';
					}
					
					$add=$this->db->insert($tbl,$data['fetch']);
					if ($add) {
						$this->get_empty($data,1);
						redirect('page/'.$data['view'],$data['success']);
					}
					else{
						get_error();
					}
			}
			$this->view($data['view'],$data);
		}else{
			$this->view('error/denied');
		}

	}
	public function settings(){
		$mod='settings';
		is_loggedin();
		$_ds=$this;
		$init='init_'.$mod;
		$data=$_ds->$init('r');
		$tbl=$data['tbl'];
		$data['list']=$_ds->db->select($tbl);
		$_ds->view($data['view'],$data);
	}
	public function settings_add(){
		is_loggedin();
		$data=$this->init_settings('c');
		$tbl=$data['tbl'];
		$field=$data['field'];
		$process='insert';
		$controller='page';
		if(isset($_POST['submit'])){ 

			$data['fetch']=get_fields_NoID($field,$_POST); 
			$exe=$this->db->$process($tbl,$data['fetch']);
			//data,crud,controller
			if ($exe) {
				$this->get_empty($data,1);
				redirect($controller.'/'.$data['view'],$data['success']);
			}
			else{
				$this->get_error();
			}
		}
		$this->view($data['view'],$data);
	}
	public function settings_edit(){
		is_loggedin();
		$data=$this->init_settings('u');
		$tbl=$data['tbl'];
		$field=$data['field'];
		$id=d($this->url[2]);
		$fetch=$this->db->fetch($tbl,$id);
		$data['fetch']=get_fields_NoID($field,$fetch); 
		if(isset($_POST['submit'])){
			$data['fetch'] = get_fields_NoID($field,$_POST); 
			$edit = $this->db->update($tbl,$data['fetch'],array('ID' => $id));
			if ($edit) {
				$this->get_empty($data,3);
				redirect('page/'.$data['view'],$data['success']);
			}
			else{
				$this->get_error();
			}
		}
		$this->view($data['view'],$data);
	}


	public function settings_delete(){ 
		is_loggedin();
		$mod='settings';
		$init='init_'.$mod;
		$data=$this->$init('d');
		$controller='page';
		$process='delete';
		$tbl=$data['tbl'];
		$id=d($this->url[2]);
		$exe=$this->db->$process($tbl,$id);
		if ($exe) {
			$this->get_empty($data,4); 
			redirect($ontroller.'/'.$data['view'],$data['success']);
		}else{
			$this->get_error();
		}
		
	}
	// private function delete($data){
	// 	is_loggedin();
	// 	$controller='page';
	// 	$process='delete';
	// 	$tbl=$data['tbl'];
	// 	$id=d($this->url[2]);
	// 	$exe=$this->db->$process($tbl,$id));
	// 	if ($exe) {
	// 		$this->get_empty($data,4); 
	// 		redirect($ontroller.'/'.$data['view'],$data['success']);
	// 	}else{
	// 		$this->get_error();
	// 	}
	// }

}

//experiment in one function there should be crud