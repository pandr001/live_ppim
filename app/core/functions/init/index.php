<?php
trait Init_Function{
	function init_job($crud){
		$data=[];
		$tbl='tjob';
		if($crud=='r'||$crud=='d'){
			$data['th'] = array(
				'Name',
				'Email',
				'Mobile',
				'Street',
				'Panels',
				'Roof',
				'Metre',
				'Roof Height',
				'Tilt Frame',
				'Split Array',
				'Main Switch',
				'Switch Board Upgrade',
				'NMI',
				'Notes',
				'Company',
				'Installer',
				'Meter #',
				'Job Type',
				'Description',
				'Sale Date',
				'Installation Date',
				'Customer Temperament'
			);
			$var='list';
		}elseif ($crud=='c'||$crud=='u') {
			$data['bit']=bit();

			$data['job_stage']=$this->dynamic_type_all('tjobstage');
			$data['job_type']=$this->dynamic_type_all('tjobtype');
			$data['cust_temp']=$this->dynamic_type_all('tpriority');
			$data['roof_type']=$this->dynamic_type_all('trooftype');
			
			$field=$this->get_column_names($tbl);
			$data['field']=$field;
			$data['fetch']=get_fields_NoID($field,0);
			$var='form';
		}else{
			$var='';
		}
		$data['view']='job';
		$data['crud']=$crud;
		$data['tbl']=$tbl;
		$data['var']=$var;
		$name='Solar '.$data['view'];
		$data['layout']=$this->layout($name,$data['view'],$data['var'],$data['view']);
		return $data;
	}

	function init_manpower($crud){
		$data=[];
		if($crud=='r'||$crud=='d'){
			$data['th'] = array(
				'Manpower Type',
				'Name',
				'CEC Accreditation Number',
				'Company'
			);
			$var='list';
		}elseif ($crud=='c'||$crud=='u') {
			$data['manpower']=manpower_type();
			$data['contractor']=$this->dynamic_type_all('tcontractor');
			$field = array(
				'Manpower_Type', 
				'FirstName', 
				'MiddleName',
				'LastName',
				'CECAccreditationNumber', 
				'Contractor'

			);
			$data['field']=$field;
			$data['fetch']=get_fields_NoID($field,0);
			$var='form';
		}else{
			$var='';
		}
		$data['view']='manpower';
		$data['crud']=$crud;
		$data['var']=$var;
		$name=$data['view'];
		$data['layout']=$this->layout($name,$data['view'],$data['var'],$data['view']);
		return $data;
	}
	function init_settings($crud){
		$data=[]; 
		$tbl='tsetting';
		if($crud=='r'||$crud=='d'){
			$data['th'] = array(
				'Name',
				'Setting Type',
				'Start Value',
				'End Value'
			);
			$var='list';
			// $process='insert';
			// if($crud=='d'){
			// 	$process='delete';
			// }
			// $controller='page';
		}elseif ($crud=='c'||$crud=='u') {
			$data['type']=$this->dynamic_type_all('tsettingtype');
			$field=$this->get_column_names($tbl); 
			$data['field']=$field;
			$data['fetch']=get_fields_NoID($field,0);
			$var='form';
			// $process='insert';
			// if($crud=='u'){
			// 	$process='update';
			// }
		}else{
			$var='';
		}
		$data['view']='settings';
		$data['crud']=$crud;
		$data['tbl']=$tbl;
		$data['var']=$var;
		$name=$data['view'];
		$data['layout']=$this->layout($name,$data['view'],$data['var'],$data['view']);
		return $data;
	}
	function get_empty($data,$crud){
    	$_POST=[];
    	$data['fetch']=get_fields($data['field'],0); 
		$data['success']=success($data['view'],$crud);
	}
	function get_error(){
		$data['error']=error(0);
	}
	function layout($title,$module,$view,$id){
		$data['title']           = ucwords($title);
		$data['big_title']       = ucwords($module);
		$data['small_title']     = ucwords($view);
		$data['list_id']         = strtolower($id);
		$data['list_color']      = 'box box-solid box-default';
		$data['list_col-size']   = 'table-responsive col-sm-12';
		$data['list_table-type'] = 'box-header with-border';
		$data['btn_name']        = 'Submit';
		return $data;
	}
	function init_blank($view){
		$data=[]; 
		$data['view']='dashboard';
		$data['crud']='r';
		$data['tbl']='tjob';
		$name=$data['view'];
		$data['layout']=$this->layout($view,$view,'list',$view);
		return $data;
	}
	
	function init_release($crud){
		$data=[];
		if($crud=='r'||$crud=='d'){
			$data['th'] = array(
				'Name',
				'Version',
				'Description',
				'Release Date'
			);
			$var='list';
		}elseif ($crud=='c'||$crud=='u') {
			$field = array(
				'Name',
				'Version',
				'Description',
				'Release Date'

			);
			$data['field']=$field;
			$data['fetch']=get_fields_NoID($field,0);
			$var='form';
		}else{
			$var='';
		}
		$data['tbl']='trelease';
		$data['view']='release';
		$data['crud']=$crud;
		$data['var']=$var;
		$name=$data['view'];
		$data['layout']=$this->layout($name,$data['view'],$data['var'],$data['view']);
		return $data;
	}
}
?>