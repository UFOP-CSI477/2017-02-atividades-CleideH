<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.css"/>
    <title>Estados</title>
  </head>
  <body>
    <div class="container">
            <h2 align = "center"> Estados </h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                      <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Sigla</th>
                      </tr>

                        <?php foreach($lista as $estado): ?>
                          <tr>
                            <td><?= $estado ['id']?></td>
                            <td><?= $estado ['nome']?></td>
                            <td><?= $estado ['sigla']?></td>
                          </tr>
                    <?php endforeach ?>

                    </table>
                  </div>
       </div>

  </body>
</html>
