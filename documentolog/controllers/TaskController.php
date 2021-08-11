<?php 

class TaskController{

	public function actionIndex()
	{

		$employee = Employee::getEmployeeList();
		require_once(ROOT . '/views/task/index.php');
        return true;
	}

	public function actionRequestOne()
	{

		$employeeRequestOne = Employee::getEmployeeRequestOne();
		require_once(ROOT . '/views/task/task1.php');
        return true;
	}

	public function actionRequestTwo()
	{

		$employeeRequestTwo = Employee::getEmployeeRequestTwo();
		require_once(ROOT . '/views/task/task2.php');
        return true;
	}
}