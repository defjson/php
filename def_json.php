<?php

/**
 * @param $url
 * @param array $data
 * @param null $callback
 *
 * @return false|string
 */
function def_json($url, array $data = [], $callback = null)
{
    $json = '{}';

    if (!empty($data)) {
        $json = json_encode($data);
    }

    file_put_contents($url, $json);

    if (is_callable($callback)) {
        $callback($json);
    }

    return $json;
}
