<?php

class Financier{

    private float $k;
    private float $tm;
    private float $nb_mois;

    public function __construct(float $_k,float $_ta,float $_ans){
        $this->k = $_k;
        $this->tm = $_ta/(12*100);
        $this->nb_mois = $_ans*12;
    }

    public function getCapital(){
        return $this->k;
    }

    public function calculeMensualiter(){
        

        $a = ($this->k*$this->tm)/(1-pow((1 + $this->tm),-$this->nb_mois));

        return $a;
    }



    public function genererTableau(){
        $chaine = "<table class='table table-dark table-striped' ><thead><tr><th>Numéro de <br>mois </th> <th>Par Intérêts </th><th>Partie <br>Amortissement </th><th>capital restant <br>dù </th><th>Mensualité <br>constante </th></thead><tbody>";
        $parinteret = 0;
        $parAmortissement = 0; 
        $capitalRestant = 0;
        $coutTotal = 0;
        for ($i=0; $i < $this->nb_mois; $i++) { 
           if ($i==0) {
            $parinteret = $this->k*$this->tm;
            $parAmortissement = $this->calculeMensualiter()-$parinteret;
            $capitalRestant = $this->k-$parAmortissement;
            $coutTotal += $parinteret;
            $chaine.="<tr><td>".($i+1)."</td><td>".round($parinteret,2)."</td><td>".round($parAmortissement,2)."</td><td>".round($capitalRestant,2)."</td><td>".round($this->calculeMensualiter(),2)."</td></tr>";
           }else{
            $parinteret = $capitalRestant*$this->tm;
            $parAmortissement = $this->calculeMensualiter()-$parinteret;
            $capitalRestant = $capitalRestant-$parAmortissement;
            $coutTotal += $parinteret;
            $chaine.="<tr><td>".($i+1)."</td><td>".round($parinteret,2)."</td><td>".round($parAmortissement,2)."</td><td>".round($capitalRestant,2)."</td><td>".round($this->calculeMensualiter(),2)."</td></tr>";
           }
        }
        
        $chaine.="</tbody><tfoot><tr><td>Coût total <br> du crédit:</td><td>".(round($coutTotal, 2)+$this->k)."</td><td></td><td></td><td></td></tr></tfoot></table>";
        
        return $chaine;
    }

   
}

?>
