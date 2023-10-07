<?php

namespace App\Http\Controllers;

use App\Core\Controller;
if(!defined(SECURITY)){exit();}
class IndexController extends Controller {
	public function index(){
        //var_dump($this->routes);
        //хидер
		$header = $this->view->parsein($this->view->create('header'));
        $this->view->parseprint(array('tmp' => PUBLICTMP), $header);
        //Тело страниц
        $page1 = $this->view->parsein($this->view->create('page1'));
        $this->view->parseprint(array('tmp' => PUBLICTMP), $page1);

        $page2 = $this->view->parsein($this->view->create('page2'));
        $this->view->parseprint(array('tmp' => PUBLICTMP), $page2);

        $page3 = $this->view->parsein($this->view->create('page3'));
        $this->view->parseprint(array('tmp' => PUBLICTMP), $page3);

        $page4 = $this->view->parsein($this->view->create('page4'));
        $this->view->parseprint(array('tmp' => PUBLICTMP), $page4);
        
        //Футер                                            Тут название tpl файла
        $footer = $this->view->parsein($this->view->create('footer'));
        $this->view->parseprint(array('tmp' => PUBLICTMP), $footer);
	}
}

?>