<?php

namespace Rand;
/**
 * Created by PhpStorm.
 * User: zhuwene
 * Date: 2022/2/27
 * Time: 15:25
 */
class Ball
{
    public function number()
    {
        $red = [];
        while (count($red) < 6) {
            $num = rand(1, 33);
            if (in_array($num, $red)) {
                continue;
            } else {
                array_push($red, $num);
            }
        }
        sort($red);
        $blue = rand(1, 16);
        return "红区" . implode(',', $red) . ',蓝区:' . $blue;
    }
}