<?php
/** Toi Ba Lo */
defined('_JEXEC') or die;

?>

<style type="text/css">
    .vote-icon {
        width:20px;
        height:20px;
        padding:3px;
        z-index: 9999;
    }

    .unclicked {
        opacity:0.4;
        filter:alpha(opacity=40); /* For IE8 and earlier */
    }

    .vote-div img{
        border: 5px solid green;
    }

    #st-food div.title {
        margin:0px;
        font-size: 130%;
        color: #112FA7;
    }

    #st-food img {
        border: 5px solid green;
    }

    #st-food .span3 > div > img {
        width:95%;
    }
    #transport_start > li > a > div, #transport_end > li > a > div, #attraction_list > li > a > div   {
        width:50px;
        height:50px;
        background-size: cover;
    }

    @media (max-width: 400px) {
        #transport_start > li > a, #transport_end > li > a, #attraction_list > li > a {
            width:50px;
            height:50px;
            background-size: cover;
            padding:0px;
        }
    }

    @media (max-width: 600px) {
        .ip_slide {
            display:none;
        }
    }
    li img {
        width:80px;
        height:80px;
    }

    div .cost_title {
        text-align:left;
        font-size: 40px;
        color: palevioletred;
        font-family: 'Times New Roman';
        margin: 10px 0px;
    }

    .cost {
        text-align:right;
        font-size: 40px;
        color: lightseagreen;
    }

    @media (max-width: 400px) {
        .gross_sum {
            display:none;
        }

        li img {
            width:40px;
            height:40px;
        }

        div .cost_title {
            font-size: 30px;
        }

        .cost {
            font-size: 30px;
        }
    }
    .span1, .span11 {
        margin-left:0px;
    }
</style>

