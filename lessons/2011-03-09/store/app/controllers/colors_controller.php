<?
class ColorsController extends AppController {
	var $components = array('RequestHandler');
	
	function colors_for_style($style=null) {
		$this->layout = 'ajax';
		if ( $this->RequestHandler->isAjax() ) {
			Configure::write('debug',0);
			$this->RequestHandler->setContent('JSON');
			$this->Color->contain(array(
				'Boot' => array(
					'conditions' => array('Boot.id'=>$style)
				)
			));
			$colors = $this->Color->find('all');
			$colors = Set::extract('/Boot/id/../../Color',$colors);
			$this->log(print_r($colors,true));
			$this->set('colors',json_encode($colors)); 
		} else {
			header();
			die();
		}
	}
}