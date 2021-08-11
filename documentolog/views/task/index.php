<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/template/css/style.css">

	<title>Задание первое</title>
</head>
<body>
  <div class="table__container">
	<table>
  <tbody>
    <tr>
      <th>EmployeeID</th>
      <th>ChiefID</th>
      <th>Department</th>
      <th>Name</th>
      <th>Salary</th>   
    </tr>
     <?php foreach ($employee as $employeeItem): ?>
    <tr>
      <td><?php echo $employeeItem['EmployeeId']?></td>
      <td><?php echo $employeeItem['ChiefId']?></td>
      <td><?php echo $employeeItem['Department']?></td>
      <td><?php echo $employeeItem['Name']?></td>
      <td><?php echo $employeeItem['Salary']?></td>
    </tr>
	 <?php endforeach; ?>
  </tbody>
</table>
	<div class="wrapper__request">
	     <div class="request"><a href="/task/one/">Запрос номер 1</a></div>
		 <div class="request"><a href="/task/two/">Запрос номер 2</a></div>
		 <div class="request"><a href="">Таблица находится во второй нормальной форме</a></div>
		 </div>
     </div>
</body>
</html>
