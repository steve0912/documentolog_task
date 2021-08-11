<?php 

class Employee
{
	public static function getEmployeeList()
	{
		$db = Db::getConnection();

		$sql = 'SELECT * FROM `employee`';

		$result = $db->prepare($sql);

		$result->setFetchMode(PDO::FETCH_ASSOC);

		$result->execute();

		$i = 0;
        $employee = array();
        while ($row = $result->fetch()) {
            $employee[$i]['EmployeeId'] = $row['EmployeeId'];
            $employee[$i]['ChiefId'] = $row['ChiefId'];
            $employee[$i]['Department'] = $row['Department'];
            $employee[$i]['Name'] = $row['Name'];
            $employee[$i]['Salary'] = $row['Salary'];
            $i++;
        }
        return $employee;

	}

	public static function getEmployeeRequestOne()
	{
		$db = Db::getConnection();

		$sql = 'SELECT Name FROM `employee` WHERE salary > 700';

		$result = $db->prepare($sql);

		$result->setFetchMode(PDO::FETCH_ASSOC);

		$result->execute();

		$i = 0;
        $employeeRequestOne = array();
        while ($row = $result->fetch()) {
  
            $employeeRequestOne[$i]['Name'] = $row['Name'];

            $i++;
        }
        return $employeeRequestOne;
	}

	public static function getEmployeeRequestTwo()
	{
		$db = Db::getConnection();

		$sql = 'SELECT Department FROM `Employee` WHERE ChiefId < 3';

		$result = $db->prepare($sql);

		$result->setFetchMode(PDO::FETCH_ASSOC);

		$result->execute();

		$i = 0;
        $employeeRequestTwo = array();
        while ($row = $result->fetch()) {
            $employeeRequestTwo[$i]['Department'] = $row['Department'];
            $i++;
        }
        return $employeeRequestTwo;
	}
}