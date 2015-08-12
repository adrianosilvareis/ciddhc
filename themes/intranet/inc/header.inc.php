<header class="no-print">
    <section class="section section-success">
        <div class="container">
            <div class="row"> <!--bloco navegacao-->
                <div class="col-md-8">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a href="index">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Convênio</a></li>
                                <li><a href="#">POP</a></li>
                                <li><a href="#">Nota Fiscal</a></li>
                                <li><a href="#">Qualidade</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Links</a></li>                                
                            </ul>
                        </li>
                        <li>
                            <a href="aniversariantes">Aniversáriantes</a>
                        </li>
                        <li>
                            <a href="contato">Contato</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="col-md-2">
                        <form class="navbar-form navbar-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Login</button>
                        </form>
                    </div>
                    <div class="col-md-10">
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Pesquisa">
                            </div>
                            <button type="submit" class="btn btn-default">buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bs-example-modal-sm fade modal text-center" tabindex="-1"
         role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel" contenteditable="true">Login</h4>
                </div>
                <form class="text-center">
                    <div class="form-group">
                        <label for="exampleInputEmail3" class="sr-only">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail3"
                               placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword3" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword3"
                               placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</header>