<?php
class test extends Controller{ 
	public function __construct(){
		$this->db 	= $this->model('db');
		$this->url 	= $this->url();		
	}
	public function index(){
		// $str="HELLO";
		$data = 1;
		//$this->par($str);
		$this->view('test',$data);
	}
	public function f($num){
		$sum=$first=0;
		$second=1;
		// $ctr=0;
		for ($i=0; $i<$num; $i++) {
			// if($i==1){
			// 	$second=1;
			// }
			// if ($i==2) {
			// 	$sum=$sum;
			// }
			// else{
			// 	$sum=$first+$second;
			// }
			// $first=$second;
			// $second=$sum;
			if($i)$sum=$first+$second;
			// else{
			// 	$second++;
			// }
			// if($i<1){
			// 	$second++;
			// }
			// $sum=$first+$second;
			$first=$second;
			$second=$sum;
			echo "f(".$i.")=".$sum."<br>";
		}
		// while ($ctr<$num) {
		// 	if($ctr){
		// 		$sum=$first+$second;
		// 	}
		// 	else{
		// 		$second++;
		// 	}
		// 	$first=$second;
		// 	$second=$sum;
		// 	echo $ctr.":".$sum."<br>";
		// 	$ctr++;
		// }
	}

	public function fn($num){
		$sum=$first=0;
		$second=1;
		for ($i=0; $i<$num; $i++) {
			if($i)$sum=$first+$second;
			$first=$second;
			$second=$sum;
			echo "f(".$i.")=".$sum."<br>";
		}
	}

	public function fibo($n){
		$num1 = 0; 
	    $num2 = 1; 
	    $counter = 0; 
	    while ($counter < $n){ 
	        echo ' '.$num1; 
	        $num3 = $num2 + $num1; 
	        $num1 = $num2; 
	        $num2 = $num3; 
	        $counter = $counter + 1; 
	    } 
	}

	public function ar($str){
		$len=strlen($str);
		for ($i=$len-1; $i >= 0; $i--) { 
			echo $str[$i]; 
		}
	}
	public function par($str){
		$len=strlen($str);
		$a1=0;
		$a2=0;
		$b1=0;
		$b2=0;
		for ($i=0; $i < $len; $i++) { 
			if($str[$i]=="("){
				$a1++;
			}
			if($str[$i]==")"){
				$a2++;
			}
			if($str[$i]=="{"){
				$b1++;
			}
			if($str[$i]=="}"){
				$b2++;
			}
		}
		echo $str." -> ";
		if(($a1+$a2)%2!=0||($b1+$b2)%2!=0){
			echo "NG";
		}
		elseif (($a1+$a2)%2==0||($b1+$b2)%2==0) {
			echo "OK";
		}
	}

}
