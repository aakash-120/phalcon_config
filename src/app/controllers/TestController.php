<?php
use Phalcon\Mvc\Controller;

class TestController extends Controller
{
    public function CheckConfigAction()
    {
        // echo "aakaash";
        // die();
        $config = $this->di->get('config');
        $this->view->appName = $config->get('app')->get("name");
    //     $this->view->appHost = $config->get('app')->get("host");
    //     $this->view->appUsername = $config->get('app')->get("username");
    //     $this->view->appPassword = $config->get('app')->get("password");
    //     $this->view->appDbname = $config->get('app')->get("dbname");
    // }
}