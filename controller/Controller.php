<?php

namespace controller;

class Controller
{
    private $dbEntityRepository;
    
    public function __construct()
    {
        // echo "test instanstation<hr>";
        $this->dbEntityRepository = new \model\EntityRepository;
    }

    public function handleRequest()
    {
        // stockage  de la valeur de l'indice 'op' transmit dans l'url
        $op = isset($_GET['op']) ? $_GET['op'] : NULL;
        try
        {
            // ?op=add
            if($op == 'add' || $op == 'update') // si on ajoute ou on modifie, la méthode save() sera executée
                $this->save();
            // ?op=select
            elseif($op == 'select') // si on séléctionne le détail d'un employé, la méthode select() sera exécutée
                $this->select();
            // ?op=add
            elseif($op == 'delete') // si on supprime un employé, la méthode delete() sera exécutée
                $this->delete();
            else                    // dans les autres cas, nous allons afficher l'ensemble des employés, la méthode selectAll() sera exécutée
                $this->selectAll();
        }
        catch(\Exception $e) // le bloc catch permet de capturer les exceptions qui sont levées en cas d'erreur de traitement dans le bloc try
        {
            echo $e->getMessage();
        }
    }


    public function render($layout, $template, $parameters = array())
    {
        //extract() : fonction prédéfinie qui permet d'extraire chaque indice d'un ARRAY sous forme de variable
        extract($parameters); // $parameters['employes'] -->employes

        // permet de faire une mise en tampon, on commence à garder les données en mémoire
        ob_start();

        require "view/$template";

        $content = ob_get_clean(); // ici on va stocker la mise en mémoire, c'est à dire que l'on stocke dans la variable $content, le template lui-même, le résultat du require

        ob_start(); // on temporise la sortie d'affichage
        require "view/$layout"; // on inclue le layout qui sera notre gabart de base (header/nav/footer)

        // ob_end_flush(); va tous libérer et fait tout apparaitre dans le navigateur // envoie les données de la mise en mémoire.
        return ob_end_flush();

    }

    public function selectAll()
    {
        // echo 'méthode selectAll() | affichage de tout les employés';
        // $r = $this->dbEntityRepository->selectAllEntityRepo();
        // echo '<pre>'; print_r($r); echo '</pre>';

        $this->render('layout.php', 'affichage-employes.php', [
            'title' => 'Affichage de tous les employés',
            'data' => $this->dbEntityRepository->selectAllEntityRepo(), // retourne tous les employés
            'fields' => $this->dbEntityRepository->getFields(), // retourne le nom des champs/colonnes de la table SQL
            'id'=> 'id_' . $this->dbEntityRepository->table
        ]);



    }

    public function select()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        // var_dump($id);

        $this->render('layout.php', 'detail-employe.php', [
            'title'=> "Détail de l'employé n°$id",
            'data' => $this->dbEntityRepository->selectEntityRepo($id),
            'fields' => $this->dbEntityRepository->getFields(),
            'id'=> 'id_' . $this->dbEntityRepository->table
        ]);
    }

    public function delete($id){
        try {
            
        }
    }



}

