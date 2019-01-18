<?php
/**
 * Created by PhpStorm.
 * User: ${liutianwei}
 * Date: 2019/1/18
 * Time: 10:46
 */

namespace frontend\models;

class Wo implements \Finite\StatefulInterface
{
    private $state;

    public function getFiniteState()
    {
        return $this->state;
    }

    public function setFiniteState($state)
    {
        $this->state = $state;
    }

}