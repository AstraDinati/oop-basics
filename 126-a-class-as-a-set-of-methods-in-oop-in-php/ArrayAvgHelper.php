<?php 
class ArrayAvgHelper
{
    public function getAvg1($arr)
    {
        return array_sum($arr);
    }
    public function getAvg2($arr)
    {
        return $this->calcSqrt($this->getSum($arr, 2), 1/2);
    }
    public function getAvg3($arr)
    {
        return $this->calcSqrt($this->getSum($arr, 3), 1/3);
    }
    public function getAvg4($arr)
    {
        return $this->calcSqrt($this->getSum($arr, 4), 1/4);
    }
    private function getSum($arr, $power)
    {
        $sum = 0;
        foreach($arr as $elem){
            $sum += $elem ** $power;
        }
        return $sum;
    }
    private function calcSqrt($num, $power)
    {
        return pow($num, $power);
    }
}

$ArrayAvgHelper = new ArrayAvgHelper;

$arr = [1,2,3,4];
echo $ArrayAvgHelper->getAvg1($arr);
echo '<br>';
echo $ArrayAvgHelper->getAvg2($arr);
echo '<br>';
echo $ArrayAvgHelper->getAvg3($arr);
echo '<br>';
echo $ArrayAvgHelper->getAvg4($arr);