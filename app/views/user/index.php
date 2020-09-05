<?=$this->view('user/header',$data);?>

  <div class="form-group has-feedback">
    <input type="text" class="form-control is" placeholder="Username" name="username" required value="<?=isset($_POST['user']) ? $_POST['user']:'';?>">
  </div>
  
  <div class="form-group has-feedback">
    <input type="password" class="form-control is" placeholder="Password" name="password" required value="<?=isset($_POST['user']) ? $_POST['user']:'';?>">
  </div>
    
<?=$this->view('user/footer',$data);?>