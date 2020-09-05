<?php
function manpower_type(){
	$data = array(
		'Installer',
		'Designer',
		'Electrician',
		'Distributor'
	);
	return $data;
}
function fibonacci($n){
	$res=0;
	$prev=0;
	for ($i=0; $i<$n; $i++) { 
		if($i){
			$res=$prev+1;
		}
		echo $i+":"+$res;
	}
}
function error($m){
	//for future improvement use swicth
	if ($m) {
		$error[]=$m;
	}
	else{
		$error[]= "Something went wrong. Please contact system administrator";
	}
	// $data['error'] = 
	
	return $error;
}
function success($msg,$crud){
	switch ($crud) {
		case 1:
			$var='Created';
			break;
		case 2:
			$var='Retrieved';
			break;
		case 3:
			$var='Updated';
			break;
		case 4:
			$var='Deleted';
			break;
		default:
			$var='Saved';
			break;
	}
	$success[] = ucwords($msg).' Successfully '.$var.'!';
	$data['success'] = $success;
	return $data['success'];
}
function sidebar(){
	$data['treeview'] = array(
		0 => array(
			'class'     => 'treeview',
			'condition' => true,
			'url'       => URL_ROOT.'/test',
			'icon'      => 'fa fa-cogs',
			'name'      => 'test'
		),
		1 => array(
			'class'     => '',
			'condition' => true,
			'url'       => URL_ROOT.'/users',
			'icon'      => 'fa fa-users',
			'name'      => 'users'
		)
	);
	$data['treeview-menu'] = array(
		0 => array(
			'class'     => 'treeview',
			'condition' => true,
			'url'       => URL_ROOT.'/files',
			'icon'      => 'fa fa-file-text',
			'name'      => 'files'
		),
		1 => array(
			'class'     => '',
			'condition' => true,
			'url'       => URL_ROOT.'/pdf',
			'icon'      => 'fa fa-calculator',
			'name'      => 'pdf'
		)
	);
	$data['li'] = array(
		0 => array(
			'class'     => 'treeview',
			'condition' => true,
			'url'       => URL_ROOT.'/edit',
			'icon'      => 'fa fa-pencil',
			'name'      => 'edit'
		),
		1 => array(
			'class'     => '',
			'condition' => true,
			'url'       => URL_ROOT.'/draw',
			'icon'      => 'fa fa-user',
			'name'      => 'draw'
		)
	);
	return $data;
}
function pieColor(){
	$data['pieColor'] = array(
		'f56954', 
		'00a65a', 
		'f39c12', 
		'00c0ef', 
		'3c8dbc', 
		'd4af37', 
		'2b908f', 
		'6cb45f', 
		'ff00ff', 
		'9C27B0'
	);
	return $data['pieColor'];
}


