<?php

function language_list(...$list)
{
    
    if (! $list == null) {
        return $list;    
    } else {
        return [];    
    }
}

function add_to_language_list($language_list, $language) {
    $language_list[] = $language;
    return $language_list;
}

function prune_language_list($language_list) {
    $list = $language_list;
    /** unset($list[0]);
    $newList = [];
    foreach($list as $l) {        
        $newList[] = $l;
    } **/
    array_shift($list);
    return $list;
}

function current_language($language_list) {
    if ($language_list != null) {
        return $language_list[array_key_first($language_list)];
    }
}

function language_list_length($language_list) {
    return count($language_list);
}