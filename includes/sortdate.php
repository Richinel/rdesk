<?php

function sortDate($postDate) {
    $seconds = time() - $postDate;

    /*** return value ***/
    $ret = "";

    /*** get the days ***/
    $days = bcmod(intval($seconds) / 86400, 7);
    if($days == 1) {
    	$ret .= "$days day, ";
    } elseif($days > 1) {
    	$ret .= "$days days, ";
    }
    /*** get the hours ***/
    $hours = bcmod(intval($seconds) / 3600, 24);
    if($hours == 1 ) {
        $ret .= "$hours hour, ";
    } elseif($hours > 1 ) {
    	$ret .= "$hours hours, ";
    }

    /*** get the minutes ***/
    $minutes = bcmod((intval($seconds) / 60),60);
    if($minutes == 1) {
        $ret .= "$minutes minute and ";
    } elseif($minutes > 1) {
    	$ret .= "$minutes minutes and ";
    }
  
    /*** get the seconds ***/
    $second = bcmod(intval($seconds),60);
    if($second <= 1) {
    	$ret .= "$second second ";
    } elseif($second > 1) {
    	$ret .= "$second seconds ";
    }

    /*** if week ago, remove date ***/
    $weeks = bcmod((intval($seconds) / 604800), 52);
    if($weeks == 1) {
    	$ret = "$weeks week ";
    } elseif($weeks > 1) {
    	$ret = "$weeks weeks ";
    }

    $ret .= "ago";

    return $ret;
}