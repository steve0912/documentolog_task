<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/template/css/style.css">
	<title>Document</title>
</head>
<body>
	<p> Имя сотрудников у которых оплата труда выше чем у руководителя. </p>
	<?php foreach($employeeRequestOne as $employeeItem):?>
		<p> <?php echo $employeeItem['Name'];?></p>
	<?php endforeach;?>
</body>
</html>