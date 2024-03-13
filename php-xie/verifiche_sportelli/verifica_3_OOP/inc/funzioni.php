<?php
function gender($g)
{
    if ($g == "M") {
        return "Maschio";
    }
    if ($g == "F") {
        return "Femmina";
    }
    return "";
}

function figlio($a)
{
    $id = $a->getId();
    if ($id != $a->master) {
        return true;
    }
    return false;
}

function cerca_figli($a_id, $records)
{
    foreach ($a_id as $id) {
        if (inside_array($id, $records)) {
            foreach ($records as $record) {
                $id_r = $record->getId();
                if (figlio($record) && $id == $id_r) {
                    echo $record->nome . "<br>";
                }
            }
        } else {
            echo "Non c'è nessuna persona con id = $id <br>";
        }
    }
}

function inside_array($cerca, $a)
{
    foreach ($a as $v) {
        $id = $v->getId();
        if ($id == $cerca)
            return true;
    }
    return false;
}