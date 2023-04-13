<?php require 'inc/data.php'; ?>

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
        <div class="row">
          <?php foreach($cours as $id => $cours_unit){ ?>
            <div class="col-12 col-md-4">
                <div class="card mb-4">
                    <img src="<?php echo $cours_unit->image; ?>" class="card-img-top" alt="Image aléatoire">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $cours_unit->title; ?></h5>
                      <p class="card-text"><?php echo $cours_unit->shortDescription; ?></p>
                      <a href="cours.php?id=<?php echo $id; ?>" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <?php } ?>             
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>