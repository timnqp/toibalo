<?php

$doc = JFactory::getDocument();

$option =  JRequest::getVar('option'); // De phan loai trang

if ($option != "com_data") {
    $doc->addStyleSheet('./media/jui/css/bootstrap.min.css');
    $doc->addStyleSheet('./media/jui/css/bootstrap-theme.css');
    $doc->addStyleSheet('./media/jui/css/bootstrap-responsive.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/jquery.miniColors.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/grey.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/system.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/general.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/layout.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/core_joomla.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/responsive.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/template.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/font-awesome.css');
    $doc->addStyleSheet('templates/' . $this->template . '/css/rating/rating.css');
    //feedback box
    $doc->addStyleSheet('templates/' . $this->template . '/css/popup.min.css');

    $doc->addScript('./media/jui/js/jquery.min.js', 'text/javascript');
    $doc->addScript('./media/jui/js/jquery-noconflict.js', 'text/javascript');
    $doc->addScript('./media/jui/js/jquery-migrate.min.js', 'text/javascript');
    $doc->addScript('./media/system/js/tabs-state.js', 'text/javascript');
    $doc->addScript('./media/system/js/caption.js', 'text/javascript');

    $doc->addScript('./templates/' . $this->template . '/js/shortcodes.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/isotope.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/jquery.fancybox-1.3.4.pack.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/bootstrap.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/avatar-template.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/jquery.bootstrap-growl.min.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/rating/rating.js', 'text/javascript');
    $doc->addScript('./templates/' . $this->template . '/js/jquery.bpopup.min.js', 'text/javascript');

    if ($option == "com_profile") {
        //upload file
        $doc->addStyleSheet('templates/' . $this->template . '/css/upload/croppic.css');
        //use datepicker
        $doc->addStyleSheet('templates/' . $this->template . '/css/accordion/jquery-ui.css');
        $doc->addStyleSheet('templates/' . $this->template . '/css/jquery-ui-1.8.19.custom.css');

        //Profile
        $doc->addScript('./templates/' . $this->template . '/js/upload/croppic.js', 'text/javascript');
        $doc->addScript('./templates/' . $this->template . '/js/accordion/jquery-ui.js', 'text/javascript');
    }


    if ($option == "com_lichtrinh") {
        $doc->addStyleSheet('templates/' . $this->template . '/css/dropdown/select2.css');
        $doc->addStyleSheet('templates/' . $this->template . '/css/weather/weather.css');
        $doc->addStyleSheet('templates/' . $this->template . '/css/tooltip/jQuery.iPicture.css');
        //button to add attraction to list (copy from tripadvisor)
        $doc->addStyleSheet('templates/' . $this->template . '/css/button/button.css');
        //use datepicker
        $doc->addStyleSheet('templates/' . $this->template . '/css/accordion/jquery-ui.css');
        $doc->addStyleSheet('templates/' . $this->template . '/css/jquery-ui-1.8.19.custom.css');

        //Lich trinh
        $doc->addScript('./templates/' . $this->template . '/js/date.js', 'text/javascript');
        $doc->addScript('./templates/' . $this->template . '/js/vi-VN.js', 'text/javascript');
        $doc->addScript('./templates/' . $this->template . '/js/dropdown/select2.min.js', 'text/javascript');
        $doc->addScript('./templates/' . $this->template . '/js/jquery.easing.min.js', 'text/javascript');
        $doc->addScript('./templates/' . $this->template . '/js/tooltip/ipicture-square.js', 'text/javascript');
        $doc->addScript('./templates/' . $this->template . '/js/accordion/jquery-ui.js', 'text/javascript');
    }

    if ($option == "com_diadiem") {
        $doc->addStyleSheet('templates/' . $this->template . '/css/res-timeline.css');
        //Dia Diem
        $doc->addScript('./templates/' . $this->template . '/js/mootools-core.js', 'text/javascript');//Hinh Anh
        $doc->addScript('./templates/' . $this->template . '/js/jquery.sequence.js', 'text/javascript');//Am Thuc
        $doc->addScript('./templates/' . $this->template . '/js/load-images.js', 'text/javascript');//Am Thuc + Le Hoi
        $doc->addScript('./templates/' . $this->template . '/js/res-timeline.js', 'text/javascript');
    }
}