function isLeapYear($year){
   if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) ){
   	 return 1;
   } 
   else{
   	 return 0;
   }
}
function twelve_months(){
	$cur_yr = date('Y');
	$start = '/01/'.$cur_yr;
	$end['a'] = '/31/'.$cur_yr;
	$end['b'] = '/30/'.$cur_yr;
	$end['c'] = '/28/'.$cur_yr;
	$end['d'] = '/29/'.$cur_yr;

	$data['jan'][0] = '01'.$start;
	$data['jan'][1] = '01'.$end['a'];

	$data['feb'][0] = '02'.$start;
	$data['feb'][1] = '02'.$end['c'];

	$data['mar'][0] = '03'.$start;
	$data['mar'][1] = '03'.$end['a'];

	$data['apr'][0] = '04'.$start;
	$data['apr'][1] = '04'.$end['b'];

	$data['may'][0] = '05'.$start;
	$data['may'][1] = '05'.$end['a'];

	$data['jun'][0] = '06'.$start;
	$data['jun'][1] = '06'.$end['b'];

	$data['jul'][0] = '07'.$start;
	$data['jul'][1] = '07'.$end['a'];

	$data['aug'][0] = '08'.$start;
	$data['aug'][1] = '08'.$end['a'];

	$data['sep'][0] = '09'.$start;
	$data['sep'][1] = '09'.$end['b'];

	$data['oct'][0] = '10'.$start;
	$data['oct'][1] = '10'.$end['a'];

	$data['nov'][0] = '11'.$start;
	$data['nov'][1] = '11'.$end['b'];

	$data['dec'][0] = '12'.$start;
	$data['dec'][1] = '12'.$end['a'];
	if (isLeapYear($cur_yr)) {
		$data['feb'][1] = '02'.$end['d'];
	}
	return $data;
}
function StartAndEnd($var){
	$cur_yr = date('Y');
	$end = '00/00/0000';
	if (!$var) { //checks if another year has come
		$var='12';
		$cur_yr=$cur_yr-1;
	}
	$start = $var.'/01/'.$cur_yr;
	if (isLeapYear($cur_yr) && $var=='02') {
		$end = '29';
	}
	elseif ($var=='01'||$var=='03'||$var=='05'||$var=='07'||$var=='08'||$var=='10'||$var=='12') {
		$end = '31';
	}
	elseif ($var=='04'||$var=='06'||$var=='09'||$var=='11') {
		$end = '30';
	}
	elseif ($var=='02') {
		$end = '28';
	}
	else{
		$end = '00';
	}
	$end=$var.'/'.$end.'/'.$cur_yr;
	return $array = array('start'=>$start,'end'=>$end);
}
function getDateRange(){ 
	$start=date('Y-m-01');
	$end =date('Y-m-t');
	return $array = array('start'=>$start,'end'=>$end);
}
function end_month($data){
	$data = $data - '01';
    if ($data=='02') {
    	$var = 28;
    }
    elseif ($data=='04' || $data=='06' || $data=='09' || $data=='11') {
    	$var = 30;
    }
	elseif ($data=='01' || $data=='03' || $data=='05' || $data=='07' || $data=='08'|| $data=='10' || $data=='12') {
    	$var = 31;
	}
	else{
		$var = 0;
	}
	return $var;
}
function time_24hrs($time){
	$time = normal_time($time);
    return date('H:i', strtotime($time)); 
}
function bit(){
	$bitList = array(
		"NO",
		"YES"
	);
	return $bitList;
}
function YON($var){
	switch ($var) {
		case 0:
			echo '<span class="badge bg-red">NO</span>';
			break;
		case 1:
			echo '<span class="badge bg-green">YES</span>';
			break;
		default:
			echo '<span class="badge bg-white">Error</span>';
			break;
	}
}
function val($var){
	if($var>0) {
		echo '<span class="badge bg-teal" style="background: #219b8c !important;">₱ '.number_format($var,2).'</span>';
	}
	else{
		echo '<span class="badge bg-gray">₱ '.number_format($var,2).'</span>';
	}
}
function return_month($month){
	$var = "Month";
	switch ($month) {
		case 1:
			$var = "JAN";
			break;
		case 2:
			$var = "FEB";
			break;
		case 3:
			$var = "MAR";
			break;
		case 4:
			$var = "APR";
			break;
		case 5:
			$var = "MAY";
			break;
		case 6:
			$var = "JUN";
			break;
		case 7:
			$var = "JUL";
			break;
		case 8:
			$var = "AUG";
			break;
		case 9:
			$var = "SEP";
			break;
		case 10:
			$var = "OCT";
			break;
		case 11:
			$var = "NOV";
			break;
		case 12:
			$var = "DEC";
			break;
		default:
			$var = "ERR";
			break;
	}
	return $var;
}
function return_month_complete($month){
	$var = "Month";
	switch ($month) {
		case 1:
			$var = "January";
			break;
		case 2:
			$var = "February";
			break;
		case 3:
			$var = "March";
			break;
		case 4:
			$var = "April";
			break;
		case 5:
			$var = "May";
			break;
		case 6:
			$var = "June";
			break;
		case 7:
			$var = "July";
			break;
		case 8:
			$var = "August";
			break;
		case 9:
			$var = "September";
			break;
		case 10:
			$var = "October";
			break;
		case 11:
			$var = "November";
			break;
		case 12:
			$var = "December";
			break;
		default:
			$var = "Error";
			break;
	}
	return $var;
}
function normal_time($time){
	$time = strtotime($time);  	
	$hour = date("H",$time);
	$AmPm = $hour > 11 ? "PM" : "AM";
	if(date("H:i:s",$time)=="00:00:00")
		$result = "12:00 AM";
	elseif(date("s",$time)=="00")
		$result = date("h:i ",$time)." ".$AmPm;
	else $result = date("h:i:s ",$time)." ".$AmPm;
	return $result; 
}	
function normal_date($date){
	if( !empty($date) AND isset($date)){
		$date = strtotime($date);  
		$date = date("M d, Y",$date);
	}else $date = "";	
	return $date;
}
function check_date($date_start){
	date_default_timezone_set('Asia/Manila');
	$date_start = strtotime($date_start);
	$date_today = strtotime(date('Y-m-d'));
	$count      =($date_start - $date_today)/86400;
	if($count < 0 || $count == 0 || ($count > 0 && $count <= 7))
		$total = $count;
	elseif($count >= 7)
		$total = 7;
	else $total = NULL;
	return $total;
}
function check_time($date_start, $time_start){
	date_default_timezone_set('Asia/Manila');
	$time_start = strtotime($time_start);
	$time_now   = strtotime(date('h:i:sa'));
	$count      = $time_start - $time_now;
	$check_date = check_date($date_start);
	if($check_date < 0 && $count < 0) $total = 0;
	elseif($check_date >= 0 && $count >= 1 || $check_date >=0 && $count < 0) $total = 1;
	else $total = NULL;
	return $total;
}
function total_hours($date_start,$date_end,$time_start,$time_end){
	date_default_timezone_set('Asia/Manila');
	$date_start = strtotime($date_start);
	$date_end   = strtotime($date_end);
	$time_start = strtotime($time_start);
	$time_end   = strtotime($time_end);
	$total_date = round(($date_end - $date_start)/3600);
	$time_total = round(($time_end - $time_start)/3600);
	if($total_date==0) $total_hours = $time_total;
	else $total_hours = $total_date + $time_total;
	return $total_hours;
}	
function error_message($data){
	echo "<div class='alert alert-error alert-dismissible' style='border: 2px solid;'>";
	echo "<i class='icon fa fa-ban'></i>";
	echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    foreach ( $data as $error )
	echo "$error\n";
	echo "</div>";
}
function success_message($data){
	echo "<div class='alert alert-success alert-dismissible' style='border: 2px solid;background-color: #58bf14 !important;'>";
	echo "<i class='icon fa fa-check'></i>";
	echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    foreach ( $data as $error )
    echo "$error\n";
    echo "</div>";
}
function e($data){
	strlen($data);
	$id=(double)$data*23525325.124;
	return base64_encode($id);
}//encrypt
function d($data){
	$url_id=base64_decode($data);
	$id=(double)$url_id/23525325.124;
	return $id;
}//decrypt
function enc($data){
	return base64_encode($data);
}//encrypt
function dec($data){
	return base64_decode($data);
}//decrypt
function redirect($url){
	header("Location: ".URL_ROOT."$url");
}
function is_loggedin(){
	if(isset($_SESSION[ID])){
		return true;
	}else{	
		logout(); 	
	}
}
function if_login($data){
	if(isset($_SESSION[ID])){
		redirect($data);
	}else{	
		return true;
	}
}
function is_system(){
	if(isset($_SESSION[TYPE]) && $_SESSION[TYPE]=='System'){
		return true;
	}else{	
		redirect(strtolower($_SESSION[TYPE])); 	
	}
}
function is_admin(){
	if(isset($_SESSION[TYPE]) && $_SESSION[TYPE]=='Admin'){
		return true;
	}else{	
		redirect(strtolower($_SESSION[TYPE])); 	
	}
}
function is_access($user){
	$bool=false;
	if(isset($_SESSION[TYPE])){
		foreach($user as $val){
			if($_SESSION[TYPE]==$val){
				$bool=true;
			}
		}
		if($bool){
			return $bool;
		}
		else{
			redirect($URL_ROOT);//url_root->session_type ---soon
		}	
	}else{	
		redirect($URL_ROOT); 	
	}
}
function email(){
	if(isset($_SESSION[EMAIL])){
		return strtolower($_SESSION[EMAIL]);
	}else{
		return "Email";
	}
}
function name(){
	if(isset($_SESSION[NAME])){
		return ucwords($_SESSION[NAME]);
	}else{
		return "Unknown";
	}
}
function username(){
	if(isset($_SESSION[USERNAME])){
		return ($_SESSION[USERNAME]);
	}else{
		return "USERNAME";
	}
}
function type(){
	if(isset($_SESSION[TYPE])){
		return ucwords($_SESSION[TYPE]);
	}else{
		return "";
	}
}
function date_added(){
	if(isset($_SESSION[DATE_ADDED])){
		return ucwords($_SESSION[DATE_ADDED]);
	}else{
		return "";
	}
}
function logout(){
	session_destroy();
	// setcookie(ID,"",time() -3600);
	// setcookie(NAME,"",time() -3600);
	if(isset($_SESSION[TYPE])){
		redirect('user/login');
	}else{
		redirect();
	}
	unset($_SESSION);
}
function age($date){
	$from = new DateTime($date);
	$to   = new DateTime('today');
	return $from->diff($to)->d."\n";
}
function inc($var){
	if(file_exists(URL_ROOT.'views/'.$var . '.php')){
		return include($var);
	}else{
		return '';
	}
}
function chart_legend($data){
	$a = '
        <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#chartLegend"><i class="fa fa-eye"></i>
        </button>
        <div id="chartLegend" class="modal fade" role="dialog">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h4 class="modal-title">Legend</h4>
		        </div>
		        <div class="modal-body">
		        '.(function () use ($data){
	                $html = '';
			          foreach ($data['loop'] as $k => $val) {
			              echo return_month($k+1).' ';
			              echo val($val['Balance']);
			              if ($val['Balance']>0) { 
			                echo $this->view_data($data['func'],$value['title'],$k);
			              }
			              else{
			                echo ' <span class="badge bg-red">NO DATA</span>';
			              }
			              echo "<br>";
			          }
              		return $html;
              	})().'
		        </div>
		        <div class="modal-footer">
		          <a class="btn btn-danger" title="" tooltip href="">
		        Close</a>
		        </div>
		      </div>
		    </div>
		  </div>
	';
	return $a;
}
function btn_save(){
	$a = '
		<button type="button" id="btn_add" class="btn btn-success btn-xs" title="Insert Data" tooltip="Insert Data" data-toggle="modal" data-target="#saveModal"><i class="fa fa-save"></i></button>            
		<div id="saveModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">INSERT!</h4>
		      </div>
		      <div class="modal-body">
		        <p>Are you sure you want to insert new data?</p>
		      </div>
		      <div class="modal-footer">
		        <a class="btn btn-success" title="" tooltip href="">
				YES</a>
		      </div>
		    </div>

		  </div>
		</div>
	';
	return $a;
}
function btn_update_v2($location,$id){
	$a = '
		<button type="button" class="btn btn-success btn-xs" title="Update to Paid" tooltip="Update" data-toggle="modal" data-target="#updateModal'.$id.'"><i class="fa fa-stop-circle"></i></button>            
		<div id="updateModal'.$id.'" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Update Billing Status</h4>
		      </div>
		      <div class="modal-body">
		        <p>This action will change the billing status to "PAID" and it cannot be undone. Clicking "YES" will save the data to the database permanently.</p>
		        <p>Are you sure you want to proceed ?</p>
		      </div>
		      <div class="modal-footer">
		        <a class="btn btn-success" title="" tooltip href="'.URL_ROOT.$location.'/'.enc($id).'">
				YES</a>
		      </div>
		    </div>

		  </div>
		</div>
	';
	return $a;
}
function btn_update($location,$id){
	$a = '
		<button type="button" class="btn btn-success btn-xs" title="Update to Paid" tooltip="Update" data-toggle="modal" data-target="#updateModal'.$id.'"><i class="fa fa-stop-circle"></i></button>            
		<div id="updateModal'.$id.'" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Update Billing Status</h4>
		      </div>
		      <div class="modal-body">
		        <p>This action will change the billing status to "PAID" and it cannot be undone. Clicking "YES" will save the data to the database permanently.</p>
		        <p>Are you sure you want to proceed ?</p>
		      </div>
		      <div class="modal-footer">
		        <a class="btn btn-success" title="" tooltip href="'.URL_ROOT.$location.'/'.enc($id).'">
				YES</a>
		      </div>
		    </div>

		  </div>
		</div>
	';
	return $a;
}
function btn_print($location,$id){
	$a = '
		<button type="button" class="btn btn-success btn-sm" title="Print" tooltip="Print" data-toggle="modal" data-target="#printModal'.$id.'"><i class="fa fa-print"></i></button>            
		<div id="printModal'.$id.'" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Print Billing</h4>
		      </div>
		      <div class="modal-body">
		        <p>This action cannot be undone. Clicking "YES" will save the data to the database permanently.</p>
		        <p>Are you sure you want to proceed ?</p>
		      </div>
		      <div class="modal-footer">
		        <a class="btn btn-success" onclick="window.print();" title="" tooltip href="'.URL_ROOT.$location.'/'.e($id).'">
				YES</a>
		      </div>
		    </div>

		  </div>
		</div>
	';
	return $a;
}
function btn_cancel($location,$id){
	$a = '
	<button type="button" class="btn btn-danger btn-sm" title="Delete" tooltip="Delete" data-toggle="modal" data-target="#deleteModal'.$id.'"><i class="fa fa-trash"></i></button>            
	<div id="deleteModal'.$id.'" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Delete Billing</h4>
	      </div>
	      <div class="modal-body">
	        <p>This action cannot be undone.</p>
	        <p>Are you sure you want to Delete?</p>
	      </div>
	      <div class="modal-footer">
	        <a class="btn btn-danger" title="" tooltip href="'.URL_ROOT.$location.'/'.e($id).'">
			YES</a>
	      </div>
	    </div>

	  </div>
	</div>
	';
	return $a;
}
function add_button($location,$title){
	$a ='<a class="pull-right" title="Create New '.$title.'" tooltip href="'.URL_ROOT.$location.'">
	        <i class="fa fa-plus-circle fa-2x"></i>
	    </a> ';
	return $a;
}
function btn_back($location,$title){
	$a ='<a class="pull-right" title="Back" tooltip href="'.URL_ROOT.$location.'/'.enc($title).'" style="padding-right: 5px;">
	        <i class="fa fa-chevron-left fa-1x"></i></a> ';
	return $a;
}
function btn_back_2($location){
	$a ='<a class="pull-right" title="Back" tooltip href="'.URL_ROOT.$location.'" style="padding-right: 5px;">
	        <i class="fa fa-chevron-left fa-1x"></i></a> ';
	return $a;
}
function btn_up($location){
	$a =' <a class="card-title pull-right" title="Back to Top" tooltip href="'.$location.'" style="padding-right: 5px;">
	     <i class="fa fa-chevron-up fa-1x"></i></a> ';
	return $a;
}
function view_button($location,$id){
	$a = '<a class="btn btn-info btn-xs" title="View" tooltip="View Profile" href="'.URL_ROOT.$location.'/'.enc($id).'" target="_blank">
	<i class="fa fa-eye"></i></a>';
	return $a;
}
function btn_view($location,$id,$var){
	$a = '<a class="btn btn-info btn-xs" title="View" tooltip="View Profile" href="'.URL_ROOT.$location.'/'.enc($id).'/'.e($var).'" target="_blank">
	<i class="fa fa-eye"></i></a>';
	return $a;
}
function btn_view_2($location,$id,$var,$var2){
	$a = '<a class="btn btn-info btn-xs" title="View" tooltip="View Profile" href="'.URL_ROOT.$location.'/'.enc($id).'/'.enc($var).'/'.enc($var2).'" target="_blank">
	<i class="fa fa-eye"></i></a>';
	return $a;
}

