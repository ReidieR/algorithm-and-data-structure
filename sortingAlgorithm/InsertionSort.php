<?php

class InsertionSort {
    
    /**
     * 插入排序
     *
     * @param array $arr
     * @return void
     */
    public function insertionSort(array $arr){
        $len = count($arr);
        if($len == 0 || $len == 1) return $arr;
        for($i=0;$i<$len-1;$i++){
            $cur = $arr[$i+1];
            $pre = $i;
            while($pre>=0 && $cur<$arr[$pre]){
                $arr[$pre+1] = $arr[$pre];
                $pre--;
            }
            $arr[$pre + 1] = $cur;
        }
        return $arr;
    }


}