<div id="avatar-full-1-block">
<div class="content block-default-width">
<div class="avatar-module ">
<div class="module-content">
<div class="custom">
<div class="st-onepage">
<div class="st-projects onepage-appear" position="item-104">
<h1 class="st-heading">Thời Điểm</h1>
<div class="st-sub-heading">Thông Tin Cần Thiết Về Chuyến Đi</div>
    <div class="span6 offset3">
        <p style="width:230px;float:left">Thời gian đi</p>
        <div style="float:left" id="widget">
            <div id="widgetField">
                <span>28 July, 2008 &divide; 31 July, 2008</span>
                <a href="#">Select date range</a>
            </div>
            <div id="widgetCalendar" style="z-index:999;">
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="panel-group span12" id="accordion" style="margin-top:20px;">
        <div class="span6" style="margin-left:0px;">
            <?php
            include JPATH_COMPONENT."/../com_data/data.php";
            $month_info = GetMonthInfoData();

            for ($i = 1; $i <= 6; $i++) {
                echo '<div class="panel panel-default">';
                echo '<div class="panel-heading">';
                echo '   <h4 class="panel-title">';
                echo '       <a id="a'.$i.'" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'" class="collapsed">';
                echo '           <div style="width:50px;float:left;margin-top:20px;">'.$i.'</div>';
                echo '           <div style="width:50px;height:50px;float:left"><p class="'.$month_info[$i]['weather'].' weathericon" style="margin-top: -30px"></p></div>';
                echo '           <div style="width:50px;height:50px;background-size:cover;background-image: url(\'./templates/green/images/crowded/'.$month_info[$i]['crowd'].'\');float:left;"></div>';
                echo '           <div style="width:50px;height:50px;background-size:cover;background-image: url(\'./templates/green/images/money/'.$month_info[$i]['money'].'\');float:left;"></div>';
                echo '           <div style="clear:both;"></div>';
                echo '       </a>';
                echo '   </h4>';
                echo '</div>';
                echo '<div id="collapse'.$i.'" class="panel-collapse collapse" style="width:95%;background-color:'.$month_info[$i]['background_color'].';border:0px groove '.$month_info[$i]['background_border'].';">';
                echo '   <div class="panel-body">';

                for ($j = 1; $j <= 3; $j++) {
                    echo '       <div class="parent">';
                    echo '           <p class="info child">'.$month_info[$i]['content'][$j].'</p>';
                    echo '       </div>';
                }
                echo '   </div>';
                echo '</div>';
                echo '<div style="clear:both"></div>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="span6" >
            <?php
            for ($i = 7; $i <= 12; $i++) {
                echo '<div class="panel panel-default">';
                echo '<div class="panel-heading">';
                echo '   <h4 class="panel-title">';
                echo '       <a id="a'.$i.'" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'" class="collapsed">';
                echo '           <div style="width:50px;float:left;margin-top:20px;">'.$i.'</div>';
                echo '           <div style="width:50px;height:50px;float:left"><p class="'.$month_info[$i]['weather'].' weathericon" style="margin-top: -30px"></p></div>';
                echo '           <div style="width:50px;height:50px;background-size:cover;background-image: url(\'./templates/green/images/crowded/'.$month_info[$i]['crowd'].'\');float:left;"></div>';
                echo '           <div style="width:50px;height:50px;background-size:cover;background-image: url(\'./templates/green/images/money/'.$month_info[$i]['money'].'\');float:left;"></div>';
                echo '           <div style="clear:both;"></div>';
                echo '       </a>';
                echo '   </h4>';
                echo '</div>';
                echo '<div id="collapse'.$i.'" class="panel-collapse collapse" style="width:95%;background-color:'.$month_info[$i]['background_color'].';border:0px groove '.$month_info[$i]['background_border'].';">';
                echo '   <div class="panel-body">';

                for ($j = 1; $j <= 3; $j++) {
                    echo '       <div class="parent">';
                    echo '           <p class="info child">'.$month_info[$i]['content'][$j].'</p>';
                    echo '       </div>';
                }
                echo '   </div>';
                echo '</div>';
                echo '<div style="clear:both"></div>';
                echo '</div>';
            }
            ?>
        </div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>
</div>

<div id="avatar-full-2-block">
<div class="content block-default-width">
<div class="avatar-module ">
<div class="module-content">


<div class="custom">
<div class="st-onepage" id="transport_section">
<div class="st-projects onepage-appear" position="item-101">
    <h1 class="st-heading">Phương Tiện</h1>
    <div class="st-sub-heading">Cách Thức Để Đi</div>

    <div class="span6">
        <div class="span2" style="margin-bottom:20px;">
            <h2>Xuất Phát</h2>
        </div>
        <div class="span2" style="margin-bottom:20px;">
            <select id="city_start" style="width:100%">
                <?php
                    $city = GetStartCityData();

                    foreach ($city as $key => $value) {
                        echo '<option value="' . $key . 'Ba_Ria">' . $city[$key] . '</option>';
                    }
                ?>
        </select>
        </div>

        <ul class="span5 nav nav-tabs" id="transport_start">
            <?php
                $transport = GetStartTransportData();

                foreach ($transport as $key => $value) {
                    reset($transport);
                    echo '<li ' . ($key === key($transport)?'class="active"':'').'><a href="#' . $key . '_start" data-toggle="tab"><div style="background-image: url(\'./templates/green/images/transport/' . $transport[$key]['image_url'] . '\');"></div></a></li>';
            }
            ?>
        </ul>

        <div class="span5 tab-content" style="background-color:rgb(240, 223, 225);border:5px groove #FAB6C3;margin-bottom:20px;">
            <?php
                foreach ($transport as $key => $value) {
                    reset($transport);
                    echo '<div class="tab-pane' . ($key === key($transport)?' active':'').'" id="' . $key . '_start">'. $transport[$key]['description'].'</div>';
                }
            ?>
        </div>
    </div>

    <div class="span6">
        <div class="span2" style="margin-bottom:20px;">
            <h2>Trở Về</h2>
        </div>
        <div class="span2" style="margin-bottom:20px;">
            <select id="city_end" style="width:100%">
                <?php
                $city = GetEndCityData();

                foreach ($city as $key => $value) {
                    echo '<option value="' . $key . 'Ba_Ria">' . $city[$key] . '</option>';
                }
                ?>
            </select>
        </div>

        <ul class="span5 nav nav-tabs" id="transport_end">
            <?php
            $transport = GetEndTransportData();

            foreach ($transport as $key => $value) {
                reset($transport);
                echo '<li ' . ($key === key($transport)?'class="active"':'').'><a href="#' . $key . '_end" data-toggle="tab"><div style="background-image: url(\'./templates/green/images/transport/' . $transport[$key]['image_url'] . '\');"></div></a></li>';
            }
            ?>
        </ul>

        <div class="span5 tab-content" style="background-color:rgb(240, 223, 225);border:5px groove #FAB6C3;margin-bottom:20px;">
            <?php
            foreach ($transport as $key => $value) {
                reset($transport);
                echo '<div class="tab-pane' . ($key === key($transport)?' active':'').'" id="' . $key . '_end">'. $transport[$key]['description'].'</div>';
            }
            ?>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>

</div>
</div>

<div id="avatar-full-3-block">
    <div class="content block-default-width">
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-home onepage-disappear" position="item-105">
                            <ul class="span12 nav nav-tabs" id="attraction_list" style="margin-left:0px;">
                                <li class="active"><a href="#saigon_central_post_office" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/1_saigon_central_post_office.jpg');"></div></a></li>
                                <li><a href="#notre_dame_cathedral" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/2_notre_dame_cathedral.jpg');"></div></a></li>
                                <li><a href="#ben_thanh_market" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/3_ben_thanh_market.jpg');"></div></a></li>
                                <li><a href="#city_opera_house" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/4_city_opera_house.jpg');"></div></a></li>
                                <li><a href="#independence_palace" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/5_independence_palace.jpg');"></div></a></li>
                                <li><a href="#nha_rong_port" data-toggle="tab"><div style="background-image: url('./templates/green/images/attraction/place/6_nha_rong_port.jpg');"></div></a></li>
                            </ul>

                            <link rel="stylesheet" type="text/css" href="./templates/green/css/tooltip/jQuery.iPicture.css" />
                            <div class="span9" id="iPicture" data-interaction="hover" style="position: relative;margin-left:0px;">
                                <div class="ip_slide">
                                    <img class="ip_tooltipImg" src="./templates/green/images/Attraction/sai_gon_map.jpg">
                                    <div class="ip_tooltip ip_img32" style="top: 36%; left: 77%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Nhà thờ Đức Bà</p>
                                        <img attractionId="notre_dame_cathedral" alt="an image" src="./templates/green/images/Attraction/Place/2_notre_dame_cathedral.jpg" width="256" height="256" />
                                    </div>
                                    <div class="ip_tooltip ip_img32" style="top: 40%; left: 68%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Dinh Độc Lập</p>
                                        <img  attractionId="independence_palace" src="./templates/green/images/Attraction/Place/5_independence_palace.jpg" width="256" height="256" />
                                    </div>
                                    <div class="ip_tooltip ip_img32" style="top: 34%; left: 79%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Bưu điện thành phố</p>
                                        <img attractionId="saigon_central_post_office" alt="an image" src="./templates/green/images/Attraction/Place/1_saigon_central_post_office.jpg" width="256" height="256" />
                                    </div>
                                    <div class="ip_tooltip ip_img32" style="top: 44%; left: 84%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Nhà hát thành phố</p>
                                        <img attractionId="city_opera_house" src="./templates/green/images/Attraction/Place/4_city_opera_house.jpg" width="256" height="256" />
                                    </div>
                                    <div class="ip_tooltip ip_img32" style="top: 55%; left: 74%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Chợ Bến Thành</p>
                                        <img attractionId="ben_thanh_market" alt="an image" src="./templates/green/images/Attraction/Place/3_ben_thanh_market.jpg" width="256" height="256" />
                                    </div>
                                    <div class="ip_tooltip ip_img32" style="top: 67%; left: 93%;" data-button="moreblack" data-tooltipbg="bgblack" data-round="roundBgW" data-animationtype="rtl-slide">
                                        <p>Bến Nhà Rồng</p>
                                        <img attractionId="nha_rong_port" src="./templates/green/images/Attraction/Place/6_nha_rong_port.jpg" width="256" height="256" />
                                    </div>
                                </div>
                                <div style="clear:both"></div>
                            </div>

                            <div class="span3" id="attraction_info" style="overflow: auto;">
                                <div>
                                <span class="savesHover savesHover-1744950 " data-locationid="1744950" style="visibility: visible; display: block;">
                                    <span class="button_2011_grn copy_test_3 ">
                                        <span class="sprite-gradient1x32_grn gradient">
                                            <span class="saveStar">
                                                <img src="http://c1.tacdn.com/img2/x.gif" class="sprite-suitcase_white">
                                            </span>
                                            <span class="saveText">
                                                <span class="saves-hover-txt" style="display: inline;">Thêm vào</span>
                                                    <span class="saves-hover-txt-saved" style="display: none;">Đã thêm</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <div style="clear:both"></div>
                                </div>
                                <div ><h2 id="attraction_title"></h2></div>
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"><img src="./templates/green/images/icon/description.png" height="25px" width="25px"/><i id="attraction_description"></i></p>
                                <hr />
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"> <img src="./templates/green/images/icon/time.png" height="25px" width="25px"/> <b id="attraction_hour"></b></p>
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"> <img src="./templates/green/images/icon/price.png" height="25px" width="25px"/> <b id="attraction_price"></b></p>
                                <hr />
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"><img src="./templates/green/images/icon/address.png" height="25px" width="25px"/> <b id="attraction_address"></b></p>
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"><img src="./templates/green/images/icon/phone.png" height="25px" width="25px"/> <b id="attraction_phone"></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="avatar-full-4-block">
    <div class="content block-default-width">
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-team onepage-disappear" position="item-106" id="st-advice">
                            <h1 class="st-heading">Lời khuyên</h1>

                            <p class="st-sub-heading">Để chuyến du lịch thú vị hơn</p>
                            <div class="row-fluid">
                                <?php
                                $advice = GetAdviceData();

                                foreach ($advice as $key => $value) {
                                    echo '<div class="span3">';
                                    echo '<div class='. $advice[$key]['icon'] .'>&nbsp;</div>';
                                    echo '<div class="vote-div" track='. $key .' type="advice"><img src="./templates/green/images/icon/select.png" class="vote-icon select ' . ($advice[$key]['select']?'':'unclicked') . '"/><img src="./templates/green/images/vote/up.png" class="vote-icon up ' . ($advice[$key]['like']?'':'unclicked') .' "/></div>';
                                    echo '<div class="title">'. $advice[$key]['name'] . '</div>';
                                    echo '<div class="content">'. $advice[$key]['content'];
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="avatar-full-5-block" style="background-color:white">
    <div class="content block-default-width">
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-team onepage-disappear" position="item-107" id="st-food">
                            <h1 class="st-heading" style="color:green">Ẩm Thực</h1>

                            <p class="st-sub-heading" style="color:blue">Món ngon không nên bỏ lỡ</p>
                            <div class="row-fluid">
                                <?php
                                $food = GetFoodData();
                                $i = 1;
                                foreach ($food as $key => $value) {
                                    if ($i % 4 == 1)
                                        echo '<div class="span12">';
                                    echo '<div class="span3">';
                                    echo '<div><img src="./templates/green/images/'. $food[$key]['image_url'] .'"/></div>';
                                    echo '<div class="title">';
                                    echo '  <h2>' . $food[$key]['name'] . '</h2>';
                                    echo '<div class="vote-div" track='. $key .' type="food"><img src="./templates/green/images/icon/select.png" class="vote-icon select ' . ($food[$key]['select']?'':'unclicked') . '"/><img src="./templates/green/images/vote/up.png" class="vote-icon up ' . ($food[$key]['like']?'':'unclicked') .' "/></div>';
                                    echo '</div>';
                                    echo '<div class="content">'. $food[$key]['description'];
                                    echo '</div>';
                                    echo '</div>';

                                    if ($i % 4 == 0)
                                        echo '</div>';
                                    $i++;
                                }
                                if ($i % 4 == 1)
                                    echo '</div>';

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    li {
        float: left;
        margin-right: 5px;
        cursor: pointer;
    }

    li.vehicle_active, li.accommodation_active, li.food_active, li.transport_active, li.personal_expense_active, li.other_active {
        background: green;
    }

    ul {
        list-style-type: none;
        position: relative;
    }

    #total_cost {
        color: red;
    }

    .cost_info {
        position: absolute;
    }

    .clear {
        clear: both;
    }

    #vehicle_info, #accommodation_info, #food_info, #transport_info, #personal_expense_info, #other_info {
        float: left;
    }
