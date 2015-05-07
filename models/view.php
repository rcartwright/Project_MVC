<?php

class ViewModel
{
    //dynamically adds a property
    public function add($name,$val)
    {
        $this->$name = $val;
    }
}
?>