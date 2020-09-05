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

<script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>

<script>
	// Required for drag and drop file access
	jQuery.event.props.push('dataTransfer');

	$(function(){
		var dropTimer;
		var dropTarget1 = $('.dragArea1');
		var dropTarget2 = $('.dragArea2');
		var dropTarget3 = $('.dragArea3');
		var dropTarget4 = $('.dragArea4');
		var dropTarget5 = $('.dragArea5');

		var fileInput1 = $('#image1');
		var fileInput2 = $('#image2');
		var fileInput3 = $('#image3');
		var fileInput4 = $('#image4');
		var fileInput5 = $('#image5');

		 
		dropTarget1.on("dragover", function(event) {
			clearTimeout(dropTimer);
			if (event.currentTarget == dropTarget1[0]) {
				dropTarget1.addClass('over');
			}
			return false; // Required for drop to work
		});
		dropTarget2.on("dragover", function(event) {
			clearTimeout(dropTimer);
			if (event.currentTarget == dropTarget2[0]) {
				dropTarget2.addClass('over');
			}
			return false; // Required for drop to work
		});
		dropTarget3.on("dragover", function(event) {
			clearTimeout(dropTimer);
			if (event.currentTarget == dropTarget3[0]) {
				dropTarget3.addClass('over');
			}
			return false; // Required for drop to work
		});
		dropTarget4.on("dragover", function(event) {
			clearTimeout(dropTimer);
			if (event.currentTarget == dropTarget4[0]) {
				dropTarget4.addClass('over');
			}
			return false; // Required for drop to work
		});
		dropTarget5.on("dragover", function(event) {
			clearTimeout(dropTimer);
			if (event.currentTarget == dropTarget5[0]) {
				dropTarget5.addClass('over');
			}
			return false; // Required for drop to work
		});

		dropTarget1.on('dragleave', function(event) {
			if (event.currentTarget == dropTarget1[0]) {
				dropTimer = setTimeout(function() {
					dropTarget1.removeClass('over');
				}, 200);
			}
		});
		dropTarget2.on('dragleave', function(event) {
			if (event.currentTarget == dropTarget2[0]) {
				dropTimer = setTimeout(function() {
					dropTarget2.removeClass('over');
				}, 200);
			}
		});
		dropTarget3.on('dragleave', function(event) {
			if (event.currentTarget == dropTarget3[0]) {
				dropTimer = setTimeout(function() {
					dropTarget3.removeClass('over');
				}, 200);
			}
		});
		dropTarget4.on('dragleave', function(event) {
			if (event.currentTarget == dropTarget4[0]) {
				dropTimer = setTimeout(function() {
					dropTarget4.removeClass('over');
				}, 200);
			}
		});
		dropTarget5.on('dragleave', function(event) {
			if (event.currentTarget == dropTarget5[0]) {
				dropTimer = setTimeout(function() {
					dropTarget5.removeClass('over');
				}, 200);
			}
		});

		handleDrop1 = function(files){ 
			dropTarget1.removeClass('over');
			var file = files[0];
			if (file.type.match('image.*')) {
				resizeImage(file, 5000, function(result) { console.log('RESULT FILE:',files);
					$('#myImg1').attr('src', result); 
					$('#image1').hide();
					$('.resultImageWrapper1').show();
					$("input:file[id*=image1]").attr("value",file);

					$('input[type="file"]').attr("value", file);
					console.log('image:',$('input[type="file"]').attr("value", file));

				});
			} else {
				alert("That file wasn't an image.");
			}
		};
		handleDrop2 = function(files){
			dropTarget2.removeClass('over');
			var file = files[0];
			if (file.type.match('image.*')) {
				resizeImage(file, 1000, function(result) {
					$('#myImg2').attr('src', result);
					$('#image2').hide();
					$('.resultImageWrapper2').show();
				    $("input:file[id*=image2]").attr("value",file);

				});
			} else {
				alert("That file wasn't an image.");
			}
		};
		handleDrop3 = function(files){
			dropTarget3.removeClass('over');
			var file = files[0];
            // var file = files[1]; 			// Multiple files can be dropped. Lets only deal with the "first" one.
			if (file.type.match('image.*')) {
				resizeImage(file, 1000, function(result) {
					$('#myImg3').attr('src', result);
					$('#image3').hide();
					$('.resultImageWrapper3').show();
				    $("input:file[id*=image3]").attr("value",file);
				});
			} else {
				alert("That file wasn't an image.");
			}
		};
		handleDrop4 = function(files){
			dropTarget4.removeClass('over');
			var file = files[0];
            // var file = files[1]; 			// Multiple files can be dropped. Lets only deal with the "first" one.
			if (file.type.match('image.*')) {
				resizeImage(file, 1000, function(result) {
					$('#myImg4').attr('src', result);
				    $('#image4').hide();
				    $('.resultImageWrapper4').show();
					$("input:file[id*=image4]").attr("value",file);
				});
			} else {
				alert("That file wasn't an image.");
			}
		};
		handleDrop5 = function(files){
			dropTarget5.removeClass('over');
			var file = files[0];
            // var file = files[1]; 			// Multiple files can be dropped. Lets only deal with the "first" one.
			if (file.type.match('image.*')) {
				resizeImage(file, 1000, function(result) {
					$('#myImg5').attr('src', result);
				    $('#image5').hide();
				    $('.resultImageWrapper5').show();
					$("input:file[id*=image5]").attr("value",file);
				});
			} else {
				alert("That file wasn't an image.");
			}
		};

		dropTarget1.on('drop', function(event) {
			event.preventDefault(); // Or else the browser will open the file
			handleDrop1(event.dataTransfer.files);
		});
		dropTarget2.on('drop', function(event) {
			event.preventDefault(); // Or else the browser will open the file
			handleDrop2(event.dataTransfer.files);
		});
		dropTarget3.on('drop', function(event) {
			event.preventDefault(); // Or else the browser will open the file
			handleDrop3(event.dataTransfer.files);
		});
		dropTarget4.on('drop', function(event) {
			event.preventDefault(); // Or else the browser will open the file
			handleDrop4(event.dataTransfer.files);
		});
		dropTarget5.on('drop', function(event) {
			event.preventDefault(); // Or else the browser will open the file
			handleDrop5(event.dataTransfer.files);
		});
		
		
		fileInput1.on('change', function(event) {
			handleDrop1(event.target.files[0]);
			console.log('change:',event.target.files);
		});
		fileInput2.on('change', function(event) {
			handleDrop2(event.target.files[0]);
		});
		fileInput3.on('change', function(event) {
			handleDrop3(event.target.files[0]);
		});
		fileInput4.on('change', function(event) {
			handleDrop4(event.target.files[0]);
		});
		fileInput5.on('change', function(event) {
			handleDrop5(event.target.files[0]);
		});

		resizeImage = function(file, size, callback) {
			var fileTracker = new FileReader;
			fileTracker.onload = function() {
				var image = new Image();
				image.onload = function(){
					var canvas = document.createElement("canvas");
					/*
					if(image.height > size) {
						image.width *= size / image.height;
						image.height = size;
					}
					*/
					if(image.width > size) {
						image.height *= size / image.width;
						image.width = size;
					}
					var ctx = canvas.getContext("2d");
					ctx.clearRect(0, 0, canvas.width, canvas.height);
					canvas.width = image.width;
					canvas.height = image.height;
					ctx.drawImage(image, 0, 0, image.width, image.height);
					callback(canvas.toDataURL("image/png"));
				};
				image.src = this.result;
			}
			fileTracker.readAsDataURL(file);
			fileTracker.onabort = function() {
				alert("The upload was aborted.");
			}
			fileTracker.onerror = function() {
				alert("An error occured while reading the file.");
			}
		};
	});
	
	

</script>