</style>
<div id="avatar-body-bottom-block" position="item-108">
<div class="content block-default-width">
<div id="100" class="avatar-module ">
    <div class="module-content">


        <div class="custom">
            <div class="st-title">
                <h1 class="st-heading" style="color:rgb(223, 59, 59);">Chi phí</h1>

                <div class="st-sub-heading" style="margin-bottom:0px;">Hầu bao cần để đi</div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
</div>
<div id="101" class="avatar-module ">
<div class="module-content">
<div id="cost_info">
<div id="summary" class="span12">
    <div class="cost_title span12">
        <span class="gross_sum">Tổng chi phí</span> &nbsp;<select id="day_list" style="width:50px;font-size:30px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        Ngày

        <?php
            $totalCost = 0;

            foreach ($_SESSION['cost'] as $key => $value) {
                $totalCost += $value['totalCost'];
            }
        ?>
        <div id="total_cost" class="cost"><?php echo $totalCost; ?></div>
    </div>

</div>
<hr style="border-top: 1px solid #030303;border-bottom: 1px solid #000000;margin:0px; margin-left:30px;" class="span12"/>
<?php
    $cost = GetCostData();

    foreach ($cost as $key => $value) {
        $arr = $cost[$key]['type'];
        $temp_cost = $_SESSION['cost'][$key]['totalCost'];

        echo '<div id="'.$key.'" class="span12">';
        echo '<div class="cost_title span12">'.$value['name'].'<div id="'.$key.'_cost" class="cost">'.$temp_cost.'</div></div>';
        echo '<div class="span11">';
        echo '   <ul id="'.$key.'_option">';

        foreach($arr as $type => $type_value) {
            echo '       <li cost="'.$arr[$type]['cost'].'"'.(array_search($type,$_SESSION['cost'][$key]['element']) !== FALSE ?' class="'.$key.'_active"' : '').' type="'.$type.'">';
            echo '          <img src="./templates/green/images/'.$arr[$type]['image_url'].'" />';
            echo '       </li>';
        }
        echo '   </ul>';

        echo '    <div id="'.$key.'_info" class="accordion">';
        echo '       <h3>Thông tin</h3>';
        echo '       <div>';
        if ($cost[$key]['info'] != '')
            echo '<p>'.$cost[$key]['info'].'</p>';
        foreach($arr as $type => $type_value) {
            if ($arr[$type]['info'] != '')
            echo '<p>'.$arr[$type]['info'].'</p>';
        }

        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<br class="clear" />';
        echo '</div>';
    }
