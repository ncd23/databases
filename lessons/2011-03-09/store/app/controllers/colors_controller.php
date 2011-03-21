<?
class ColorsController extends AppController {
	var $components = array('RequestHandler');
	var $helpers = array('Js' => array('Jquery'));
	
	function colors_for_style($style=null) {
		$this->layout = 'ajax';
		if ( $this->RequestHandler->isAjax() ) {
			Configure::write('debug',0);
			$this->RequestHandler->setContent('json','application/json; charset=utf-8');
			$this->Color->contain(array(
				'Boot' => array(
					'conditions' => array('Boot.id'=>$style)
				)
			));
			$colors = $this->Color->find('all');
			$colors = Set::extract('/Boot/id/../../Color',$colors);
			$this->set('colors',utf8_encode(json_encode($colors)));
		} else {
			header();
			die();
		}
	}
}