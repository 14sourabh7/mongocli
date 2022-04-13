<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
        $users = $this->mongo->users->userlist->find();
        $arr = [];
        foreach ($users as $user => $details) {
            array_push($arr, array($details->name, $details->email));
        }
        $this->view->userlist = $arr;
    }
}
