<div class="clearfix">
	  <table class="data_table" id="refundTab" border="0" cellspacing="1" style="background:#e3e3e3; width:100%; margin:0 auto;">
	    <tbody>
	        <tr style="height: 30px;">
	       		 <th width="10%">序号</th>
	            <th width="20%">投标人</th>
	            <th width="20%">投标金额</th>
				<th width="10%">状态</th>
	            <th width="20%">投标时间</th>
	        </tr>
			<?php $_from = $this->_var['load_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'load');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['load']):
        $this->_foreach['name']['iteration']++;
?>
			<tr>
				<td class="wb tc">
				<?php echo $this->_foreach['name']['iteration']; ?>
				</td>
				<td class="wb tc" style="color:#00bef0;">
					<?php 
$k = array (
  'name' => 'utf_substr',
  'v' => $this->_var['load']['user_name'],
);
echo $k['name']($k['v']);
?>
				</td>
				<td class="wb tc f_red">
					<?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['load']['money'],
);
echo $k['name']($k['v']);
?>
				</td>
				<td class="wb tc">
					<?php if ($this->_var['load']['is_auto'] == 1): ?>自动<?php else: ?>手动<?php endif; ?>
				</td>
				<td class="wb tc">
					<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['load']['create_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?>
					<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['load']['create_time'],
  'f' => 'H:i',
);
echo $k['name']($k['v'],$k['f']);
?>
				</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	    </tbody>
	</table>
</div>


