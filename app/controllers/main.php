<?php defined('IN_APP') or die('Get out of here');

class Main_controller extends Controller {
	public function __construct() {
		parent::__construct();
		
		$this->helper->load(array('lkdto', 'crush'));

		//  Set template data
		$this->template->set(array(
			'language' => Config::get('language'),
			'title' => 'Hiya, world.',
			'heading' => 'Howdy, world!',
			'route' => $this->routes,
			
			'query_count' => $this->database->queryCount()
		));
		
		echo $this->template->render();
	}
	
	public function index() {
		echo $this->template->render('main');
	}
	
	public function help() {
		echo 'test';
	}
}