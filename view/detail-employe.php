<?php

// echo '<pre>';
// print_r($data);
// echo '</pre>';
// echo '<pre>';
// print_r($fields);
// echo '</pre>';
?>

<table class="table table-bordered text-center">

    <thead>
        <tr>
            <?php foreach($fields as $value): ?>
            <th><?= $value['Field'] ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?= $data['id_employes']?></td>
            <td><?= $data['prenom']?></td>
            <td><?= $data['nom']?></td>
            <td><?= $data['sexe']?></td>
            <td><?= $data['service']?></td>
            <td><?= $data['date_embauche']?></td>
            <td><?= $data['salaire']?></td>



         
        </tr>
    </tbody>

</table>

<div class="jumbotron text-center">
    <a href="http://localhost/git_crud/index.php/" class="btn btn-danger"><i class="fas fa-door-open"></i> Retourner à la page d'accueil</a>
</div>
