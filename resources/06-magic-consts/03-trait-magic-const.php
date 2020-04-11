<?php
trait MyBusiness {
  public function developer()
  {
    return __TRAIT__;
  }
}

trait MyHoby {
  public $hoby = __TRAIT__;
}

class ILoveMySelfDoYouKnowThat
{
    use MyBusiness,MyHoby;
}

$me = new ILoveMySelfDoYouKnowThat;
echo $me->hoby;
