<?php

namespace Core;

class View
{
    protected $path = __DIR__ . '/../App/Views';
    protected $page;
    protected ?array $data;

    public function render($page, $data = null)
    {
        $this->page = $page;
        $this->data = $data;
        include($this->path . '/' . $this->page . '.php');
        die();
    }
}
