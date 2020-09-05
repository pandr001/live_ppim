<?=$this->view('user/header',$data);?>

 
           <div class="row">
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
  
<!-- Bootstrap 3.3.7 -->
<script src="<?=BACK_END;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=BACK_END;?>dist/js/adminlte.min.js"></script>
<!-- customize js -->
</body>
</html>
