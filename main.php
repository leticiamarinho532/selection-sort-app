<?php

require_once 'SortList.php';

$sortList = new SortLists();

var_dump($sortList->sort([15,5,7,3,8,1]));
