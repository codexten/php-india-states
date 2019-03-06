<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 6/3/19
 * Time: 2:37 PM
 */

namespace codexten\india\states;


class IndiaStates
{
    public static function dropdown()
    {
        return require(__DIR__ . '/india-states.php');
    }

}