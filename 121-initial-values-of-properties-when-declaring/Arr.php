<?php
class Arr
{
    private $numbers = [];
    public function add($arr)
    {
        $this->numbers = array_merge($this->numbers, $arr);
    }
    public function getAvg()
    {
        $length = count($this->numbers);
        return array_sum($this->numbers)/$length;
    }
}