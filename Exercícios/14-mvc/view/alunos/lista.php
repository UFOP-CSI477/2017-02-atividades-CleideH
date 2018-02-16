<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.css"/>
    <title>Lista de alunos(a)</title>
  </head>
  <body>
        <div class="container">
          <h2 align = "center">Alunos </h2>
              <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover">
                    <tr>
                      <th>Código</th>
                      <th>Nome</th>
                    </tr>

                    <!-- Dados dos alunos //-->
                    <?php foreach($lista as $aluno): ?>
                      <tr>
                        <td><?= $aluno ['id'] ?></td>
                        <td><?= $aluno ['nome'] ?></td>
                      </tr>
                    <?php endforeach ?>

                  </table>
              </div>
            </div>
  </body>
</html>
