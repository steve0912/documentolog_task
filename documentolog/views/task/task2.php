<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/template/css/style.css">
	<title>Document</title>
</head>
<body>
	<p>Название отделов где число сотрудников не превышает 3-х человек.</p>
	<?php foreach($employeeRequestTwo as $employeeItem):?>
		<p> <?php echo $employeeItem['Department'];?></p>
		<?php endforeach;?>
</body>
</html>