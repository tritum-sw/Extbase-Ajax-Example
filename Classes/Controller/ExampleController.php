<?php

class Tx_AsAjaxexample_Controller_ExampleController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
     * @return void
     */
	public function initializeAction() {
		
		if(!isset($this->settings))
			throw new Exception('Please include typoscript to enable the extension.');
    }

    /**
     * @return void
     */
	public function indexAction() {
    }

    /**
     * @return void
     */
	public function ajaxAction() {
        $json = array(
            'jQuery',
            'ExtJS',
            'Prototype',
            'MooTools'
        );

       return json_encode($json);
	}
}

?>