<?php
/**
 * [admin] line_button
 *
 * @author			daichishim
 * @license			MIT
 */
?>
<?php echo $bcForm->create('LineButtonConfig', array('action' => 'index')) ?>
<table class="form-table">
	<tr>
		<th><?php echo $bcForm->label('LineButtonConfig.use', '利用設定') ?></th>
		<td>
			<?php echo $bcForm->input('LineButtonConfig.use', array('type' => 'checkbox', 'label' => '利用する')) ?>
		</td>
	</tr>
</table>

<div class="submit">
	<?php echo $bcForm->submit('保存', array('class' => 'button')) ?>
</div>
<?php echo $bcForm->end() ?>
