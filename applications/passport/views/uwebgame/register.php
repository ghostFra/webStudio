<?php echo $this->load->view($this->prefix . '/header'); ?>
<div class="zc_main">
	<div class="zc_main_l fl">
    	<ul>
        	<li>
            	<a href="#" class="zc_blx cur"><span class="zc_title"><i class="spself"></i>诺瓦号<i class="new"></i></span><span class="tip">自动分配账号，快速注册</span></a>
            </li>
         	<li>
            	<a href="#" class="zc_blx cur"><span class="zc_title"><i class="spself yb"></i>邮箱账号<i class="new"></i></span><span class="tip">自动分配账号，快速注册</span></a>
            </li>
        </ul>
    </div>
    <div class="zc_main_r fl">
    	<div class="zc_main_r_con">
        	<div class="zc_reg_top"><span>建议&nbsp;<i class="zc_reg_ts">你实名注册</i></span>快速注册米米号，开始快乐之旅</div>
            <div class="reg_row">
            	<label class="lable">自定义账号：</label><div class="reg_div"><span class="reg_span">自定义账号由6-20个字符组成，可用数字、字母、下划线</span>
            <input type="text" class="zc_reg" />
            </div></div>
            <div class="reg_row">
            	<label class="lable">设置密码：</label><div class="reg_div"><span class="reg_span">密码由6-16个字符组成，可用数字、字母、下划线</span>
            <input type="text" class="zc_reg" />
            </div></div>
            <div class="reg_row">
            	<span class="safe_none"> </span>
            </div>
            <div class="reg_row">
            	<label class="lable">确认密码：</label><div class="reg_div"><span class="reg_span">请再次输入密码</span>
            <input type="text" class="zc_reg" />
            </div></div>
            <div class="rsess_row">
            	<label class="label">验证码：</label><div class="reg_div"><span class="reg_span"></span>
            <input type="text" class="zc_reg" />
            </div></div>
            <div class="check_row">
            	<div class="check"></div><span class="gray">我已阅读并同意《<a href="#" class="fbgray">诺瓦传说服务条款</a>》</span>
            </div>
            <div class="reg_botton"><a href="#" class="ljzc">立即注册</a></div>
         </div>
    
    </div>

</div>
<?php echo $this->load->view($this->prefix . '/footer'); ?>