<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.css"/>
    <title>Cidades</title>
  </head>
  <body>
    <div class="container">
      <h2 align = "center"> Cidades </h2>
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">

              <tr>
                <th>Código</th>
                <th>Nome</th>
              </tr>

              <?php foreach ($lista as $cidade):  ?>

                <tr>
                  <td><?= $cidade['id']?></td>
                  <td><?= $cidade ['nome']?></td>
                </tr>
              <?php endforeach ?>
            </table>
          </div>
    </div>

  </body>
</html>
