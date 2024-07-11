<?php
class Anagrafica
{
    private $id;
    public $nome;
    public $cognome;
    private $indirizzo;
    private $natoil;
    public $dataIsctizione;


    //costruttore
    public function __construct($id, $nome, $cognome, $indirizzo, $natoil, $dataIsctizione)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->indirizzo = $indirizzo;
        $this->natoil = $natoil;
        $this->dataIsctizione = $dataIsctizione;

    }


    public function getId()
    {
        return $this->id;
    }
    public function getNatoIl()
    {
        return $this->natoil;
    }
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }






}