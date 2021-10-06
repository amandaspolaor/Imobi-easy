<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="row section home" id="home">
    <div class="image-home hide-on-small-only">
        <img src="res/site/assets/predios.jpg" alt="">
    </div>
    <div class="title-home">
        <h1>
            IMOBI FACIL
        </h1>
    </div>
</div>
<div class="row section about" id="about">
    <div class="row title-row">
        <h1 class="section-title">SOBRE</h1>
    </div>
    <div class="container">
        <p class="about-text">
            Lorem ipsum dolor sit amet consectetur adipisicin ssss g elit. Temporibus error rem repellat architecto laboriosam illum sit maiores, voluptatum maxime iusto obcaecati pariatur eum excepturi eaque hic sint totam quis accusantium! Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Numquam perferendis, sed enim veniam, non, ad reiciendis voluptatum sunt voluptates unde architecto tempora odio neque debitis? Vero reprehenderit magnam minima repudiandae. Magni voluptates, quo minus, hic
            laborum enim quisquam praesentium saepe nostrum ipsa cumque aspernatur quidem commodi. Facilis ipsum sequi quibusdam modi nobis accusantium eveniet corrupti suscipit, tempora ipsa, voluptates iusto. Sed facilis quas repudiandae voluptatum
            soluta eveniet commodi ducimus iste doloremque fuga! Necessitatibus cupiditate placeat architecto earum ab alias nostrum error voluptates numquam porro laborum, consequatur natus iste nesciunt repellat? Quo.

        </p>
    </div>
</div>
<div class="row section search" id="search">
    <div class="row title-row">
        <h1 class="section-title">BUSCAR</h1>
    </div>

    <div class="container">
        <div class="row search-bar-row">
            <div class="col s12 m6 l2">
                <div class="input">
                    <input id="nome" type="text">
                    <label for="nome">Nome</label>
                </div>
            </div>
            <div class="col s12 m6 l2">
                <div class="input">
                    <input id="valor" type="text">
                    <label for="valor">Valor</label>
                </div>
            </div>
            <div class="col s12 m6 l2">
                <div class="input">
                    <input id="descricao" type="text">
                    <label for="descricao">Descriçao</label>
                </div>
            </div>
            <div class="col s12 m6 l2">
                <div id="tipo" class="input">
                    <input type="text">
                    <label for="tipo">Tipo</label>
                </div>
            </div>
            <div class="col s12 m6 l2">
                <div class="input">
                    <input id="endereco" type="text">
                    <label for="endereco">Endereço</label>
                </div>
            </div>
            <div class="col s12 m6 l2">
                <div class="input">
                    <button>BUSCAR</button>
                </div>
            </div>
        </div>

        <div class="row">
            <?php $counter1=-1;  if( isset($imoveis) && ( is_array($imoveis) || $imoveis instanceof Traversable ) && sizeof($imoveis) ) foreach( $imoveis as $key1 => $value1 ){ $counter1++; ?>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-left">
                            <img src="res/site/assets/fachadas-de-sobrados-60.jpg" alt="">
                            <div class="card-more">
                                VEJA MAIS
                            </div>
                        </div>
                        <div class="card-right">
                            <div class="card-right-title">
                                <h6><?php echo htmlspecialchars( $value1["tipo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h6>
                            </div>
                            <div class="card-right-decription">
                                <p><?php echo htmlspecialchars( $value1["descricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                </p>
                            </div>
                            <div class="card-right-icons">
                                <div class="line-icon">
                                    <div class="line-icon-left"> <i class="fas fa-dollar-sign"></i></div>
                                    <div class="line-icon-right"><?php echo htmlspecialchars( $value1["preco"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
                                </div>
                                <div class="line-icon">
                                    <div class="line-icon-left"> <i class="far fa-building"></i></div>
                                    <div class="line-icon-right"><?php echo htmlspecialchars( $value1["tipo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
                                </div>
                                <div class="line-icon">
                                    <div class="line-icon-left"> <i class="fas fa-map-marker-alt"></i></div>
                                    <div class="line-icon-right"><?php echo htmlspecialchars( $value1["endereco"], ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</div>