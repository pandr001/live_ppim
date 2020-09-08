<?=$this->view('user/header',$data);?>

    <div class="form-group has-feedback">
      <input type="text" class="form-control is" placeholder="Username" name="username" required value="<?=isset($_POST['username']) ? $_POST['username']:'';?>">
    </div>
    
    <div class="form-group has-feedback">
      <input type="password" class="form-control is" onfocus="onPass(this.id)" id="pass"  placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required value="<?=isset($_POST['password']) ? $_POST['password']:'';?>" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      <div style="color:#3d184e;font-size: 12px;opacity: .8;">
      <p id="note" style="color:gray; font-size:10px;"></p>
      </div>
      
    </div>

    <div class="form-group has-feedback">
      <input type="email" class="form-control is" placeholder="Email" name="email" required value="<?=isset($_POST['email']) ? $_POST['email']:'';?>">
    </div>
	<input type="hidden" id="user_type" name="user_type">



<?=$this->view('user/footer',$data);?>
<script>
  
  
  function onPass(x) {
  document.getElementById("note").innerHTML = "Note: Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
}
</script>