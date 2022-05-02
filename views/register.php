<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>furniture.mu- Register/Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>aftersale/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>aftersale/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>aftersale/css/custom.css">
   <style>
       #preloading {
            background: url('<?php echo base_url("application/assets/")?>imgs/preloader.gif') no-repeat center center;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 9999999;
        }

        #preloader1 {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #fff;
        /* change if the mask should have another color then white */
        z-index: 99;
        /* makes sure it stays on top */
        }

        .login-5::before {
            display: block;
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: .35;
            background: #000000;
        }

        .form-section5::before {
            background: #f1eeee;
        }
   </style>
   
</head>
<body>
    <!-- <div id="preloader1" style="display:none;">
        <div id="preloading" style="display:none;"></div>
    </div> -->
    <div id="preloading" style="display:none;"></div>
    <div class="login-4" id="bgpreloader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-section" id="bgformpreloader">
                        <div class="logo-2">
                            <a href="#">
                                <img width="350px" height="100px" src="<?php echo base_url('assets/')?>img/Furniture_mu.jpg" alt="logo">
                            </a>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link bg-transparent active" href="#register" data-toggle="tab" role="tab" aria-selected="false">
                                    <span>Register</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-transparent " href="#login" data-toggle="tab" role="tab" aria-selected="true">
                                    <span>Login</span>
                                </a>
                            </li>
                           
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade " role="tabpanel" id="login">
                                <div class="cuff">
                                    <form action="#" method="post" id="complainLogin">
                                        <h3>Track Your Aftersales Complaint</h3>
                                        <div class="form-group form-box">
                                            <input type="email" name="email" class="input-text" placeholder="Email Address">
                                        </div>
                                        <div class="form-group form-box">
                                            <input type="text" name="Password" class="input-text" placeholder="order no">
                                        </div>
                                        <div class="form-group form-box ">
                                            <div class="col-md-12">
                                                <p id="question1">9 + 1=</p>
                                                <input id="ans1" type="text" class="form-control">
                                                <div id="message1">Please verify.</div>
                                                <div id="success1" style="display: none;">Validation complete :)</div>
                                                <div id="fail1" style="display: none;">Validation failed :(</div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 clearfix">
                                            <button type="submit" id="loginCust" class="btn-md btn-theme float-left">Login</button>   
											<input type="reset" id="resetRegi1" value="reset" style="display:none">
											<span id="rgMsg1"></span>
											<p style="margin-top: 10px;display: inline-block;">Please send an email to service@furniture.mu if you are unable to login</p>
                                        </div>       
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" role="tabpanel" id="register">
                                <div class="cuff">
                                    <form action="" method="post" id="complainRegister">
                                        <h3>Register your complaint</h3>
                                        <div class="form-group form-box">
                                            <div class="custom-length text-right">
                                                <a href="#" id="btnShow"><i class="far fa-question-circle"></i></a>
                                                <div id="dialog" style="display: none"></div>
                                            </div>
                                            <input type="text" name="order_number" id="order_number" class="input-text" placeholder="Order No">
                                        </div>
                                        <div class="form-group form-box">
                                            <div class="custom-length text-right">
                                                <a href="#" id="btnShow1"><i class="far fa-question-circle"></i></a>
                                             
                                                <div id="dialog1" style="display: none">
                                                </div>
                                            </div>
                                            <input type="text" name="purchase_date"  id="purchase_date" class="input-text" placeholder="Date of Purchase" onfocus="(this.type='date')" >
                                        </div>
                                        <div class="form-group form-box ">
                                            <div class="col-md-12">
                                                <p id="question"></p>
												<input id="ans" type="text" class="form-control">
												<div id="message">Please verify.</div>
												<div id="success">Validation complete :)</div>
												<div id="fail">Validation failed :(</div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 clearfix">
                                            <button type="submit" id="registerCust" class="btn-md btn-theme float-left">Register</button>
											<input type="reset" id="resetRegi" value="reset" style="display:none">
											<span id="rgMsg"></span>
											
											<p style="margin-top: 10px;display: inline-block;">Please send an email to service@furniture.mu if you are unable to login</p>
                                        </div>
                                    </form>
                               </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/')?>aftersale/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/')?>aftersale/js/jquery.validate.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script type="text/javascript">
jQuery.validator.addMethod("alpha_email", function(e, a) {
	return this.optional(a) || e.toLowerCase() == e.toLowerCase().match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/)
}, 'Please choose valid email-address.');

