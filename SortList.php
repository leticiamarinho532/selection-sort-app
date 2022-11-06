<?php

class SortLists
{
    public function sort($list)
    {
        $listLength = count($list);

        for ($j = 0; $j < $listLength; $j++) {
            $minimalValueIndex = $j;

            for ($i = $j; $i < $listLength; $i++) {
                if ($list[$i]  < $list[$minimalValueIndex]) {
                    $minimalValueIndex = $i;
                }
            }

            if ($list[$j] > $list[$minimalValueIndex]) {
                $auxilarVariable = $list[$j];
                $list[$j] = $list[$minimalValueIndex];
                $list[$minimalValueIndex] = $auxilarVariable;
            }
        }

        return $list;
    }
}
