<?php
class Errors extends Controller{ 
	public function __construct(){
	}
	public function index(){		
		$this->view('error');
	}
	public function access_denied(){
		$this->view('error/denied');
	}
}