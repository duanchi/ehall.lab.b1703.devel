<?php
class RouterPlugin extends Yaf\Plugin_Abstract {

	function __construct() {
	}

	public function routerStartup(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	}
	
	public function routerShutdown(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		$__tmp_module           =   explode(\CONF::get('application.host.suffix'), $_SERVER['HTTP_HOST'], 2);
		$__module               =   trim(explode(',', \CONF::get('application.modules'), 2)[0] ?? 'Index');
		$__domains              =   \CONF::get('application.host.prefix.domain');
		$__modules              =   \CONF::get('application.host.prefix.module');
		if (!empty($__domains)) {
			$__match            =   array_search($__tmp_module[0]);
			if (FALSE === $__match && in_array('*')) {
				$__match        =   '*';
			}
			$__module           =   $__modules[$__match] ?? $__module;
		}

		$request->setModuleName(ucfirst($__module));
	}
	
	public function dispatchLoopStartup(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {

	}
	
	public function preDispatch(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	}
	
	public function postDispatch(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	}
	
	public function dispatchLoopShutdown(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	}
	
	public function preResponse(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
	
	}
}