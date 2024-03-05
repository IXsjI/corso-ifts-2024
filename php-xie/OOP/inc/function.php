<?php
/**
 * converte la data da db a user
 * @param string $date data in formato Y-m-d
 * @return string data in formato d-m-Y
 */
function data_db2user($date)
{
    $d = explode("-", $date);
    return $d[2] . "/" . $d[1] . "/" . $d[0];
}