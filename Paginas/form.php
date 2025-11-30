<?php
include "db.php";

// Se estiver editando
$editando = false;
$dados = [
    "numero_relatorio" => "",
    "titulo" => "",
    "data_relatorio" => "",
    "pesquisador" => "",
    "status_relatorio" => "",
    "descricao" => "",
    "observacoes" => ""
];

if (isset($_GET['id'])) {
    $editando = true;
    $id = $_GET['id'];

    $sql = "SELECT * FROM relatorios WHERE id = $id";
    $res = $conn->query($sql);
    $dados = $res->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $editando ? "Editar Relatório" : "Novo Relatório" ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/relatorio.css">
</head>

<!--cabeçalho-->
  <img src="../img/logoFundopreto.svg" class="img-fluid w-100" alt="">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Stranger TINF</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hawkins News
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Desaparecidos.html">Desaparecidos</a></li>
              <li><a class="dropdown-item" href="Noticias.html">Noticias</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Curiosidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Locais</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

<body class="bg-light">

<div class="container py-4">

    <h1 class="text-center mb-4 text-danger fw-bold" style="text-shadow: 2px 2px 6px black;">
        <?= $editando ? "EDITAR RELATÓRIO — HAWKINS" : "NOVO RELATÓRIO — HAWKINS" ?>
    </h1>

    <div class="col-md-6 mx-auto">

        <div class="card hawkins-card">

            <div class="card-content">

                <h5 class="mb-3">
                    <?= $editando ? "Editar Relatório Nº ".$dados['numero_relatorio'] : "Novo Relatório" ?>
                </h5>

                <form method="POST" action="save.php">

                    <?php if ($editando): ?>
                        <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                    <?php endif; ?>

                    <p><strong>Número do Relatório:</strong><br>
                        <input type="text" name="numero_relatorio" class="form-control"
                               value="<?= $dados['numero_relatorio'] ?>" required>
                    </p>

                    <p><strong>Título:</strong><br>
                        <input type="text" name="titulo" class="form-control"
                               value="<?= $dados['titulo'] ?>" required>
                    </p>

                    <p><strong>Data:</strong><br>
                        <input type="date" name="data_relatorio" class="form-control"
                               value="<?= $dados['data_relatorio'] ?>" required>
                    </p>

                    <p><strong>Pesquisador:</strong><br>
                        <input type="text" name="pesquisador" class="form-control"
                               value="<?= $dados['pesquisador'] ?>" required>
                    </p>

                    <p><strong>Status:</strong><br>
                        <input type="text" name="status_relatorio" class="form-control"
                               value="<?= $dados['status_relatorio'] ?>" required>
                    </p>

                    <p><strong>Descrição:</strong><br>
                        <textarea name="descricao" class="form-control" rows="3"><?= $dados['descricao'] ?></textarea>
                    </p>

                    <p><strong>Observações:</strong><br>
                        <textarea name="observacoes" class="form-control" rows="3"><?= $dados['observacoes'] ?></textarea>
                    </p>

            </div>

            <div class="d-flex justify-content-between mt-3">

                <a href="relatorio.php" class="btn btn-primary btn-sm">
                    Voltar
                </a>

                <button type="submit" class="btn btn-custom btn-sm">
                    <?= $editando ? "Salvar Alterações" : "Criar Relatório" ?>
                </button>

            </div>

            </form>

        </div>
    </div>
</div>

<footer class="text-lg-start bg-black text-white text-center py-3 w-100 ">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row my-4">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

            <div class="d-flex flex-column mb-4 mx-auto" style="width: 200px; height: 300px;">
              <img src="../img/logo_transparente.png" height="120" alt="Logo Site" />
              <p class="text-center fs-5">O me lhor site<br> sobre a cidade de <br> Hawkins.</p>
            </div>



            <ul class="list-unstyled d-flex flex-row justify-content-center">
              <li>
                <a class="text-white px-2" href="#!">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </li>
              <li>
                <a class="text-white px-2" href="#!">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a class="text-white ps-2" href="#!">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="mb-4 fs-5">Site</h5>

            <ul class="list-unstyled ">
              <li class="mb-2">
                <a href="#!" class="text-white text-decoration-none fs-5">Home</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white text-decoration-none fs-5">Notícias</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white text-decoration-none fs-5"></i>Personagens</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white text-decoration-none fs-5"></i>Curiosidades</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white text-decoration-none fs-5"></i>Texto</a>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="mb-4 fs-5">Ajuda</h5>

            <ul class="list-unstyled">
              <li class="mb-2">
                <a href="#!" class="text-white text-decoration-none fs-5"></i>Email</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white text-decoration-none fs-5"></i>Contato</a>
              </li>
              <li class="mb-2">
                <a href="#!" class="text-white text-decoration-none fs-5"></i>Apoie o Projeto!</a>
              </li>
              <li class="mb-2">
                <a href="#Paginasecreta" class="text-black text-decoration-none fs-5 secreto "></i>Apoie o Projeto!</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="mb-4 fs-5">Nos Siga!</h5>

            <ul class="list-unstyled">
              <li>
                <p><i class="fas fa-map-marker-alt pe-2 fs-5"></i>Instagram</p>
              </li>
              <li>
                <p><i class="fas fa-phone pe-2 fs-5"></i>Facebook</p>
              </li>
              <li>
                <p><i class="fas fa-envelope pe-2 mb-0 fs-5"></i>Tiktok</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Copyright -->
      <div id="Copyright" class="text-center p-3 fs-5">
        Todos os direitos reservados ©Stranger Tinf 2025
    </footer>

</body>
</html>