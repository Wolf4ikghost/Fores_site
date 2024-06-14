<?php

/**
 * DB Controller
 */
class DB
{
	private $connection;
	private $host;
	private $dbName;
	private $login;
	private $password;
	public $status;

	function __construct($host, $dbName, $login, $password)
	{
		$this -> host = $host;
		$this -> dbName = $dbName;
		$this -> login = $login;
		$this -> password = $password;
		try
		{
		    $this -> connection = new PDO("mysql:host=".$this -> host.";dbname=".$this -> dbName, $this -> login, $this -> password);
		    $this -> status = "Подключение установлено";
		}
		catch (PDOException $e)
		{
		    $this -> status = $e -> getMessage();
		}
	}

	// ***** Создание таблицы ***** //
	public function createTable($nameTable, $array)
	{
		$sql = "CREATE TABLE $nameTable (";
		foreach ($array as $name => $types)
		{
			$sql .= $name." ".$types.", ";
		}
		$sql[strrpos($sql, ",")] = ")";
		try
		{
			$this -> connection -> exec($sql);
			return "Таблица создана";
		}
		catch (PDOException $e)
		{
			return $e -> getMessage();
		}
	}

	// ***** Удаление таблицы ***** //
	public function deleteTable($nameTable)
	{
		$sql = "DROP TABLE $nameTable";
		try
		{
			$this -> connection -> exec($sql);
			return "Таблица удалена";
		}
		catch (PDOException $e)
		{
			return $e -> getMessage();
		}
	}

	// ***** Добавление строки в таблицу ***** //
	public function addRow($nameTable, $row)
	{
		$sql = "INSERT INTO $nameTable (";
		$arr = [];
		foreach ($row as $key => $value)
		{
			$sql .= $key.", ";
		}
		$sql[strrpos($sql, ",")] = ")";
		$sql .= " VALUES (";
		foreach ($row as $key => $value)
		{
			$sql .= "?, ";
			array_push($arr, $value); 
		}
		$sql[strrpos($sql, ",")] = ")";
		try
		{
			$this -> connection -> prepare($sql) -> execute($arr);
			return "Строка добавлена";
		}
		catch (PDOException $e)
		{
			return $e -> getMessage();
		}
	}

	// ***** Редактирование строки в таблице ***** //
	public function updateRow($nameTable, $id, $row)
	{
		$sql = "UPDATE $nameTable SET ";
		foreach ($row as $name => $value)
		{
			if (gettype($value) === 'string')
			{
				$sql .= $name."="."'".$value."'".", ";
			}
			else 
			{
				$sql .= $name."=".$value.", ";
			}
		}
		$sql[strrpos($sql, ",")] = " ";
		$sql .= "WHERE id=".$id;
		try
		{
			$this -> connection -> exec($sql);
			return "Запись обновлена";
		}
		catch (PDOException $e)
		{
			return $e -> getMessage();
		}
	}

	// ***** Удаление строки из таблицы ***** //
	public function deleteRow($nameTable, $id)
	{
		$sql = "DELETE FROM $nameTable WHERE id=$id";
		try
		{
			$this -> connection -> exec($sql);
			return "Запись удалена";
		}
		catch (PDOException $e)
		{
			return $e -> getMessage();
		}
	}

	// ***** Получение строки из таблицы ***** //
	public function selectRow($nameTable)
	{
		$sql = "SELECT * FROM $nameTable";
		try
		{
			return $this -> connection -> query($sql) -> fetch();
		}
		catch (PDOException $e)
		{
			return $e -> getMessage();
		}
	}

	// ***** Получение всех строк по условиям из таблицы ***** //
	public function selectRows($nameTable, $conditions)
	{
		$sql = "SELECT * FROM $nameTable WHERE ";
		if (count($conditions) > 1)
		{
			$count = 0;
			foreach ($conditions as $name => $value)
			{
				$count++;
				if (count($conditions) === $count)
				{
					if (gettype($value) === 'string')
					{
						$sql .= $name."="."'".$value."'";
					}
					else 
					{
						$sql .= $name."=".$value;
					}
				}
				else
				{
					if (gettype($value) === 'string')
					{
						$sql .= $name."="."'".$value."'"." AND ";
					}
					else 
					{
						$sql .= $name."=".$value." AND ";
					}
				}
			}
		}
		else
		{
			foreach ($conditions as $name => $value)
			{
				if (gettype($value) === 'string')
				{
					$sql .= $name."="."'".$value."'";
				}
				else 
				{
					$sql .= $name."=".$value;
				}
			}
		}
		try
		{
			return $this -> connection -> query($sql) -> fetchAll();
		}
		catch (PDOException $e)
		{
			return $e -> getMessage();
		}
	}
}

?>