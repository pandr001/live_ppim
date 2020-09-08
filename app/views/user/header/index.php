<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="">
    <meta name="author" content="">
  <title><?=$this->view('includes/title',$data);?></title>
  <link rel="shortcut icon" href="<?=ASSETS;?>images/favicon.png" type="image/x-icon">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=BACK_END;?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=BACK_END;?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=BACK_END;?>dist/css/AdminLTE.min.css">
  <!-- Customize CSS -->
  <link rel="stylesheet" type="text/css" href="<?=ASSETS;?>css/ppim.css">
  <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.yesbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #264E36;
  font-style: bold;
  font-size:16px;
}



/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}


/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .yesbtn {
     width: 100%;
  }
}
</style>
  
</head>
<body class="login-body" onload="userType()">

  <div class="row center">
    <div class="col-xs-12 login-form">
      <div class="login-box">
        <div class="center">
          <div class="login-logo">
            <a href="<?=COMPANY_WEBSITE;?>" target="_blank">
              <img src="<?=IMAGES;?>favicon.png"  alt="logo" class="login-logo-image">
            </a>
          </div>
          <div class="row login-logo-msg">
            <?=SYS_NM;?>
          </div>
        </div>
        <div class="login-box-body">
          <p class="login-box-msg"><?=$data['login-box-msg'];?></p>
		  <span style="color:gray;">Register as: <span id="utt"></span> </span>
         <p id="sysmessage"> <?=$this->view('includes/alert',$data);?></p>
          <form method="post" responsive>