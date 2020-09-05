<?php
function get_fields($col,$var){ 
	$data=[];
	if($var){
		foreach ($col as $key => $val) {
			foreach ($var as $k => $v) {
				if ($val==$k) {
					$data[$val]=$v;
				}
			}
		}
	}else{
		foreach ($col as $key => $val) {
			$data[$val]='';
		}

	}
	return $data;
}
function get_fields_NoID($col,$var){ 
	$data=[];
	if($var){
		foreach ($col as $key => $val) {
			foreach ($var as $k => $v) {
				if ($val==$k && ($k!='ID' || $val!='ID')) {
					$data[$val]=$v;
				}
			}
		}
		//$data['ctr']=$key;
	}else{
		foreach ($col as $key => $val) {
			if ($val!='ID') {
				$data[$val]='';
			}
		}
		$data['col']=$col;
		//$data['ctr']=$key;
	}
	return $data;
}