<?php
require_once 'SumHelper.php';
require_once 'AvgHelper.php';
class Arr
{
    private $nums = []; 
    private $sumHelper;
    private $avgHelper;

    public function add($num)
    {
        $this->nums[] = $num;
    }
    public function __construct()
    {
        $this->sumHelper = new SumHelper;
        $this->avgHelper = new AvgHelper;
    }
    public function getAvgMeanSum()
    {
        $nums = $this->nums;
        return $this->avgHelper->getAvg($nums) + 
        $this->avgHelper->getMeanSquare($nums);
    }
    public function getArr()
    {
        return $this->nums;
    }
    public function getSum23()
    {
        $num = $this->nums;
        return $this->sumHelper->getSum2($num) + 
        $this->sumHelper->getSum3($num);
    }
}
$arr = new Arr(); 
$arr->add(1);
$arr->add(2); 
$arr->add(3);  
echo '<pre>';
print_r($arr->getArr());
echo '</pre>';
echo $arr->getSum23();
echo '<br>';
echo $arr->getAvgMeanSum();