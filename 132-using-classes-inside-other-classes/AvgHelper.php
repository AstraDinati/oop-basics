<?php
class AvgHelper
{
    public function getAvg($arr)
    {
        $length = count($arr);
        return array_sum($arr)/$length;
    }
    public function getMeanSquare($arr)
    {
        $sum = 0;
        $length = count($arr);
        foreach($arr as $elem){
            $sum += $elem ** 2;
        }
        return (pow($sum, 1/2))/$length;
    }
}