<?php

namespace Yangcheng88\Composertest;

class SayHello
{
    private $name;

    public function __construct($name='yangcheng')
    {
        $this->name = $name;
    }

    public function run()
    {
        echo $this->name . ' Hello ! v2!!!';
    }
}