?>

<!--Vu's comment for testing TaiVT-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0066)http://www.beautiful-templates.com/demo/templates-joomla/st_green/ -->
<html lang="en-gb" dir="ltr" slick-uniqueid="3" xmlns:jdoc="http://www.w3.org/1999/XSL/Transform">
<head>
<jdoc:include type="head"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript">jQuery.noConflict();</script>
<base href=".">

<meta name="keywords" content="joomla templates, portfolio, one page, green, orange">
<meta name="author" content="Super User">
<meta name="description"
      content="Tôi Ba Lô">
<meta name="generator" content="Joomla! - Open Source Content Management">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

<title>Home</title>
<!-- <link rel="stylesheet" href="./css/jquery.miniColors.css" type="text/css" media="all"> -->
</head>

<body onLoad="init()" id="<?php if ($option == 'com_content') { echo "homepage";} else { echo "avatar-template";} ?>" class="avatar-responsive css3-effect  onepage-appear" style="opacity: 1;">
<script type="text/javascript">
    function PopUpFeedback(page, section) {
        jQuery('#popup').bPopup({
            position: ['auto', 100]
        });
        jQuery('#inputPage').val(page);
        jQuery('#inputSection').val(section);
    }

    function SubmitFeedback() {
        alert(jQuery('#inputName').val() + '\n' + jQuery('#inputEmail').val() + '\n' + jQuery('#rating').find('input').val() + '\n' + jQuery('#comment').val());

        return;
    }
</script>

<!--Loading Page-->
	<div id="loading">
		<div id="loading_content">
			<img src="templates/green/images/tbl_loadingpage.gif" border=0><br />
			<p>Đang nạp trang. Vui lòng đợi giây lát!</p>
		</div>
	</div>
	 
	<script>
		var ld=(document.all);
		var ns4=document.layers;
		var ns6=document.getElementById&&!document.all;
		var ie4=document.all;
		if (ns4)
		ld=document.loading;
		else if (ns6)
		ld=document.getElementById("loading").style;
		else if (ie4)
		ld=document.all.loading.style;
		function init()
		{
		if(ns4){ld.visibility="hidden";}
		else if (ns6||ie4) ld.display="none";
		}
	</script>
<!--End Loading Page-->

<!-- Top -->
<a name="top" id="top"></a>
<script>
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            $('#signUpLink').click(function(e) {
                e.preventDefault();
                jQuery('#signup').bPopup();
            });

            $.fn.raty.defaults.path = './templates/green/images/rating';

            $('#rating').raty({
                click: function(score, evt) {
                    //alert('ID: ' + $(this).attr('id') + "\nscore: " + score + "\nevent: " + evt);
                },
                cancel:true
            });
        });
    })(jQuery)
