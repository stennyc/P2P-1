
<p class="b" style="margin-top:30px;">审核记录</p>
<div class="clearfix" style="border-bottom:1px solid #e3e3e3; padding:30px 90px;">
    <table class="data_table" border="0" cellspacing="1" style="background:#e3e3e3;width:100%;">
        <tbody>
            <tr style="background:#00bef0; color:#fff; height:40px;">
                <th width="40%" class="tc">
                	审核项目
                </th>
                <th width="40%" class="tc">
    				状态
                </th>
                <th width="20%" class="tc">
    				通过时间
                </th>
            </tr>
			<?php $_from = $this->_var['credit_file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'credit');if (count($_from)):
    foreach ($_from AS $this->_var['credit']):
?>
    		<?php if ($this->_var['credit']['passed'] == 1 || ( $this->_var['credit']['passed'] == 0 && $this->_var['credit']['user_id'] > 0 )): ?>
            <tr style="height: 40px;" class="wb">
                <td class="tc pl5 pr5">
    				<?php echo $this->_var['credit']['type_name']; ?>
                </td>
                <td class="tc pl5 pr5">
    				<?php if ($this->_var['credit']['passed'] == 1): ?>
    					<?php if ($this->_var['credit']['has_expire'] == 1): ?>
    					已过期
    					<?php else: ?>
    				 	<img src="<?php echo $this->_var['TMPL']; ?>/images/answer_success.jpg" alt="通过">
    					<?php endif; ?>
    				<?php else: ?>
    				资料已上传，待审核
    				<?php endif; ?>
                </td>
                <td class="tc pl5 pr5">
                	<?php if ($this->_var['credit']['has_expire'] == 0 && $this->_var['credit']['passed'] == 1): ?>
    	            	<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['credit']['passed_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?>
    				<?php endif; ?>
                </td>
            </tr>
            <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    		<?php if ($this->_var['u_info']['info_down']): ?>
			<tr style="height: 30px;" class="wb">
	            <td class="tc pl5 pr5">
					会员资料下载
	            </td>
	            <td class="tc pl5 pr5">
					 <img src="<?php echo $this->_var['TMPL']; ?>/images/answer_success.jpg" alt="有">
	            </td>
	            <td class="tc pl5 pr5">
	            	<a href="<?php echo $this->_var['u_info']['info_down']; ?>">下载查看</a>
	            </td>
	        </tr>
			<?php endif; ?>
			<?php if ($this->_var['deal']['agency_id'] > 0): ?>
			<tr style="height: 30px;" class="wb">
	            <td class="tc pl5 pr5">
					<a href="<?php
echo parse_url_tag("u:index|agency|"."id=".$this->_var['deal']['agency_id']."".""); 
?>" class="f_blue">机构担保--<?php echo $this->_var['deal']['agency_info']['name']; ?></a>
	            </td>
	            <td class="tc pl5 pr5">
					 <img src="<?php echo $this->_var['TMPL']; ?>/images/answer_success.jpg" alt="有">
	            </td>
	            <td class="tc pl5 pr5">
	            	&nbsp;
	            </td>
	        </tr>
			<?php endif; ?>
        </tbody>
    </table>
    <div class="prompt" style="padding: 10px 0 10px 54px; text-align:left;">
        <p style="line-height:30px;">
            <i style="margin-top:13px;"></i>将以客观、公正的原则，最大程度地核实借入者信息的真实性。但<?php 
$k = array (
  'name' => 'app_conf',
  'v' => 'SHOP_TITLE',
);
echo $k['name']($k['v']);
?> 不保证审核信息100%真实。
        </p>
        <p style="line-height:30px;">
            <i style="margin-top:13px;"></i>借入者若长期逾期，其个人信息将被公布
        </p>
    </div>
</div>