?>

<div style="clear:both"></div>
</div>
</div>
</div>
</div>
</div>
<script>
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            if ($('body').hasClass('avatar-responsive')) {
                var mainMenu = $('.avatar-nav-responsive > ul');

                mainMenu.find('li > span.pull').click(function (event) {
                    $(this.getParent()).find('ul:first').slideToggle();
                });

                $(window).resize(function () {
                    if ($(window).width() > 767) {
                        mainMenu.find('ul').removeAttr('style');
                    }
                });
            }
        });
    })(jQuery)
</script>
<script stype="text/javascript">
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            var goToTop = $('#avatar-go-to-top');
            goToTop.hide();

            // fade in #back-top
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        goToTop.fadeIn();
                    } else {
                        goToTop.fadeOut();
                    }
                });

                // scroll body to 0px on click
                goToTop.click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });
        });
    })(jQuery)
</script>
<script type="text/javascript">
jQuery.noConflict();
(function ($) {
    $(document).ready(function () {
        avatarTemplate.url.base = "http://www.beautiful-templates.com/demo/templates-joomla/st_green/";
        avatarTemplate.template.name = "st_green";
        avatarTemplate.template.params = {"template_panel_setting": "1", "active_responsive": "1", "load_jquery": "1", "template_showcase": "-1", "template_background": "0", "doctype": "5", "show_main_body": "1", "hide_menu_items": ['101'], "show_message": "1", "404_article": "", "template_width": "1200px", "avatar_header_block": "block-default-width", "avatar_header_inside_block": "block-default-width", "avatar_tool_block": "block-max-width-100", "avatar_body_top_block": "block-default-width", "avatar_body_middle_block": "block-default-width", "avatar_body_bottom_block": "block-default-width", "avatar_footer_inside_block": "block-default-width", "avatar_footer_block": "block-default-width", "avatar_full_1_block": "block-default-width", "avatar_full_2_block": "block-default-width", "avatar_full_3_block": "block-default-width", "avatar_full_4_block": "block-default-width", "avatar_full_5_block": "block-default-width", "avatar_body_bottom_block": "block-default-width", "avatar_full_6_block": "block-default-width", "top_left": 20, "top_right": 80, "promo_top_left": 33.33, "promo_top_right": 33.33, "promo_bottom_left": 33.33, "promo_bottom_right": 33.33, "left": 23, "right": 23, "inner_left": 23, "inner_right": 23, "footer_left": 33.33, "footer_right": 33.33, "link_color": "", "hover_color": "", "body_font": "", "menu_font": "", "google_font_api": "0", "google_font_api_key": "", "google_font_content": "", "heading_1": "", "heading_2": "", "heading_3": "", "heading_4": "", "heading_5": "", "heading_6": "", "customize_css": "", "go_to_top": "1", "go_to_top_text": "", "go_to_top_css": "", "css3_effect": "1", "css3_effect_scroll": ".avatar-css3-effect-scroll", "optimize": "0"};
        avatarTemplate.image.initEffects();
        avatarTemplate.layout.init();
        avatarTemplate.settingPanel.init();
        avatarTemplate.menu.init();
        avatarTemplate.css3effect.init();

        $(".note_select").click(function () {
            $("#frame").attr("src", "/green/templates/green/blog.php");
        });

        var startDay = new Date();
        var endDay = new Date();
        endDay = endDay.setDate(endDay.getDate()+5);
        var formatStyle = "d MMM, yyyy";
        var finishSelect = true;

        $('#widgetCalendar').DatePicker({
            flat: true,
            format: 'd B, Y',
            date: [new Date(), new Date()],
            calendars: 1,
            mode: 'range',
            starts: 1,
            onChange: function(formated) {
                finishSelect = !finishSelect;
                $('#widgetField span').get(0).innerHTML = formated.join(' &divide; ');
                startDay = Date.parseExact(formated[0], formatStyle);
                endDay = Date.parseExact(formated[1],formatStyle);

                if(finishSelect) {
                    $('#accordion .in').removeClass('in').height(0);
                    for (i = 1; i <= 12; i++) {
                        $('#collapse' + i).css('border',$('#collapse' + i).css('border').replace('5px','0px'));
                    }

                    var curr = startDay.getMonth() + 1;
                    $('#a' + curr).addClass('collapsed');
                    $('#collapse' + curr).css('border',$('#collapse' + curr).css('border').replace('0px','5px'));
                    $('#collapse' + curr).addClass('in').height('auto');
                    alert(startDay + ' ' + endDay);
                    $.ajax({
                        url: "index.php?option=com_data&format=raw",
                        type: "post",
                        data: {'request':'SetDay','StartDay':startDay, 'EndDay':endDay},
                        success: function(msg){
                            alert(msg);
                        },
                        error:function(){
                            alert("failure");
                        }
                    });
                }
            }
        });

        var state = false;
        $('#widgetField>a').bind('click', function(){
            $('#widgetCalendar').stop().animate({height: state ? 0 : $('#widgetCalendar div.datepicker').get(0).offsetHeight}, 500);
            state = !state;
            return false;
        });
        $('#widgetCalendar div.datepicker').css('position', 'absolute');

        $("#city_start").select2();
        $("#city_start").on("change", function(e) { $("#city").text($("#city_start").select2("data").text);
        });
        $("#day_list").on("change", function(e) {
            previousDay = day;
            day = parseInt($("#day_list").select2("data").text);

            recalculateTotalCost(true);

            $.ajax({
                url: "index.php?option=com_data&format=raw",
                type: "post",
                data: {'request':'SetNumOfDay','NumOfDay':day},
                success: function(msg){
                    if (msg != '')
                        setTimeout(function() {
                            $.bootstrapGrowl(msg, { offset: {from: 'top', amount: 60}, type: 'success', width: 'auto' });
                        }, 1000);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("some error " + errorThrown);
                }
            });
        });

        $("#day_list").select2();

        $("#city_end").select2();

        $("#day_list").select2("val","<?php echo $_SESSION['NumOfDay']; ?>");

        $('.accordion').accordion({
            collapsible: true,
            active: false
        });

        var day = 1;
        var previousDay = 1;

        var cost_name = ['vehicle','accommodation','food','transport','personal_expense','other'];

        function SetCost(category, choice, totalCost){
            $.ajax({
                url: "index.php?option=com_data&format=raw",
                type: "post",
                data: {'request':'SetCost','TotalCost':totalCost, 'Category':category, 'Choice':choice},
                success: function(msg){
                    if (msg != '')
                        setTimeout(function() {
                            $.bootstrapGrowl(msg, { offset: {from: 'top', amount: 60}, type: 'success', width: 'auto' });
                        }, 1000);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("some error " + errorThrown);
                }
            });
        }

        function SetClickCost(category, timesDay) {
            $('#' + category + '_option li').click(function () {
                $('.' + category + '_active').removeClass(category + '_active');
                $(this).addClass(category + '_active');

                var amt_to_add = $(this).attr('cost');

                if (timesDay) {
                    amt_to_add = amt_to_add / previousDay * day;
                }

                SetCost(category,$(this).attr('type'),amt_to_add);
                $('#' + category + '_cost').html(amt_to_add);

                recalculateTotalCost(false);
            })
        }

        SetClickCost('vehicle',false);
        SetClickCost('accommodation',true);
        SetClickCost('food',true);
        SetClickCost('transport',true);
        SetClickCost('personal_expense',true);

        $('#other_option li').click(function () {
            var other_cost = parseInt($('#other_cost').html());
            var value = parseInt($(this).attr('cost'));
            if ($(this).hasClass('other_active')) {
                $(this).removeClass('other_active');
                other_cost -= value;
            }
            else {
                $(this).addClass('other_active');
                other_cost += value;
            }
            $('#other_cost').html(other_cost);

            SetCost('other',$(this).attr('type'),other_cost);
            $('#other_cost').html(other_cost);

            recalculateTotalCost(false);
        })

        function recalculateTotalCost(update) {
            var total_cost = 0;
            var amt_to_add = 0;

            for (var i = 0; i < cost_name.length; i++) {
                amt_to_add = parseInt(document.getElementById(cost_name[i] + '_cost').innerHTML);

                if (update) {
                    if (1 <= i && i <= 4)
                        amt_to_add = amt_to_add / previousDay * day;

                    SetCost(cost_name[i],'', amt_to_add);
                    $('#' + cost_name[i] + '_cost').html(amt_to_add);
                }

                total_cost += amt_to_add;
            }
            $('#total_cost').html(total_cost);
        }

        $('.vote-icon').click(function () {
            var values = {};

            if ($(this).hasClass('select')) {
                values.source = "select";
            }
            else
                values.source = "like";

            if ($(this).hasClass('unclicked')) {
                $(this).removeClass('unclicked');
                values.action = "add";
            }
            else {
                values.action = "remove";
                $(this).addClass('unclicked');
            }

            values.id = $(this).parent().attr('track');
            values.type = $(this).parent().attr('type');
            $.ajax({
                url: "index.php?option=com_data&format=raw",
                type: "post",
                data: values,
                success: function(msg){
                    alert(msg);
                },
                error:function(){
                    alert("failure");
                }
            });
        })
    });
})(jQuery)
</script>

