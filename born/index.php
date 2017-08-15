<?php include ('includes/header.html'); ?>

<body style="background: url(assets/img/home-bg/maio.jpg) center fixed">

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 padd-l-0 padd-r-0 h-100pc">
            <div class="base-menu wow fadeInLeft"> 
                <?php include ('includes/menu.html'); ?>

                <div class="search-tab">
                    <div class="input-group input-group-lg wow fadeInLeft" data-wow-delay=".18s">
                        <input type="text" class="form-control form-lg" placeholder="Procure: Campeões, Itens ou Talentos...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </span>
                    </div>
                    <div class="last-patch wow fadeInLeft" data-wow-delay=".24s">
                        <h2>No último Patch <a href="#">(6.8)</a></h2>
                        <div class="champions">
                            <h3>Campeões</h3>
                            <a href="#">Taric</a>, <a class="bold" href="info-page.php">Miss Fortune</a>, <a href="#">Ekko</a>, <a href="#">Katarina</a>, <a href="#">Ryze</a>
                        </div>
                        <div class="itens">
                            <h3>Itens</h3>
                            <a href="#">Ascensão da Rainha Gélida</a>, <a href="#">Manopla dos Glacinatas</a>, <a href="#">Ekko</a>, <a href="#">Katarina</a>, <a href="#">Ryze</a>
                        </div>
                        <div class="masteries">
                            <h3>Talentos</h3>
                            <a href="#">Taric</a>, <a href="#">Miss Fortune</a>, <a href="#">Ekko</a>, <a href="#">Katarina</a>, <a href="#">Ryze</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include ('includes/footer.html'); ?>