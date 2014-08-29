<?php require_once dirname(__FILE__). "/../patova.php";?>
<div class="well">
    HOLA
</div>

<?php if($edad == 0):?>
<h2>NO ESPECIFICO LA EDAD :(</h2>
<?php elseif($edad < 18):?>
    <button class="btn-danger btn-block">NO SE PERMITE LA ENTRADA</button>
<?php else:?>
    <button class="btn-success btn-block">INGRESAR</button>
<?php endif; ?>
