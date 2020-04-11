<?php

class MagicUmut {

  public $class_name = __CLASS__;
  public function getClassName()
  {
      return __CLASS__;
  }

}
$umut = new MagicUmut;
echo $umut->class_name;
