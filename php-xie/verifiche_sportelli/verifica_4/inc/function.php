<?php
function data_db2user($date)
{
    $d = explode("-", $date);
    return $d[2] . "/" . $d[1] . "/" . $d[0];
}
function anni($data)
{
    $firstDate = new DateTime(date("Y-m-d"));
    $secondDate = new DateTime($data);
    $intvl = $firstDate->diff($secondDate);
    return $intvl->y;
    // metodo richiesto substr()
}