<?php
class Model_Fullarticles extends Model
{
	public function get_data()
	{
		//подключение бд
		require_once 'application/core/connection.php';
		//подключение к серверу
		$link = mysqli_connect($host, $user, $password, $database) 
    		or die("Ошибка " . mysqli_error($link));
		//выполнение операции с базой данных
		$query = "SELECT * FROM Article;";
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
		//закрываем подключение
		mysqli_close($link);
		return $result;
	}
}
?>