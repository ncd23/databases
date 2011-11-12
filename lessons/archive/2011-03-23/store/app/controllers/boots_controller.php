<?
class BootsController extends AppController {
	var $components = array('RequestHandler');
	
	function index() {
	
	}
	
	function details($style = null) {
		//make a json-like call which returns some html/xml
		$this->layout = 'ajax';
		if ( $this->RequestHandler->isAjax() ) {
			Configure::write('debug',0);
			$this->RequestHandler->setContent('json','application/json; charset=utf-8');
			$item = $this->Boot->findById($style);
			$this->set('item',$item);
		} else {
			header();
			die();
		}
	}
}