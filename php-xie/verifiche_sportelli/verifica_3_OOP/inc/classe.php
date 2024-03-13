<?php
class Persona
{
    private $id;
    public $nome;
    public $master;
    private $gender;


    //costruttore
    public function __construct($id, $nome, $master, $gender)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->master = $master;
        $this->gender = $gender;

    }


    public function getId()
    {
        return $this->id;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($g)
    {
        if ($g == "F" || $g == "M") {
            $this->gender = $g;
        }
    }





}