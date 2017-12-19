<?php

/**
 *
 * @author Ammar Faizi <ammarfaizi2@gmail.com>
 * @license MIT
 * @link https://www.codewars.com/kata/5279f6fe5ab7f447890006a7/train/php
 */
function pickPeaks(array $arr)
{
	$peaks = ['pos' => [], 'peaks' => []];
    $isPeaked = 0;
    foreach ($arr as $key => $val) {
    	if ($isPeaked) {
    		$isPeaked = 0;
    		continue;
    	} else {
    		if (isset($arr[$key+1])) {
	    		if ($arr[$key+1] <= $val and !in_array($val, $peaks['peaks'])) {
	    			$peaks['pos'][] = $key;
	    			$peaks['peaks'][] = $val;
	    			$isPeaked = 1;
	    		}
	    	}
    	}
    }
    return $peaks;
}