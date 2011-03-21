<?
class BootsController extends AppController {
	var $components = array('RequestHandler');
	
	function index() {
	
	}
	
	function details($style = null) {
debug('hi');
		//make a json-like call which returns some html/xml
		$this->layout = 'ajax';
		if ( $this->RequestHandler->isAjax() ) {
			Configure::write('debug',0);
			$this->RequestHandler->setContent('json','application/json; charset=utf-8');
			$item = $this->Boot->findById($style);
			//$colors = Set::extract('/Boot/id/../../Color',$colors);
$this->log(print_r($item,true));
			$this->set('item',utf8_encode(json_encode($item)));
		} else {
			header();
			die();
		}
	}
}