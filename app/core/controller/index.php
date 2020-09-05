<?php
class Controller{
 	public function url(){
		if(isset($_GET['url'])){
			$url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			return $url;
		} 	
	}
	public function model($model){
		require_once 'app/models/' . $model . '/index.php';
		return new $model();
	}
	public function view($view, $data = [], $fields = []){
		$var = 'app/views/' . $view . '/index.php';	 
		(file_exists($var))?require_once $var:'';
	}
	public function tool($tool, $data = [], $fields = []){
		$var = 'app/tools/' . $tool . '/index.php';	 
		(file_exists($var))?require_once $var:'';
	}
	public function service($service, $data = [], $fields = []){
		$var = 'app/services/' . $tool . '/index.php';	 
		(file_exists($var))?require_once $var:'';
	}
} 
?>