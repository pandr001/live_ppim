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
</head>
<body class="login-body">

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
          <?=$this->view('includes/alert',$data);?>
          <form method="post" responsive>