<?php


namespace mist;


class View
{
    private $template;
    private $variable = array();
    public function display(string $template)
    {
        $this->template = dirname(__DIR__) . '/app/index/view/' . $template . '.html';
        return $this;
    }

    public function assign($key, $value)
    {
        $this->variable[$key] = $value;
        return $this;
    }

    public function __toString()
    {
        extract($this->variable);
        include_once $this->template;
        return '';
    }
}