function btn_next($location,$id){
	$a = '<a class="btn btn-warning btn-sm pull-right" title="Next" tooltip="Continue" href="'.URL_ROOT.$location.'/'.e($id).'" >
	<i class="fa fa-arrow-right"></i> Next</a>';
	return $a;
}
function update_button($location,$id){
	$a = '<a class="btn btn-warning btn-xs" title="Modify" tooltip="Modify" href="'.URL_ROOT.$location.'/'.e($id).'" >
	<i class="fa fa-pencil"></i></a>';
	return $a;
}
function update_button1($id){
	$a = '
		<a class="btn btn-warning btn-xs" title="Update" href="'.URL_ROOT.$location.'/'.e($id).'" >
			<i class="fa fa-pencil"></i>
		</a>
	';
	return $a;
}
function btn_delete(){
	$a = '
	<button type="button" class="btn btn-danger btn-xs btn_delete" title="Delete" tooltip="Delete" data-toggle="modal" data-target="#dltModal"><i class="fa fa-trash"></i></button>            
	<div id="dltModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Delete !</h4>
	      </div>
	      <div class="modal-body">
	        <p>Are you sure you want to Delete?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">NO</button>
	        <a class="btn btn-danger" title="" tooltip href="">
			DELETE</a>
	      </div>
	    </div>

	  </div>
	</div>
	';
	return $a;
}
function delete_button($location,$id){
	$a = '
	<button type="button" class="btn btn-danger btn-xs" title="Delete" tooltip="Delete" data-toggle="modal" data-target="#deleteModal'.$id.'"><i class="fa fa-trash"></i></button>            
	<div id="deleteModal'.$id.'" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Delete !</h4>
	      </div>
	      <div class="modal-body">
	        <p>Are you sure you want to Delete?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">NO</button>
	        <a class="btn btn-danger" title="" tooltip href="'.URL_ROOT.$location.'/'.e($id).'">
			DELETE</a>
	      </div>
	    </div>

	  </div>
	</div>
	';
	return $a;
}
function booking_status($data){
	switch ($data) {
		case 0:
			echo '<span class="badge bg-red">Booked</span>';
			break;
		case 1:
			echo '<span class="badge bg-green">Available</span>';
			break;
		default:
			echo '<span class="badge bg-white">Error</span>';
			break;
	}
}