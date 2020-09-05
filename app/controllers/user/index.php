<?php
class User extends Controller{ 
	use DB_Function;
	public function index(){
		$tbl='tuser_ppim';
		$data=[];
		if(isset($_SESSION[ID])){
			if ($_SESSION[TYPE]=='System') {
				redirect('page/dashboard',$data);
			}else{
				redirect('page/job',$data);
			}
		}else{
			if(isset($_POST['submit'])){
				$user=$_POST['username'];
				$pass=md5($_POST['password']);
				$query = "
					SELECT * 
					FROM $tbl 
					WHERE LogiNName ='$user' 
					AND Password ='$pass' 
				";
				$data = $this->db->getFetchWCount($query); 
				if($data['count'] > 0){
					$data['user'] = $data['data'];
					$_SESSION[ID]    =  $data['user']['LoginName'];
					$_SESSION[NAME]  =  ucwords($data['user']['LoginName']);
					$_SESSION[TYPE]  =  $this->dynamic_name('tusertype',$data['user']['ID_UserType']); 
					$_SESSION[EMAIL] =  $data['user']['EmailAdd'];
					$_SESSION[DATE_ADDED]  =  $data['user']['CreatedDateTime'];
					if ($_SESSION[TYPE]=='System') {
						redirect('page/dashboard',$data);
					}else{
						redirect('page/job',$data);
					}
				}
				else{
					$error[] =  "Invalid username or password.";
					$data['error'] = $error;
				}	
			}
		}
		$data['login-box-msg']='Login to start your session';
		$data['btn_name']='Log In';
		$data['link']=array(
			0 => array(
					$this->ds_url().'/forgot_password',
					'Forgot password?'
				),
			1 => array(
					$this->ds_url().'/register',
					'No account? Register here'
				)
		);
		$this->view('user',$data);
	}
	public function register(){
		$data=[];
		$data['login-box-msg']='Create new account';
		$data['btn_name']='Create';
		$data['link']=$this->back_to_login();
		if(isset($_SESSION[ID])){
			echo "Welcome", $_SESSION[NAME];
		}else{
			$data['title'] = 'Register New Account';
			$data['user_type']=$this->dynamic_type_all_tusertype('tusertype');
			$data['fetch'] = array(
				'LoginName'    => '',
				'Password'     => '',
				'EmailAdd'     => '',
				'ID_UserType'  => ''
			);
			if (isset($_POST['submit'])) {
				if (!$_POST['user_type']) {
					$error[] =  "Please select USER TYPE";
		            $data['error'] = $error;
				}
				else{
					$data['fetch'] = array(
						'LoginName'       => $_POST['username'],
						'Password'        => md5($_POST['password']),
						'EmailAdd'        => $_POST['email'],
						'ID_UserType'     => $_POST['user_type'],
						'CreatedBy'       => ''
					);
					$query = "
						SELECT 0 
						FROM tuser_ppim
						WHERE LoginName = '".$_POST['username']."'
					";
					$count_username= $this->db->getCount($query);
					// $qry = "
					// 	SELECT 0 
					// 	FROM tuser_ppim
					// 	WHERE EmailAdd = '".$_POST['email']."'
					// ";
					// $count_mail = $this->db->getCount($qry);
					$count_mail=$this->trap_email('tuser_ppim',$_POST['email']);
					if ($count_username) {
						$error[] =  "Saving to database failed!<br>Username already exist!";
		            	$data['error'] = $error;
					}
					elseif ($count_mail) {
						$error[] =  "Saving to database failed!<br>Email already exist!";
		            	$data['error'] = $error;
					}
					else{
						    $add = $this->db->insert('tuser_ppim',$data['fetch']);
						if ($add) {
							$success[] =  "Account Successfully Created! Check your email for confirmation";
				            $data['success'] = $success;
				            $_POST=[];
						}
						else{
							$error[] =  "Something went wrong. Please contact system administrator";
				            $data['error'] = $error;
						}
					}
				}
			}
		}
		$this->view('user/register',$data);
	}
	public function forgot_password(){
		$url=URL_ROOT.$this->url[0];
		$data=[];
		$data['login-box-msg']='Enter your email';
		$data['btn_name']='Proceed';
		$data['link']=$this->back_to_login();
		$data['title'] = 'Forgot Password';
		if(isset($_POST['submit'])){
			// $table = table($this->url[0]);
			$query = "SELECT ID,LoginName,EmailAdd FROM tuser_ppim WHERE  EmailAdd ='". $_POST['email']."' ";
 			$data['list']  = $this->db->getFetchWCount($query);
			if($data['list']['count'] > 0){
				$success[] =  "Please check your email and click on the link provided to reset your password.";
				$data['success'] = $success;
				reset_password($data['list']['data']);
				redirect('user/check_email',$data);
			}else{
				$error[] =  "Email address does not exist!";
				$data['error'] = $error;
			}
		}
		$this->view('user/forgot_password',$data);
	}
	public function reset_password(){
		$url=URL_ROOT.$this->url[0];
		$data=[];
		$data['login-box-msg']='Input new password';
		$data['btn_name']='Reset';
		$data['link']=$this->back_to_login();
		$data['title'] = 'Reset Password';
		$id = d($this->url[0]);
		$query 		= "SELECT * FROM tuser_ppim WHERE id='".$id."' ";
		$data['list']  = $this->db->getFetchWCount($query);

		if(isset($_POST['submit'])){
			if($_POST['new_pass']==$_POST['confirm_pass']){
				$Data = array('password' => md5($_POST['new_pass']));
				$condition = array('id'=>$data['list']['data']['id']);
				$edit = $this->db->update('tuser_ppim', $Data, $condition);
				if($edit){
					$success[] =  "Password Change Succesfully!";
					$data['success'] = $success;
				}
			}else{
				$error[] =  "Password did not match";
				$data['error'] = $error;
			}	
		}
		$this->view('user/reset_password',$data);
	}
	public function check_email(){ 
		$url=URL_ROOT.$this->url[0];
		$data=[];
		$data['login-box-msg']='Pleaase Check your Email';
		$data['link']=$this->back_to_login();
		$data['title'] = 'Forgot Password';
		$this->view('user/check_email',$data);
	}
	public function logout(){
		logout();
	}
}