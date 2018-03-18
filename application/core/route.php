<?php

class Route
{
	static function start()
	{
		//контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name = 'index';
		//explode -- Разбивает строку на подстроки
		/*
		В элементе глобального массива $_SERVER['REQUEST_URI'] содержится полный адрес по которому обратился пользователь.
		Например: example.ru/contacts/feedback
		*/
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		//Получаем имя контроллера
		//empty - определяет, установлена ли переменная.
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}

		// получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

		//добавляем префиксы
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
		//цепляем файл с классом модели (файла модели может и не быть)
		//strtolower -- Преобразует строку в нижний регистр
		$model_file = strtolower($model_name).'.php';//название файла
		$model_path = "application/models/".$model_file;//путь

		//file_exists -- Проверить наличие указанного файла или каталога
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		//цепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;

		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			/*
			правильно было бы кинуть здесь исключение, но для упрощения сразу сделаем редирект на страницу 404
			*/
			Route::ErrorPage404();
		}

		//создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			//вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			//для упрощения сразу сделаем редирект на страницу 404
			Route::ErrorPage404();
		}
	}

	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
}

?>