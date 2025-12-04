<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Relatórios de Hawkins</title>
    <link rel="stylesheet" href="Css/relatorio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<nav>
    <div class="header-bar">
        <div class="d-flex align-items-center">

            <a href="Criaturas.html" class="nav-text text-decoration-none">
                Registro de criaturas
            </a>

            <a href="relatorio.php" class="nav-text red text-decoration-none ms-3">
                Relatórios
            </a>

        </div>

        <a href="index.html">
            <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" class="home-icon" alt="Home">
        </a>
    </div>
</nav>


<body class="bg-light">

<div class="container py-4">

    <h1 class="text-center mb-4 text-danger fw-bold" style="text-shadow: 2px 2px 6px black;">
        RELATÓRIOS DO LABORATÓRIO — HAWKINS
    </h1>

    <div class="text-center mb-4">
        <a href="form.php" class="btn btn-danger btn-lg">
            + Novo Relatório
        </a>
    </div>

    <div class="row g-4">

        <?php
        $sql = "SELECT * FROM relatorios";
        $res = $conn->query($sql);

        while ($row = $res->fetch_assoc()) {
            echo "
            <div class='col-md-4 d-flex'>
    <div class='card hawkins-card w-100'>

        <div class='card-content'>
            <h5 class='fw-bold'>RELATÓRIO Nº {$row['numero_relatorio']}</h5>

            <p><strong>Título:</strong> {$row['titulo']}</p>
            <p><strong>Data:</strong> {$row['data_relatorio']}</p>
            <p><strong>Pesquisador:</strong> {$row['pesquisador']}</p>
            <p><strong>Status:</strong> {$row['status_relatorio']}</p>

            <hr>

            <p><strong>Descrição:</strong><br>{$row['descricao']}</p>

            <p><strong>Observações:</strong><br>{$row['observacoes']}</p>
        </div>

        <div class='d-flex justify-content-between mt-3'>
            <a href='form.php?id={$row['id']}' class='btn btn-primary btn-sm'>Editar</a>
            <a href='delete.php?id={$row['id']}' 
                class='btn btn-custom btn-sm'
                onclick='return confirm(\"Excluir?\")'>
                Excluir
            </a>
        </div>

    </div>
</div>
";
        }
        ?>

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

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
