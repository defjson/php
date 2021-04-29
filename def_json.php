<?php

/**
 * @param $url
 * @param $data
 * @return false|string
 */
function def_json($url, $data)
{
    $json = json_encode($data);
    file_put_contents($url, $json);
    return $json;
}
