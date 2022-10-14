<?php

// data.php

function getData(){

    // tableau associatif des données

    $data = array(

        'titre_doc' => 'Bibliotheque',

        'titre_page' => 'Liste des livres',

        'date'  => date("d/m/Y"),

        // pour simplifier l'exemple, les données sont définies

        // statiquement (généralement elles sont extraites d'une BD)

        'biblio' => array(

            array('titre'=>'N ou M', 'nom'=>'christie', 'prenom'=>'agatha'),

            array('titre'=>'1984', 'nom'=>'orwell', 'prenom'=>'george'),

            array('titre'=>'Dune', 'nom'=> 'herbert', 'prenom'=>'frank')

        )

    );

    return $data;

}