<?php
class Controller_Articles extends Controller
{
	function __construct()
	{
		$this->model = new Model_Articles();
		$this->view = new View();
	}
	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('articles_view.php', 'template_view.php', $data);
	}
}
?>