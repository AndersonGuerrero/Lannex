<?php
?>
</div>
<div id="subheader">
    <div class="row">
        <div class="twelve columns">
            <p class="left">
                <h2>No Existe</h2>
            </p>
            <p class="right">
<p class="error">
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php printf(
		__d('cake', 'La pagina %s no existe en el servidor.'),
		"<strong>'{$url}'</strong>"
	); ?>
</p>
            </p>
        </div>
    </div>
</div>


<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>
