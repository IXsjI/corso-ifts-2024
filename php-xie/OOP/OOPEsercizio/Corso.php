<?php

class Corso
{
    public $nome;
    private $oreTotali;
    private $partecipanti = [];

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function setOreTotali($n)
    {
        if ($n > 0) {
            $this->oreTotali = $n;
        }
    }
    public function getOreTotali()
    {
        return $this->oreTotali;
    }

    /**
     * @paramPersona $p
     */
    public function aggiungiPartecipante($p)
    {
        //partecipano solo i maggorenni e quelli che hanno natoil corretto
        //verifico se natoil è il valore di default
        if (($p->getNatoil() != "0000-00-00") && ($p->eta() >= 18)) {
            $this->partecipanti[] = $p;
        }


    }

    /**
     * @param mixed $a array di partecipanti
     */
    public function aggiungiPartecipanti($a)
    {
        foreach ($a as $p) {
            $this->aggiungiPartecipante($p);
        }
    }

    public function numeroPartecipanti()
    {
        return count($this->partecipanti);
    }

}