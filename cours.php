<?php
    require 'inc/data.php';  

    // Me permet d'aller chercher l'identifiant du cours dans l'URL (?id=0)
    $id = $_GET['id'];

    // Vérifie si l'identifaint $_GET['id'] n'existe pas dans $cours et redirige vers 404.php
    if(!isset($cours[$id])){
        header('Location: 404.php');
        die;
    }

    $cours_current = $cours[$id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php require 'inc/menu.tpl.php'; ?>
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2><?php echo $cours_current->getTitle(); ?></h2>
            </div>
            <div class="col text-end">
                <span class="badge bg-success"><?php echo $cours_current->getNumberOfHours(); ?>h</span>
                <span class="badge bg-warning"><?php echo $cours_current->getPrice(); ?>€</span>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12 col-md-6">
                <img src="<?php echo $cours_current->getImage(); ?>" alt="Image de cours">
            </div>
            <div class="col-12 col-md-6">
                <p><?php echo $cours_current->getDescription(); ?></p>
            </div>
        </div>

        <h3>Le programme</h3>
        <ul class="mb-4">
            <?php foreach($cours_current->getProgramContent() as $content){ ?>
                <li><?php echo $content; ?></li>
            <?php } ?>
        </ul>

        <h3>Caractéristiques</h3>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Dates</td>
                    <td><?php echo $cours_current->getClassDate(); ?></td>
                </tr>
                <tr>
                    <td>Votre prof</td>
                    <td><?php echo $cours_current->getProfessor(); ?></td>
                </tr>
                <tr>
                    <td>Durée</td>
                    <td><?php echo $cours_current->getNumberOfHours(); ?>h</td>
                </tr>
                <tr>
                    <td>Modalité</td>
                    <td><?php echo $cours_current->getModality(); ?></td>
                </tr>
                <tr>
                    <td>Niveau requis</td>
                    <td><?php echo $cours_current->getRequiredLevel(); ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>