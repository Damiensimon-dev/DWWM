<?php
/**
 ** activation theme
 **/
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
};
function auto_custom_post_type()
{
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration */  
    $labels = array( /* Le nom au pluriel */
        'name'  => _x('Véhicules', 'Post Type General Name'),
        /* Le nom au singulier */
        'singular_name' => _x('vehicule', 'Post Type Singular Name'),
        /* Le libellé affiché dans le menu*/        'menu_name' => __('Véhicules'),
        /* Les différents libellés de l'administration */       'all_items' => __('Voir tous les véhicules'),
        'view_item'           => __('Voir les véhicules'),
        'add_new_item'        => __('Ajouter un véhicules'),
        'add_new'             => __('Ajouter nouveau véhicule'),
        'edit_item'           => __('Editer le véhicule'),
        'update_item'         => __('Modifier le véhicule'),
        'search_items'        => __('Rechercher un véhicule'),
        'not_found'           => __('Non trouvée'),
        'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
    );
    /* On peut définir ici d'autres options pour notre custom post type*/
    $args = array(
        'label'  => __('Automobiles occasions'),
        'description' => __('Tous sur nos occasions'),
        'menu_icon'      => 'dashicons-car',
        'labels' => $labels,
        /*On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)*/
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'Marque', 'Modelee', 'Annee', 'Kilometrage', 'custom-fields'),
        /*          * Différentes options supplémentaires       */
        'show_in_rest' => true,
        'hierarchical'        => true,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'vehicule'),
    );
    // On enregistre notre custom post type qu'on nomme ici "voiture" et ses arguments*/    
    register_post_type('vehicule', $args);
}
add_action('init', 'auto_custom_post_type', 0);
add_action('init', 'wpm_add_taxonomies', 0);
//On crée 3 taxonomies personnalisées: Année, Réalisateurs et Catégories de série.  
function wpm_add_taxonomies()
{
    // Taxonomie Année      
    // On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress     
    $labels_annee = array(
        'name'                          => _x('Années', 'taxonomy general name'),
        'singular_name'                 => _x('Année', 'taxonomy singular name'),
        'search_items'                  => __('Chercher une année'),
        'all_items'                     => __('Toutes les années'),
        'edit_item'                     => __('Editer l année'),
        'update_item'                   => __('Mettre à jour l année'),
        'add_new_item'                  => __('Ajouter une nouvelle année'),
        'new_item_name'                 => __('Valeur de la nouvelle année'),
        'separate_items_with_commas'    => __('Séparer les réalisateurs avec une virgule'),
        'menu_name'                     => __('Année'),
    );
    $args_annee = array(
        // Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard         
        'hierarchical'      => true,
        'labels'            => $labels_annee,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'voitures'),
    );
    register_taxonomy('annee', 'vehicule', $args_annee);
    // taxonomie Modele         
    $labels_Modele = array(
        'name'                       => _x('Modele', 'taxonomy general name'),
        'singular_name'              => _x('Modele', 'taxonomy singular name'),
        'search_items'               => __('Rechercher un Modele'),
        'popular_items'              => __('Modele  populaires'),
        'all_items'                  => __('Tous les Modele'),
        'edit_item'                  => __('Editer un Modele'),
        'update_item'                => __('Mettre à jour un Modele'),
        'add_new_item'               => __('Ajouter un nouveau Modele'),
        'new_item_name'              => __('Nom du nouveau Modele'),
        'separate_items_with_commas' => __('Séparer les Modeles avec une virgule'),
        'add_or_remove_items'        => __('Ajouter ou supprimer un  Modele'),
        'choose_from_most_used'      => __('Choisir parmi les Modele plus utilisés'),
        'not_found'                  => __('Pas de Modele trouvés'),
        'menu_name'                  => __('Modele'),
    );
    $args_Modele = array(
        'hierarchical'          => true,
        'labels'                => $labels_Modele,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array('slug' => 'voitures'),
    );
    register_taxonomy('modele', 'vehicule', $args_Modele);
    // marque du vehicule   
    $labels_marque = array(
        'name'                       => _x('marque du vehicule', 'taxonomy general name'),
        'singular_name'              => _x('marque de vehicule', 'taxonomy singular name'),
        'search_items'               => __('Rechercher une marque'),
        'popular_items'              => __('marques les plus populaires'),
        'all_items'                  => __('Toutes les marque'),
        'edit_item'                  => __('Editer une marque'),
        'update_item'                => __('Mettre à jour une marque'),
        'add_new_item'               => __('Ajouter une nouvelle marque'),
        'new_item_name'              => __('Nom de la nouvelle marque'),
        'add_or_remove_items'        => __('Ajouter ou supprimer une marque'),
        'choose_from_most_used'      => __('Choisir parmi les marque les plus utilisées'),
        'not_found'                  => __('Pas de marque trouvées'),
        'menu_name'                  => __('marque'),
    );
    $args_marque = array(
        // Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard      
        'hierarchical'          => true,
        'labels'                => $labels_marque,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'marque-vehicule'),
    );
    register_taxonomy('marque', 'vehicule', $args_marque);
        // kilometre du vehicule    
        $labels_kilometre = array(
            'name'                       => _x('kilometrage', 'taxonomy general name'),
            'singular_name'              => _x('kilometre', 'taxonomy singular name'),
            'search_items'               => __('Rechercher un kilometre'),
            'all_items'                  => __('Toutes les kilometre'),
            'edit_item'                  => __('Editer un kilometre'),
            'update_item'                => __('Mettre à jour un  kilometre'),
            'add_new_item'               => __('Ajouter un nouveaux kilometre'),
            'add_or_remove_items'        => __('Ajouter ou supprimer un kilometre'),
        );
        $args_kilometre = array(
            // Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard      
            'hierarchical'          => false,
            'labels'                => $labels_kilometre,
            'show_ui'               => true,
            'show_in_rest'          => true,
            'show_admin_column'     => true,
            'query_var'             => true,
            'rewrite'               => array('slug' => 'kilometre-vehicule'),
        );
        register_taxonomy('kilometrage', 'vehicule', $args_kilometre);
            // prix du vehicule     
    $labels_prix = array(
        'name'                       => _x('prix', 'taxonomy general name'),
        'singular_name'              => _x('prix de vehicule', 'taxonomy singular name'),
        'search_items'               => __('Rechercher un prix'),
        'all_items'                  => __('Toutes les prix'),
        'edit_item'                  => __('Editer un prix'),
        'update_item'                => __('Mettre à jour un prix'),
        'add_new_item'               => __('Ajouter un nouveau prix'),
        'add_or_remove_items'        => __('Ajouter ou supprimer une marque'),
    );
    $args_prix = array(
        // Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard      
        'hierarchical'          => true,
        'labels'                => $labels_prix,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'prix-vehicule'),
    );
    register_taxonomy('prix', 'vehicule', $args_prix);
}

function get_form() {
    $chaine = 0 ;
    if (!empty($_POST["email"]) ){
        $chaine = $_POST["email"];
    }else{
    $chaine =  '<form method="POST" action="" >
        <label for="email">inscription Newsletter email</label><br>
        <input type="mail" name="email" id="email" placeholder="Votre email">
        <input type="submit" value="inscription" name="envoi" id="envoi">
    </form>';
}
    return $chaine;
}
// [form] 
add_shortcode("form", "get_form");

