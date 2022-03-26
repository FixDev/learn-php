<?php
class Fruit
{
    public $name;
    protected $color;
    private $weight;

    function set_name($n)
    {
        $this->name = $n;
    }

    protected function set_color($n)
    {
        $this->color = $n;
    }

    private function set_weight($n)
    {
        $this->weight = $n;
    }
}
$manggo = new Fruit();
$manggo->set_name('Manggo'); // Ok
$manggo->set_color('Yellow'); // Error
$manggo->set_weight('300'); // Error
