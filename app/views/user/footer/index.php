          <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
              <button type="submit" name="submit" title="<?=$data['btn_name'];?>" class="btn btn-primary btn-block btn-log">
                <b><?=$data['btn_name'];?></b>
              </button>
            </div>
            <div class="col-xs-1"></div>
          </div>

          <?php
            foreach ($data['link'] as $key => $value){
             echo '
                <div class="fp">
                  <a href="'.$value[0].'" class="text-center">'.$value[1].'</a><br>
                </div>
              ';
            }
          ?>
        </form>
        <br>
        <div class="center">
          <div class="login-footer">
            <a href="<?=COMPANY_WEBSITE;?>" style="color: #2e97a9;" target="_blank"><b> <?=COMPANY_NAME;?> </b></a>&copy; <?php echo date('Y');?>
          </div>
         </div>
        </div>
        <br>
      </div>
    </div>
  </div>
  
  <div id="id01" class="modal">
     
  <form class="modal-content animate" action="">
   
 
     <div class="form-group has-feedback">
	 <h4 style="color:gray;"> What user type are you?</h4>
      <label class="center">User Type</label>
      <select id="user_type2" name="user_type2" class="form-control sel" required>
        <option value="<?=isset($_POST['user_type']) ? $_POST['user_type']:'';?>" label="--Please choose an option--"></option>
        <?php
          foreach ($data['user_type'] as $key => $value) {
          if ($key == $data['fetch']['ID_UserType']){
            $selected = "selected=\"selected\""; }
          else {
            $selected = ($data['fetch']['ID_UserType']==$key) ? 'selected':'';
          }
          echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
        } ?>
      </select>
    </div>

    <div class="" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" id="utb" class="yesbtn">I AM</button>
      
    </div>
  </form>
</div>
  
  
<script>
var modal = document.getElementById('id01');
 
 document.getElementById("utb").addEventListener("click", function() {
	  
var ut = document.getElementById("user_type2");
  
var utf = ut.options[ut.selectedIndex].value;
  
sessionStorage.setItem("UserType", utf);

sessionStorage.setItem("path", window.location.pathname);

document.getElementById("user_type").value = sessionStorage.getItem("UserType");

var uts = parseInt(sessionStorage.getItem("UserType"));

if(utf == "1"){
document.getElementById("utt").innerHTML = "Retailer <br><a style='cursor:pointer;' onclick='changeusertype()'/>Change User type</a>";
} if(utf == "2"){
document.getElementById("utt").innerHTML = "Installer <br><a style='cursor:pointer;' onclick='changeusertype()'/>Change User type</a>";	

} if(utf == "4"){
document.getElementById("utt").innerHTML = "Contractor <br><a style='cursor:pointer;' onclick='changeusertype()'/>Change User type</a>";	

} if(utf == "6"){
document.getElementById("utt").innerHTML = "Wholesaler <br><a style='cursor:pointer;' onclick='changeusertype()'/>Change User type</a>";	
}
  
});
  
function userType(){
	
var path = sessionStorage.getItem("path");

if(window.location.pathname != "/mvc/user/user" && path == null){
	
modal.style.display = "block";  	
//console.log(document.URL);
}
if(window.location.pathname == "/mvc/user/user"){
sessionStorage.clear();
}
}
function changeusertype(){
	
document.getElementById('id01').style.display='block';	
}  

  
  </script>
<!-- jQuery 3 -->
<script src="<?=BACK_END;?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=BACK_END;?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=BACK_END;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=BACK_END;?>dist/js/adminlte.min.js"></script>
<!-- customize js -->
</body>
</html>
