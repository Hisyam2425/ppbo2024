<?php
class Publisher {
    public $name;
    public $address;
    public $font;

    public function __construct($name, $address, $font) {
        $this->name = $name;
        $this->address = $address;
        $this->font = $font;
    }
}
