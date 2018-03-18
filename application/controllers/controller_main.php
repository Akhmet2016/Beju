<?php
//Ключевое слово extends говорит о том, что создаваемый класс является лишь "расширением" класса Controller_Main
class Controller_Main extends Controller
{
	function action_index()
	{
		$this->view->generate('main_view.php', 'template_view.php');
	}
}
?>