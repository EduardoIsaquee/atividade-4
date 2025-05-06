
    <?php include 'header.php'; ?>

    <div class="container-fluid my-5">
        <?php
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';
        if ($pagina === 'home'){
            $pagePath = 'home.php';
        } else
        
        $pagePath ="pages/atv{$pagina}/forms.php";
      
        if (file_exists($pagePath)) {
            include $pagePath;
        } else {
            echo "<div class='alert alert-danger'>Página não encontrada.</div>";
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
