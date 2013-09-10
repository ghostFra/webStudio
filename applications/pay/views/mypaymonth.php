<?php echo $this->load->view('header'); ?>
<div class="container cf">
    <div class="main account_main">
        <div class="main_nav account_nav">
            <ul>
    	        <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/mypay"><span>我的充值中心</span></a></li>
                <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/myaccount"><span>交易明细查询</span></a></li>
                <li class="li_lv_1"><a href="<?php echo $this->baseUrl; ?>index/mypaypwd"><span>支付密码管理</span></a></li>
                <li class="li_lv_1 cur"><a href="<?php echo $this->baseUrl; ?>index/mypaymonth"><span>我开通的服务</span></a></li>
            </ul>
        </div>
        <div class="main_cont">
            <div class="main_title"><p><span>我已经开通的服务</span></p><a class="link" href="/help/gotopage?page=_p19#problem_list_19">如何开通自动续费？</a></div>
            <div class="service service_small"><ul class="service_list C_serviceList cf"></ul></div>
            <div class="main_title main_title_more"><p><span>推荐开通的服务</span></p></div>
            <div class="service service_small">
                <ul class="service_list cf">
				<?php foreach ($this->paymonthInfos as $paymonthInfo) { ?>
                    <li>
                        <div class="service_img_wrap"><div class="service_img"><img width="36" height="36" src="<?php echo $paymonthInfo['thumb']; ?>"></div><h5><?php echo $paymonthInfo['name']; ?></h5></div>
                        <div class="service_btns"><a href="<?php echo $this->baseUrl; ?>?paymonth=<?php echo $paymonthInfo['id']; ?>" class="ui_btn_small_em"><span>开通</span></a></div>
                    </li>
				<?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php echo $this->load->view('footer'); ?>