<script>

    var attraction_selected = [];
    var attraction_current = '';

    //jQuery.noConflict();
    function checkButton() {
        if (attraction_selected.contains(attraction_current))
        {
            jQuery('.saves-hover-txt').css('display', 'none');
            jQuery('.saves-hover-txt-saved').css('display', 'inline');
        }
        else
        {
            jQuery('.saves-hover-txt').css('display', 'inline');
            jQuery('.saves-hover-txt-saved').css('display', 'none');
        }
    }
    function changeAttractionInfo(message){
        attraction_current = message;
        jQuery('#attraction_list li').each(function() {
            if (jQuery(this).find('a').attr('href').replace('#','') == message)
                jQuery(this).addClass('active');
            else jQuery(this).removeClass('active');
        });

        jQuery.ajax({
            url: "index.php?option=com_data&format=raw",
            type: "post",
            data: {'request':'GetAttractionById','id':message},
            success: function(msg){
                var data = JSON.parse(msg);
                //alert(msg);

                jQuery('#attraction_title').html(
                    data.name
                );
                jQuery('#attraction_description').html(
                    data.description
                );
                jQuery('#attraction_hour').html(
                    data.hour
                );
                jQuery('#attraction_price').html(
                    data.price
                );
                jQuery('#attraction_address').html(
                    data.address
                );
                jQuery('#attraction_phone').html(
                    data.phone
                );

                if (data.select) {
                    jQuery('.saves-hover-txt').css('display','none');
                    jQuery('.saves-hover-txt-saved').css('display','inline');
                }
                else {
                    jQuery('.saves-hover-txt-saved').css('display','none');
                    jQuery('.saves-hover-txt').css('display','inline');
                }
                //checkButton();
            },
            error:function(){
                alert("failure");
            }
        });
    }

    (function ($) {
        $(document).ready(function () {
            jQuery('.saves-hover-txt').click(function(){
                jQuery(this).css('display', 'none');
                jQuery('.saves-hover-txt-saved').css('display', 'inline');

                //attraction_selected.push(attraction_current);

                jQuery.ajax({
                    url: "index.php?option=com_data&format=raw",
                    type: "post",
                    data: {'source':'select','id':attraction_current, 'action':'add','type':'attraction'},
                    success: function(msg){
                        alert(msg);
                    },
                    error:function(){
                        alert("failure");
                    }
                });
            });

            jQuery('.saves-hover-txt-saved').click(function(){
                jQuery(this).css('display', 'none');
                jQuery('.saves-hover-txt').css('display', 'inline');

                jQuery.ajax({
                    url: "index.php?option=com_data&format=raw",
                    type: "post",
                    data: {'source':'select','id':attraction_current, 'action':'remove','type':'attraction'},
                    success: function(msg){
                        alert(msg);
                    },
                    error:function(){
                        alert("failure");
                    }
                });
            });

            //slideshow
            jQuery('#attraction_list li').click(function (event) {
                changeAttractionInfo(jQuery(this).find('a').attr('href').replace('#',''));
            });
        });
    })(jQuery)
