<form action="" method="post" accept-charset="<?php echo Kohana::$charset ?>">
<p>Enter an  key and value:<br/>
<dl>
	<dt><?php echo HTML::anchor('http://htmlpurifier.org/live/configdoc/plain.html', 'Configuration Key') ?></dt>
	<dd><?php echo Form::input('key', $key) ?></dd>

	<dt>New Value</dt>
	<dd><?php echo Form::input('value', $value) ?></dd>
</dl>
</p>
<button type="submit">Change Config</button>
</form>

<?php if (isset($key)): ?>
<p>Changed the value of <tt><?php echo HTML::chars($key) ?></tt>:<br/>
	<?php echo Kohana::debug($before) ?>
	<?php echo Kohana::debug($after) ?>
</p>
<?php endif ?>
