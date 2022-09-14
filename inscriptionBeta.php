<?php
require 'connect.php';
$title = 'Inscription Beta V3';
require 'templates/head.template.php';
?>
<body>

<?php
    $jeRecup = $database->prepare("SELECT * FROM beta ORDER BY beta_id DESC LIMIT 1");
    $jeRecup->execute();
    $toutesLesInscrip = $jeRecup->fetchall(PDO::FETCH_ASSOC);
?>

<a class="return" href="index.php"><span class="material-icons-outlined">arrow_back_ios</span><i>Retour</i></a>
<div class="inscription-beta-wrapper">
    
<?php foreach($toutesLesInscrip as $inscrip){ ?>

    <h2>Félicitaions <?= $inscrip['beta_prenom'];?> vous êtes bien inscrit à la beta MED-T</h2>
    <p>Voici un code de parainage que vous pouvez partager avec un ami pour béneficier d'un mois d'abonnement gratuit.</p>
    <p><?= $inscrip['beta_code'];?></p>

<?php } ?>
</div>
</body>
</html>
