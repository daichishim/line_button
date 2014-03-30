<?php
/**
 * [admin] line_button
 *
 * @author			daichishim
 * @license			MIT
 */
?>
<?php echo $this->BcForm->create('LineButtonConfig', array('action' => 'index')) ?>
<table class="form-table">
	<tr>
		<th><?php echo $this->BcForm->label('LineButtonConfig.use', '利用設定') ?></th>
		<td>
			<?php echo $this->BcForm->input('LineButtonConfig.use', array('type' => 'checkbox', 'label' => '利用する')) ?>
		</td>
	</tr>
</table>

<div class="submit">
	<?php echo $this->BcForm->submit('保存', array('class' => 'button')) ?>
</div>
<?php echo $this->BcForm->end() ?>
