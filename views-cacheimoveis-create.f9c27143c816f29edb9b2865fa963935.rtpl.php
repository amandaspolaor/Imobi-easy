<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lista de Usuários
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin/users">Usuários</a></li>
            <li class="active"><a href="/admin/users/create">Cadastrar</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Novo Imovel</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="/admin/imoveis/create" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="descricao">Descricao</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descricao">
                            </div>
                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite o tipo">
                            </div>
                            <div class="form-group">
                                <label for="preco">Preco</label>
                                <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o preco">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereco</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereco">
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
                            </div>
                            <div class="form-group">
                                <label for="imagem">Imagem</label>
                                <input type="text" class="form-control" id="imagem" name="imagem" placeholder="Digite o imagem">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->