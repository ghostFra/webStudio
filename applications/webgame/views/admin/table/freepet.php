<?php 
$this->showStr = <<<EXTSHOWSTR
<a href="javascript: $('#extType').val(1); showInfo(); void(0);">宠物释放信息</a>

检索指定宠物：<input type="text" name="id" id="id" value="" />
<a href="javascript: $('#extType').val(2); showInfo(); void(0);">指定宠物释放信息</a>
</div>
<input type="hidden" name="extType" id="extType" value="" />
EXTSHOWSTR;
$this->load->view('admin/table/baseTable'); 
?>