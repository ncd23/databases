<?
class ColorsController extends AppController {
	var $components = array('RequestHandler');

	function colors_for_style($style=null) {
		$this->layout = 'ajax';
		if ( $this->RequestHandler->isAjax() ) {
			Configure::write('debug',0);
			$this->RequestHandler->setContent('JSON');
			$colors = null; //TODO: fix this...
			$this->set('colors',json_encode($colors)); 
		} else {
			header();
			die();
		}
	}
}