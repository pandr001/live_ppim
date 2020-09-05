<?php
trait DB_Function {
	public function __construct(){
		$this->db 	= $this->model('db');
		$this->url 	= $this->url();		
	}
	public function ds_url(){
		return URL_ROOT.$this->url[0];
	}
	public function image_upload($image,$tbl,$tbl_id){
		$imgFile = basename($image['name']); 
		$tmp_dir = $image['tmp_name'];
		$imgSize = $image['size'];
		$upload_dir = UPLOADS; 
		$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
		if ($image['name']=='Bill'.$imgExt) {
			$preName='BL';
		}
		if ($image['name']=='Contract'.$imgExt) {
			$preName='CN';
		}
		if ($image['name']=='ProposedPlan'.$imgExt) {
			$preName='PL';
		}
		if ($image['name']=='RoofShot'.$imgExt) {
			$preName='RS';
		}
		if ($image['name']=='SwitchBoard'.$imgExt) {
			$preName='SB';
		}
		else{
			$preName='ODD';
		}
		$userpic = $preName.time().rand(1000,1000000).".".$imgExt;
		if(in_array($imgExt, $valid_extensions)){
			if($imgSize < 5000000){		
				if(move_uploaded_file($tmp_dir,$upload_dir.$userpic)){
					$img_path = $upload_dir.$userpic;
					$Data = array(
						'TableName'=>$tbl,
						'FileName'=>$userpic,
						'ID_Header'=>$tbl_id[0]
					);
					$add=$this->db->insert('tphotos', $Data);
					if ($add) {
						echo $userpic."Added <br>";
					}
				} 
			}	
		}
	}
	public function back_to_login(){
		return array(
			0 => array(
					$this->ds_url().'/user',
					'Back to Login'
				)
		);
	}
	public function dynamic_name($tbl,$id){
		$query="
			SELECT Name 
			FROM $tbl
			WHERE ID=$id
		";
		$name= $this->db->getFetch($query);
		if($name){
			return $name[0];
		}
		else
			return 0;
	}
	public function dynamic_type_all($var){
		$query="
			SELECT ID, Name
			FROM $var
			ORDER BY Name
		";
		$list = $this->db->getQuery($query);
		$count = count($list);
		if($count!=0){
			$List = array();
			foreach ($list as $key => $value){
				$List[$value['ID']] = $value['Name'];
			}
			return $List;
		}
		else
			return 0;
	}
		public function dynamic_type_all_tusertype($var){
		$query="
			SELECT ID, Name
			FROM $var WHERE IsForReg = 1
			ORDER BY Name
		";
		$list = $this->db->getQuery($query);
		$count = count($list);
		if($count!=0){
			$List = array();
			foreach ($list as $key => $value){
				$List[$value['ID']] = $value['Name'];
			}
			return $List;
		}
		else
			return 0;
	}
	public function get_column_names($var){
		$db=DB_N;
		$query="
			SELECT column_name
			FROM information_schema.columns
			WHERE table_schema = '$db'
			AND table_name = '$var'
		";
		$list = $this->db->getQuery($query);
		$List = [];
		foreach ($list as $k => $val){
			$List[$k] = $val['column_name']; 
		}
		return $List;
	}
	public function trap_email($tbl,$email){
		$query = "
			SELECT 0 
			FROM $tbl
			WHERE EmailAdd='$email'
		";
		$count = $this->db->getCount($query);
		return $count;
	}
}