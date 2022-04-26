<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title></title>
 </head>
 <body>
<div>
	это представление
	действия act контроллера
</div>
<h1><?= $header ?></h1>
<ul>
	<li><?php echo $var1; ?></li>
	<li><?php echo $var2; ?></li>
	<li><?php echo $var3; ?></li>
	<?php foreach ($users as $user): ?>
		<li><?= $user; ?></li>
	<?php endforeach; ?>
</ul>
 </body>
</html>