</script>
<div class="clearfix">
	
		
	<!-- 2. Main Menu-->
    <?php if ($option != 'com_content') { ?>
	<div class='navbar'>
		<div class='container'>
			<div class='row p_rel'>
				<div class='span2' style="margin-left:0px;text-align:center;">
					<a class="navbar-brand" href="." style="position:absolute;">
					<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" width="75px" style="margin-top:-10px;">
					</a>
				</div>
				<div class='span10 f_right' style="margin-left:0px;">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse collapse " style="display:block;">
						<ul class="nav navbar-nav">
							<?php if ($option == 'com_diadiem') { ?>
								<li class="item-102 current active">
									<a class=".st-top-slider" href="#">Hình Ảnh</a>	
								</li>
								<li class="item-103">
									<a class=".st-features" href="#">Đặc Trưng</a>
								</li>
								<li class="item-104">
									<a class=".st-projects"	href="#">Tham Quan</a>		
								</li>
								<li class="item-105">
									<a class=".st-home" href="#">Bài Viết</a>			
								</li>
								<li class="item-106">
									<a class=".st-team" href="#">Cảm Nghĩ</a>								
								</li>
								<li class="item-107">
									<a class="#avatar-full-5-block" href="#">Nhật Kí</a>
								</li>
								<li class="item-108">
									<a class="#avatar-body-bottom-block" href="#">Lễ Hội</a>
								</li>
								<li class="item-109">
									<a class="#avatar-full-1-example-block" href="#">Ẩm Thực</a>			
								</li>
                            <?php } else if ($option == 'com_lichtrinh') { ?>
                                <li class="item-104 current active">
                                    <a class=".st-projects"	href="#">Thời Điểm</a>
                                </li>
                                <li class="item-101">
                                    <a class="#transportation" href="#">Phương Tiện</a>
                                </li>
                                <li class="item-105">
                                    <a class=".st-home" href="#">Tham Quan</a>
                                </li>
                                <li class="item-106">
                                    <a class="#st-advice" href="#">Lời Khuyên</a>
                                </li>
                                <li class="item-107">
                                    <a class="#st-food" href="#">Ẩm Thực</a>
                                </li>
                                <li class="item-108">
                                    <a class="#avatar-body-bottom-block" href="#">Chi Phí</a>
                                </li>
							<?php } else if ($option == 'com_thongtin') { ?>
                                <li><a href="#" >Thông Tin</a></li>
                            <?php } else if ($option == 'com_video') { ?>
                                <li><a href="#" >Thông Tin</a></li>
                            <?php } else if ($option == 'com_profile') { ?>
                                <li><a href="#" >Profile</a></li>
                            <?php } else if ($option == 'com_data') { ?>
                            <?php } else { ?>
								<li><a href="#" >About</a></li>
								<li><a href="#" >Blog</a></li>
								<li class="sep" ></li><li>
								</li><li><a href="#" >Log in</a></li>
								<li class="signup"><a href="#" >Sign up</a></li>
							<?php } ?>
                                 <li><a href="?option=com_profile">Profile</a></li>
<!--                                <li><a href="#" id="signUpLink">Đăng Nhập</a></li>-->

                        </ul>
					</div>
					<div class="clearbreak"></div>
				</div>
			</div>
		</div>
	</div>
	<?php } else { ?>
		<div id='tbl_cover'>
			<ul>
				<li id='tbl_name'><a href='#'></a></li>
				<li id='tbl_coin'><a href='#'></a></li>
				<li id='tbl_picture'><a href='#'></a></li>
			</ul>
		</div>
	  <div id='tbl_search'>
		<div class='tbl_search_title'>Plan your perfect trip</div>
		<form class='tbl_search_form'>
			<div class='tbl_button'>
				<input id='search_des' onclick='?option=com_video' class='' title='Tim Kiem' type='submit' value="Let's go"/>
			</div>
			<select id="tbl_des" class="" name="option" tabindex="8" onfocus="" onchange="">
				<option value="com_video" selected="selected">Sai Gon</option>
				<option value="com_video">Ha Noi</option>
				<option value="com_video">Da Nang</option>
				<option value="com_video">Hue</option>
				<option value="com_video">Quang Ngai</option>
				<option value="com_video">...</option>
			</select>
		</form>
		<div class='clearfix'></div>
	</div>
	<?php  } ?>
	<!--Nav Bar -->

	<!-- 3. Content -->
    <?php if ($option != 'com_content'){?>

	    <div class='tbl_content'>
        <?php if (($option != 'com_diadiem') && ($option != 'com_lichtrinh')) { ?>
            <div class='container' id="wrapper">
        <?php } ?>
            <?php if (($option != 'com_content') && ($option != 'com_video')) { ?>
            <div id="tbl_nav" class="container">
                <ul>
                    <li class="xp"><a href=".">Xuat Phat</a></li>
                    <li class="kp  <?php if ($option == 'com_diadiem') {echo "active"; } ?>"><a href="?option=com_diadiem">Kham Pha</a></li>
                    <li class="kh <?php if ($option == 'com_lichtrinh') {echo "active"; } ?>"><a href="?option=com_lichtrinh">Ke Hoach</a></li>
                    <li class="tbl <?php if ($option == 'com_thongtin') {echo "active"; } ?>"><a href="?option=com_thongtin">Toi Ba Lo</a></li>
                </ul>
            </div>
            <?php } ?>

            <jdoc:include type="component" />
        <?php if (($option != 'com_diadiem') && ($option != 'com_lichtrinh')) { ?>
            </div>
        <?php } ?>
	</div> <!-- End Content -->
	<?php } ?>

	<!-- 4. Footer -->
    <?php if ($option != 'com_content') { ?>
	<div class='footer'>
		<div class='container'>
			<div class='row'>
				<div class='span12'>
					<p>Copyright &copy; 2014 Toibalo All rights reserved.</p>
						<ul >
							<li><a href="#">About</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li class='last'><a href="#">Contact Us</a></li>					
						</ul>
				</div>
			</div>
		</div>
	</div><!-- End Footer -->
    <?php } ?>
	<!-- 5. Debug-->
	<jdoc:include type="modules" name="debug" />
	
