<?php
App::uses('PluginConfig', 'CakeSeo.Lib');

class SeoController extends AppController {  
	public $uses = [];  
	public $components = [];
	
    public function robots() {  
    	PluginConfig::init('CakeSeo');
    	
		if (Configure::read('debug')) {  
			Configure::write('debug', 0);  
		}

		$disallowUrls = Configure::read('CakeSeo.robots.disallow');

		$this->set(compact('disallowUrls'));  
		$this->RequestHandler->respondAs('text');  
		$this->viewPath .= '/text';  
		$this->layout = 'ajax';  
	}  
}
