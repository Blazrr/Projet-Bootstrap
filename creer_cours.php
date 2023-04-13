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
        <h2 class="mb-4">Créer un cours</h2>

        <form action="">
            <div class="mb-3">
                <label class="form-label" for="titre">Titre</label>
                <input class="form-control" id="titre" type="text">
            </div>
            <div class="mb-3">
                <label class="form-label" for="image">Image</label>
                <input class="form-control" id="image" type="text">
            </div>
            <div class="mb-3">
                <label class="form-label" for="description-courte">Description courte</label>
                <input class="form-control" id="description-courte" type="text">
            </div>
            <div class="mb-3">
                <label class="form-label" for="description">Description</label>
                <textarea class="form-control" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="programme">Le programme</label>
                <textarea class="form-control" id="programme" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="nb-heures">Nombre d'heures</label>
                <input class="form-control" id="nb-heures" type="number">
            </div>
            <div class="mb-3">
                <label class="form-label" for="tarif">Tarif</label>
                <input class="form-control" id="tarif" type="number">
            </div>
            <div class="mb-3">
                <label class="form-label" for="dates">Dates</label>
                <input class="form-control" id="dates" type="text">
            </div>
            <div class="mb-3">
                <label class="form-label" for="professeur">Professeur</label>
                <select class="form-select" id="professeur">
                    <option selected>Choisir un professeur</option>
                    <option value="nicolas">Nicolas R.</option>
                    <option value="pierre">Pierre C.</option>
                    <option value="alexandre">Alexandre B.</option>
                  </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="modalite">Modalité</label>
                <select class="form-select" id="modalite">
                    <option selected>Choisir une modalité</option>
                    <option value="distance">A distance</option>
                    <option value="presentiel">Présentiel</option>
                    <option value="distance-presentiel">A distance et présentiel</option>
                  </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="niveau">Niveau requis</label>
                <select class="form-select" id="niveau">
                    <option selected>Choisir un niveau requis</option>
                    <option value="debutant">Débutant</option>
                    <option value="intermediaire">Intermédiaire</option>
                    <option value="avance">Avancé</option> 
                  </select>
            </div>

            <input class="btn btn-primary" type="submit" value="Créer">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>