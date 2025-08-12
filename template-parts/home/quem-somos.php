<section id="quem-somos">
    <img class="fundo-arco" src="<?= get_template_directory_uri() . '/images/FUNDO 1.png' ?>"
        alt="Fundo foto">
    <div class="container">
        <h2 class="titulo"><?= get_field("titulo_secao_quem_somos") ?></h2>
        <div class="cards">
            <div class="card">
                <div>
                    <img class="foto-cargo" src="<?= get_field("imagem_1_diretor")['url'] ?>"
                        alt="<?= get_field("imagem_1_diretor")['alt'] ?>">
                </div>
                <div class="card-content">
                    <h5 class="nome"><?= get_field("nome_diretor_1") ?></h5>
                    <div class="placa-cargo">
                        <?= get_field("cargo_diretor_1") ?>
                    </div>
                    <p class="descricao">
                        <?= get_field("descricao_diretor_1") ?>
                    </p>
                </div>
            </div>

            <div class="card">
                <div>
                    <img class="foto-cargo" src="<?= get_field("imagem_2_diretor")['url'] ?>"
                        alt="<?= get_field("imagem_2_diretor")['alt'] ?>">
                </div>
                <div class="card-content">
                    <h5 class="nome"><?= get_field("nome_diretor_2") ?></h5>
                    <div class="placa-cargo">
                        <?= get_field("cargo_diretor_2") ?>
                    </div>
                    <p class="descricao">
                        <?= get_field("descricao_diretor_2") ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>