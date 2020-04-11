<?php

class GreatClassName {

  public function getHowToBeMillionaire()
  {
    return __METHOD__;
  }

}

$method = new GreatClassName;
echo $method->getHowToBeMillionaire();
