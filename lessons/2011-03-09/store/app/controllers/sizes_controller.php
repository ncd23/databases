<?
class SizesController extends AppController {
	var $components = array('RequestHandler');
	var $helpers = array('Js' => array('Jquery'));
	
	function sizes_for_style($style=null) {
		$this->layout = 'ajax';
		if ( $this->RequestHandler->isAjax() ) {
			Configure::write('debug',0);
			$this->RequestHandler->setContent('json','application/json; charset=utf-8');
			$this->Size->contain(array(
				'Boot' => array(
					'conditions' => array('Boot.id'=>$style)
				)
			));
			$sizes = $this->Size->find('all',array(
				'fields' => array('name','value')
			));
			$sizes = Set::extract('/Boot/id/../../Size',$sizes);
			$this->set('sizes',utf8_encode(json_encode($sizes)));
		} else {
			header();
			die();
		}
	}
}