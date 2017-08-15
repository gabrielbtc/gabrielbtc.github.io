<?php include ('includes/header.html'); ?>

<body style="background: url(assets/img/champions/m-fortune/bg-img.jpg) center fixed">

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 padd-l-0 padd-r-0 h-100pc">
            <div class="base-menu">
                <?php include ('includes/menu.html'); ?>

                <div class="champion-details wow fadeInDown">
                    <h2>Miss Fortune</h2>
                    <h3>a Caçadora de Recompensas</h3>
                    <div class="tag-born buff">
                        <p>Último patch presente: <br><strong>6.8 (19/04/2016)</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 padd-l-0 padd-r-0 h-100pc">
            <div class="base-infos">

                <!-- Skills -->
                <div class="skills">
                    <ul>
                        <li class="wow fadeInDown">
                            <img src="assets/img/champions/m-fortune/00.png">
                        </li>
                        <li class="wow fadeInDown" data-wow-delay=".12s">
                            <img src="assets/img/champions/m-fortune/01.png">
                        </li>
                        <li class="active wow fadeInDown" data-wow-delay=".24s">
                            <img src="assets/img/champions/m-fortune/02.png">
                        </li>
                        <li class="wow fadeInDown" data-wow-delay=".36s">
                            <img src="assets/img/champions/m-fortune/03.png">
                        </li>
                        <li class="wow fadeInDown" data-wow-delay=".48s">
                            <img src="assets/img/champions/m-fortune/04.png">
                        </li>
                    </ul>
                </div>

                <!--Change Notes -->
                <div class="skill-changes wow fadeInDown" data-wow-delay=".36s">
                    <h2>W - Desfilando</h2>

                    <div class="notes">
                        <div>
                            <h3>DURAÇÃO DA VELOCIDADE DE ATAQUE:</h3>
                            <p>3 segundos <span>»</span> 4 segundos</p>
                        </div>
                        <div>
                            <h3>TEMPO DE RECARGA:</h3>
                            <p>8 segundos <span>»</span> 12 segundos</p>
                        </div>
                    </div>

                    <div class="changes">
                        <div class="remove">
                            <h3>Batimentos - Removido</h3>
                            <p>O uso de Batida do Amor deixa de aumentar a duração</p>
                        </div>
                        <div class="add">
                            <h3>Na Passarela - Novo</h3>
                            <p>Agora o Tempo de Recarga se inicia na conjuração e não quando o efeito expira</p>
                        </div>
                        <div class="add">
                            <h3>Sacando as Armas - Novo</h3>
                            <p>Enquanto Desfilando estiver em tempo de recarga, o uso da Batida do Amor reduz o Tempo de Recarga restante em 2 segundos (diminui com a redução do Tempo de Recarga)</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?php include ('includes/footer.html'); ?>