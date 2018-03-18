<?php
class Controller_Fullarticles extends Controller
{
	function __construct()
	{
		$this->model = new Model_Fullarticles();
		$this->view = new View();
	}
	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('fullarticles_view.php', 'template_view.php', $data);
	}
}
?>