</div><!-- End Clearfix-->

<div id="popup">
    <span class="button b-close"><span>X</span></span>
    <form role="form" class="form-horizontal">
        <div class="form-group">
            <label for="inputPage" class="col-sm-2 control-label">Trang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPage" value="" disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="inputSection" class="col-sm-2 control-label">Mục</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSection" value="" disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Họ Tên</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Họ Tên">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="rating" class="col-sm-2 control-label">Đánh Giá</label>
            <div class="col-sm-10">
                <div id="rating"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="comment" class="col-sm-2 control-label">Nhận Xét</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="comment" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputFile" class="col-sm-2 control-label">Upload</label>
            <div class="col-sm-10">
                <input type="file" id="inputFile">
            </div>
        </div>
        <div class="form-group">


            <div class="col-sm-offset-5 col-sm-10" style="text-align:center">
                <button type="button" class="btn btn-default" onclick="SubmitFeedback();">Gửi</button>
            </div>
        </div>
    </form>
</div>

<div id="signup">
    <span class="button b-close"><span>X</span></span>
    <div class="tabbable">
    <ul class="nav nav-tabs">
        <li><a href="#signin_" data-toggle="tab">Đăng Nhập</a></li>
        <li><a id="note" href="#signup_" data-toggle="tab">Đăng Ký</a></li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane active" id="signin_">
        <form role="form" class="form-horizontal" style="margin-top: 20px;">
            <div class="form-group">
                <label for="lID" class="col-sm-4 control-label">ID</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="lID" placeholder="ID">
                </div>
            </div>
            <div class="form-group">
                <label for="lPassword" class="col-sm-4 control-label">Mật Khẩu</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="lPassword" placeholder="">
                </div>
            </div>
            <div class="form-group">


                <div class="col-sm-offset-3 col-sm-10" style="text-align:center">
                    <button type="button" class="btn btn-primary" onclick="SubmitFeedback();" style="width:200px;">Đăng Nhập</button>
                </div>
            </div>
        </form>
    </div>
    <div class="tab-pane" id="signup_">
        <form role="form" class="form-horizontal" style="margin-top: 20px;">
            <div class="form-group">
                <label for="sName" class="col-sm-4 control-label">Họ Tên</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="sName" placeholder="Họ Tên">
                </div>
            </div>
            <div class="form-group">
                <label for="sID" class="col-sm-4 control-label">ID</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="sID" placeholder="ID">
                </div>
            </div>
            <div class="form-group">
                <label for="sEmail" class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="sEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="sPassword" class="col-sm-4 control-label">Mật Khẩu</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="sPassword" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="sPassword2" class="col-sm-4 control-label">Mật Khẩu (lần 2)</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="sPassword2" placeholder="">
                </div>
            </div>
            <div class="form-group">


                <div class="col-sm-offset-3 col-sm-10" style="text-align:center">
                    <button type="button" class="btn btn-primary" onclick="SubmitFeedback();" style="width:200px;">Đăng Ký</button>
                </div>
            </div>
        </form>
    </div>

    </div>
    </div>

</div>

</body>

</html>