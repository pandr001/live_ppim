<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<!--<script defer src="<?=BACK_END;?>bower_components/jquery/dist/jquery.min.js"></script>-->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script >
  $.widget.bridge('uibutton', $.ui.button)
</script> -->


<!-- Bootstrap 3.3.7 -->
<script defer src="<?=BACK_END;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script defer src="<?=BACK_END;?>bower_components/raphael/raphael.min.js"></script>
<script defer src="<?=BACK_END;?>bower_components/morris.js/morris.min.js"></script>
<!-- PACE -->
<script defer src="<?=BACK_END;?>bower_components/PACE/pace.min.js"></script>
<!-- ChartJS -->
<script defer src="<?=BACK_END;?>bower_components/chart.js/Chart.js"></script>
<!-- Select2 -->
<script defer src="<?=BACK_END;?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script defer src="<?=BACK_END;?>plugins/input-mask/jquery.inputmask.js"></script>
<script defer src="<?=BACK_END;?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script defer src="<?=BACK_END;?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script defer src="<?=BACK_END;?>bower_components/moment/min/moment.min.js"></script>
<script defer src="<?=BACK_END;?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script defer src="<?=BACK_END;?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script defer src="<?=BACK_END;?>plugins/iCheck/icheck.min.js"></script>
<!-- DataTables -->
<script defer src="<?=BACK_END;?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script defer src="<?=BACK_END;?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap time picker -->
<script defer src="<?=BACK_END;?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script defer src="<?=BACK_END;?>plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE App -->
<script defer src="<?=BACK_END;?>dist/js/adminlte.min.js"></script>
<!-- custom js -->
<!-- <script defer src="<?=ASSETS;?>js/ppim.js"></script> -->
<!-- <script defer src="<?=ASSETS;?>js/drop-image.js"></script> -->
<script src="<?=ASSETS;?>dropzone/dist/dropzone.js"></script>

<!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
<!-- <script type="text/javascript">
  Dropzone.autoDiscover = false;
  var dropzone1 = new Dropzone('#imageDropzone', {
          maxFiles:5,
          forceFallbacks:true,
          autoDiscover:false,
          createImageThumbnails:false,
          init:function(){
              this.on("success",function (file,response){
                  alert(response);
              });
          }
     });
 </script> -->
<!-- <script type="text/javascript">
	// Dropzone class:
	var myDropzone = new Dropzone("div#myId", { url: "/file/post"});
	// jQuery
	$("div#myId").dropzone({ url: "/file/post" });
	// "myAwesomeDropzone" is the camelized version of the HTML element's ID
	Dropzone.options.myAwesomeDropzone = {
	  paramName: "file", // The name that will be used to transfer the file
	  maxFilesize: 2, // MB
	  accept: function(file, done) {
	    if (file.name == "justinbieber.jpg") {
	      done("Naha, you don't.");
	    }
	    else { done(); }
	  }
	};
</script> -->




