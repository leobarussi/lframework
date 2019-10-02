<title>ProAcademia | Cadastro de alunos</title>
<div class="container-fluid">
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h4 class="page-title">Cadastro de alunos</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Alunos</a></li>
                    <li class="breadcrumb-item active">Cadastro</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div class="float-right d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-settings mr-2"></i> Settings</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a> 
                            <a class="dropdown-item" href="#">Another action</a> 
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Textual inputs</h4>
                    <p class="text-muted m-b-30">Here are examples of 
                        <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 
                        <code class="highlighter-rouge">&lt;input&gt;</code> 
                        <code class="highlighter-rouge">type</code>.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="has-float-label">
                                    <input class="form-control x" type="text" name="nomeAluno" id="nomeAluno" placeholder="Nome completo do aluno"/>
                                    <span class="spanInput">Nome completo do aluno</span>
                                </label>
                                <p class="messageError"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Informe o nome do aluno!</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="has-float-label">
                                    <input class="form-control x" type="text" name="aplelido" id="aplelido" placeholder="Apelido (Opcional)"/>
                                    <span class="spanInput">Apelido (Opcional)</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                <select class="form-control custom-select x">
                                    <option selected>United States</option>
                                    <option>Canada</option>
                                    <option>...</option>
                                </select>
                                <span>Country</span>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="has-float-label">
                                    <input class="form-control x" type="text" name="cpf" id="cpf" placeholder="CPF do aluno"/>
                                    <span class="spanInput">CPF do aluno</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>