</script>
<script src="./templates/green/js/tooltip/ipicture-square.js"></script>
<script>
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            $("#iPicture").iPicture({
                animation: true,
                animationBg: "bgblack",
                animationType: "ltr-slide",
                button: "moreblack"
            });
        });
    })(jQuery)
</script>
<script type="text/javascript">
    jQuery.noConflict();
    (function ($) {
        jQuery(document).ready(function () {
            $('.nav-tabs li').click(function (event) {
                $.ajax({
                    url: "index.php?option=com_data&format=raw",
                    type: "post",
                    data: {'request':'SetTransport','transport':$(this).find('a').attr('href').replace('#','').replace('_start','').replace('_end',''), 'direction':$(this).parent().attr('id')},
                    success: function(msg){
                        alert(msg);
                    },
                    error:function(){
                        alert("failure");
                    }
                });
            });

            setTimeout(function () {
                var left_hei = $(".timeline-left").height();
                var right_hei = $(".timeline-right").height();
                var total_hei = 0;
                if (left_hei >= right_hei) {
                    total_hei = left_hei + 66;
                } else {
                    total_hei = right_hei + 66;
                }
                $("#st-content-showcase-timeline").css("height", total_hei + "px");
            }, 1000);

            $('#transport_start a:last').tab('show');
            $('#transport_end a:last').tab('show');
            $('#attraction_list a:last').tab('show');

            $('#accordion').collapse({
                toggle: false,
                parent:true
            });
        });
    })(jQuery);
</script>