jQuery("#complainLogin").each(function(e, a) {
  jQuery(this).validate({
	   rules: {
		   email:{required: true,alpha_email: true},
		   password: {required: true}
	  },
	   messages: {
			email: "Please enter your Email.",
			password: {required: 'Please enter Password.'}
	   },
	   submitHandler: function(form) {   
		 var formData= new FormData(jQuery('#complainLogin')[0]);
		   jQuery.ajax({
				type: 'post',
				url: "<?php echo base_url('Register/login')?>",
				cache: false,
				data: formData,
				processData: false,
				contentType: false,
				beforeSend: function() {
                    $("#preloading").css("display", "block");
                    $("#bgpreloader").addClass("login-5");
                    $("#bgformpreloader").addClass("form-section5");
					jQuery('#loginCust').text('Verifing...');
					jQuery('#loginCust').attr('disabled','disabled');
				},
				success:function(data) {      
					var obj = JSON.parse(data);
					if(obj.status==true){
                        
						var id = obj.id;
						jQuery('#rgMsg1').css('display','block').html(obj.message);
						jQuery('#loginCust').text('Login');
						setTimeout(function(){
						   jQuery('#loginCust').removeAttr('disabled');
						   jQuery('#rgMsg1').css('display','none').html('');  
						   window.location = "<?php echo base_url('Userdash/')?>";
						  }, 4000);
							jQuery('#resetRegi').trigger('click');
					}else{
                        $("#preloading").css("display", "none");
                        $("#bgpreloader").removeClass("login-5");
                        $("#bgformpreloader").removeClass("form-section5");
                        $("#showMsg").html(obj.message);
                        $('#myRegModal').modal('show');
						jQuery('#loginCust').text('Login');
						jQuery('#loginCust').removeAttr('disabled');
						jQuery('#rgMsg1').css('display','block').html(obj.message);
						setTimeout(function(){
						   jQuery('#rgMsg1').css('display','none').html('');
                           
						}, 3000);
					}
				}
		   });

		}
   });  
});
jQuery("#complainRegister").each(function(e, a) {
  jQuery(this).validate({
	   rules: {
		   order_number:{required: true, number:true},
		   purchase_date: {required: true}
	  },
	   messages: {
			order_number: "Please enter your order number.",
			purchase_date: {required: 'Please enter purchase date.'}
	   },
	   submitHandler: function(form) {   
		 var formData= new FormData(jQuery('#complainRegister')[0]);
		   jQuery.ajax({
				type: 'post',
				url: "<?php echo base_url('Register/step1')?>",
				cache: false,
				data: formData,
				processData: false,
				contentType: false,
				beforeSend: function() {
                    $("#preloading").css("display", "block");
                    $("#bgpreloader").addClass("login-5");
                    $("#bgformpreloader").addClass("form-section5");
					jQuery('#registerCust').text('Submitting...');
					jQuery('#registerCust').attr('disabled','disabled');
				},
				success:function(data) {
					var obj = JSON.parse(data);
					if(obj.status==true){
						var id = obj.id;
                        $("#showMsg").html(obj.message);
                        $('#myRegModal').modal('show');
						jQuery('#rgMsg').css('display','block').html(obj.message);
						jQuery('#registerCust').text('Register');
						setTimeout(function(){
						   jQuery('#registerCust').removeAttr('disabled');
						   jQuery('#rgMsg').css('display','none').html('');  
						   window.location = "<?php echo base_url('Register/information/')?>"+id+'/?date='+obj.date;
						  }, 4000);
							jQuery('#resetRegi').trigger('click');
					}else{
                        $("#preloading").css("display", "none");
                        $("#bgpreloader").removeClass("login-5");
                        $("#bgformpreloader").removeClass("form-section5");
                        $('#myRegModal').modal('show'); 
						jQuery('#registerCust').text('Register');
						jQuery('#registerCust').removeAttr('disabled');
						jQuery('#rgMsg').css('display','block').html(obj.message);
						setTimeout(function(){
						   jQuery('#rgMsg').css('display','none').html('');
                          
						}, 3000);
					}
				}
		   });

		}
   });  
});
    $(function () {
        var fileName = 'Order-No.png';//;"Order-No.pdf";
        $("#btnShow").click(function () {
            $("#dialog").dialog({
                modal: true,
                title: fileName,
                width: 540,
                height: 450,
                buttons: {
                    Close: function () {
                        $(this).dialog('close');
                    }
                },
                open: function () {
                	var obj="<object data=\"{FileName}\" width=\"500px\" height=\"300px\"></object>";
                    // var object = "<object data=\"{FileName}\" type=\"application/image\" width=\"500px\" height=\"300px\">";
                    // object += "If you are unable to view file, you can download from <a href=\"{FileName}\">here</a>";
                    // object += " or download <a target = \"_blank\" href = \"https://get.adobe.com/reader/\">Adobe PDF Reader</a> to view the file.";
                    // object += "</object>";
                    obj = obj.replace(/{FileName}/g, "https://aftersale.furniture/furniture.mu/assets/aftersale/files/" + fileName);
                    $("#dialog").html(obj);
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        var fileName = "Order-Date.png";
        $("#btnShow1").click(function () {
            $("#dialog1").dialog({
                modal: true,
                title: fileName,
                width: 540,
                height: 450,
                buttons: {
                    Close: function () {
                        $(this).dialog('close');
                    }
                },
                open: function () {
                    var obj="<object data=\"{FileName}\" width=\"500px\" height=\"300px\"></object>";
                    // var object = "<object data=\"{FileName}\" type=\"application/image\" width=\"500px\" height=\"300px\">";
                    // object += "If you are unable to view file, you can download from <a href=\"{FileName}\">here</a>";
                    // object += " or download <a target = \"_blank\" href = \"https://get.adobe.com/reader/\">Adobe PDF Reader</a> to view the file.";
                    // object += "</object>";
                    obj = obj.replace(/{FileName}/g, "https://aftersale.furniture/furniture.mu/assets/aftersale/files/" + fileName);
                    $("#dialog1").html(obj);
                }
            });
        });
    });
</script>
<script>
	var total;
	function getRandom(){return Math.ceil(Math.random()* 20);}
	function createSum(){
		var randomNum1 = getRandom(),
			randomNum2 = getRandom();
		total =randomNum1 + randomNum2;
		$( "#question" ).text( randomNum1 + " + " + randomNum2 + "=" );  
		$("#ans").val('');
		checkInput();
	}
	function checkInput(){
		var input = $("#ans").val(), 
		slideSpeed = 200,
		hasInput = !!input, 
		valid = hasInput && input == total;
		$('#message').toggle(!hasInput);
		$('#registerCust').prop('disabled', !valid);  
		$('#success').toggle(valid);
		$('#fail').toggle(hasInput && !valid);
		
	}
	
	var total1;
	function getRandom1(){return Math.ceil(Math.random()* 20);}
	function createSum1(){
		var randomNum1 = getRandom1(),
			randomNum2 = getRandom1();
		total1 =randomNum1 + randomNum2;
		$( "#question1" ).text( randomNum1 + " + " + randomNum2 + "=" );  
		$("#ans1").val('');
		checkInput1();
	}
	function checkInput1(){
		var input = $("#ans1").val(), 
		slideSpeed = 200,
		hasInput = !!input, 
		valid = hasInput && input == total1;
		$('#message1').toggle(!hasInput);
		$('#loginCust').prop('disabled', !valid);  
		$('#success1').toggle(valid);
		$('#fail1').toggle(hasInput && !valid);
	}

	$(document).ready(function(){
		createSum();createSum1();
		$('button[type=reset]').click(createSum);
		$( "#ans" ).keyup(checkInput);
		$( "#ans1" ).keyup(checkInput1);
	});
	</script>
	
		
<style>
    	    
    @media (max-width:767px) {
    
    .form-section .logo-2 img {
            width: 100%;
            height: auto;
        }
    }
</style>
<script>
    // $(function() {
    //    // console.log(15);
    // $("#purchase_date").click(function(){
    //     $( "#purchase_date" ).datepicker({  autoHide: true,
    //         zIndex: 2048,
    //         format: 'dd/mm/yyyy',
    //         endDate: new Date()
    //         });
    // });
    //     //$( "#purchase_date" ).datepicker({  maxDate: new Date });
    // });
  
    $(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;    
    $('#purchase_date').attr('max', maxDate);
});

  
</script>
</html>

  <!-- The Modal -->
  <div class="modal fade" id="myRegModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <!-- <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> -->
        
        <!-- Modal body -->
        <div class="modal-body" id="showMsg">
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

