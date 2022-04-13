<?php

namespace App\Console;

use Phalcon\Cli\Task;


class MainTask extends Task
{
    public function mainAction()
    {
        echo 'This is the default task and the default action' . PHP_EOL;
    }
    public function addAction($name, $email)
    {
        $this->mongo->users->userlist->insertOne(['name' => $name, 'email' => $email]);
        echo "Inserted" . PHP_EOL;
    }
}
