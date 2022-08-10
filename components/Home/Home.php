<?php

use Viewi\BaseComponent;

class Home extends BaseComponent
{
    public int $count = 0;

    public function increment()
    {
        $this->count++;
    }
}
