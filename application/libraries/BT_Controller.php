<?php
class Controller extends Controller_Core {

	public function __construct(){
		parent::__construct();
		$this->_set_user();
		$this->_set_connect();
	}


	private function _set_user(){
		if( $this->logged_in = Auth::instance()->logged_in() ) {
			$this->user = Auth::instance()->get_user();
			View::set_global('user',$this->user);
		}	
		View::set_global('logged_in', $this->logged_in);
	}

	private function _set_connect(){
		$this->db = Database::instance();
	}

	protected function _set_layout(){
		$css = array(
			"front/reset",
			"front/style",
			"front/grid",
			"front/ui.totop",
			"front/slider",
		);
		$js = array(
			"front/jquery-1.7.min",
			"front/jquery.ui.totop",
			"front/superfish",
			"front/jquery.ui.totop",
			"front/jquery.easing.1.3",
			
			"front/script",
			"jquery.mvc",
		);
		js::add($js);
		css::add($css);
	}








}