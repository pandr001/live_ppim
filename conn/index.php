<?php
$data['db']=0;//0-mysql,1-mssql note: do not edit this if not necessary
$data['cs']=1;//change to your specified connection string
switch ($data['cs']) {
case 2://YOK LOCAL
$data['DH']="127.0.0.1";
$data['DU']="root";
$data['DP']="";
$data['DN']="ppim_001";
break;
case 1://PPIM LIVE
$data['DH']="34.101.249.129";
$data['DU']="newuser001";
$data['DP']="newuser001";
$data['DN']="ppimnewdb001";
break;
case 0://LOCAL
$data['DH']="127.0.0.1";
$data['DU']="root";
$data['DP']="";
$data['DN']="ppim";
break;
default:
$data['DH']="";
$data['DU']="";
$data['DP']="";
$data['DN']="";
break;
}
?>