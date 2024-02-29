<?php
//metodo costrutto - viene richiamato ogni volta che si istanzia un nuovo oggetto
class Persona
{
    //proprietà
    public $nome;
    private $natoil;

    public static $numero = 0;


    //costruttore
    public function __construct($nome = "default", $natoil = '1970-01-01')
    {
        // echo "Bravo! Hai iniziato un uovo oggetto di nome: ";
        $this->nome = $nome;
        $this->natoil = $natoil;
        // echo $this->nome."<br>";

        Persona::$numero++; //anche all'esterno della classe
        // o si può usare self
        //self::$numero++; //solo dall'interno della classe
    }

    public function setNome($str)
    {
        $this->nome = $str;

    }

    //metodi setter e getter di natoil
    public function getNatoil()
    {
        //if() valutare le condizioni
        return $this->natoil;
    }

    public function getNatoil2User()
    {
        $d = explode("-", $this->natoil);
        return $d[2] . "/" . $d[1] . "/" . $d[0];
        //si può anche usare strtotime()
        //return date("d/m/Y", strtotime($this->natoil));

        //oppure data_db2user(), per corettezza bisogna includere il file anche qua inc/function.php
        //cioè funziona anche se hai solo incluso il file function.php nel file dove hai incluso questo file senza includere il file qui
        //ma bisogna usare include_once, se no da errore xk hai incluso il file due volte con  ..._once se hai già incluso quel file non lo ri-include

    }

    public function setNatoil($n)
    {
        //if ($n è corretta ....)
        $this->natoil = $n;
    }

    public function eta()
    {
        $anno_natoil = substr($this->natoil, 0, 4);
        return date("Y") - $anno_natoil;

    }

    public static function saluto($formale = true)
    {
        if (!$formale){
            return "Ciao!";
        }

        //nel statico non si usa this
        //se mattina -> buongiorno
        //se pomeriggio -> buon pomeriggio
        //se sera -> buona sera
        if (date("H") < 12 )
            return "Buongiorno!";
        if (date("H") < 17 )
            return "Buonpomeriggio!";
        return "Buonsera!";
    }

}

