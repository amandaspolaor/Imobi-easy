<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lista de Imoveis
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar Imovel</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="/admin/imoveis/<?php echo htmlspecialchars( $imovel["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="descricao">Descricao</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descricao" value="<?php echo htmlspecialchars( $imovel["descricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite o tipo" value="<?php echo htmlspecialchars( $imovel["tipo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                            <div class="form-group">
                                <label for="preco">Preco</label>
                                <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o preco" value="<?php echo htmlspecialchars( $imovel["preco"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereco</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereco" value="<?php echo htmlspecialchars( $imovel["endereco"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone" value="<?php echo htmlspecialchars( $imovel["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                            <div class="form-group">
                                <label for="imagem">Imagem</label>
                                <input type="text" class="form-control" id="imagem" name="imagem" placeholder="Digite o imagem" value="<?php echo htmlspecialchars( $imovel["imagem"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->