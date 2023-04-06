<?php
class Arr
{
    private $numbers = [];
    public function add($number){
        $this->numbers[] = $number;
        return $this;
    }
    public function addNumbers($numbers){
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this;
    }
    public function getSum(){
        return array_sum($this->numbers);
    }
}
echo (new Arr)->add(1)->add(2)->addNumbers([3,4])->getSum();