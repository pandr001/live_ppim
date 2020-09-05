<?=$this->view('user/header',$data);?>

  <div class="form-group has-feedback">
    <input type="email" class="form-control is" placeholder="Email" name="email" required value="<?=isset($_POST['email']) ? $_POST['email']:'';?>">
  </div>

<?=$this->view('user/footer',$data);?>