<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title"><i class="fas fa-map-marker-alt"></i> Alunos</h3>
            <div class="kt-subheader__breadcrumbs">
                <a href="javascript:void(0);" class="kt-subheader__breadcrumbs-home">&nbsp;&nbsp;<i
                            class="fas fa-arrow-right"></i></a>
                <a href="#" class="kt-subheader__breadcrumbs-link">
                    Home </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="javascript:void(0);" class="kt-subheader__breadcrumbs-link">
                    Alunos </a>
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                <a href="<?php echo route('novoAluno'); ?>" class="btn btn-sm btn-elevate btn-brand btn-elevate" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Clique aqui para adicionar um novo aluno">
                    <i class="fas fa-user-plus"></i>
                    Cadastrar novo aluno
                </a>
            </div>
        </div>
    </div>
    <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
        <title>ProAcademia | Alunos</title>
        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Estatísticas de alunos</h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget-18">
                            <div class="kt-widget-18__summary">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="kt-widget-18__total" style="font-size: 2rem;">Atualmente são <span
                                                    style="color:red;"><?php echo $data['indicadores'][0]['total_alunos']; ?></span>
                                            alunos cadastrados no sistema. <br></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="kt-widget-18__label">Criamos algumas estatísticas que talvez você
                                            possa
                                            gostar!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget-18__progress">
                                <div class="progress">
                                    <div class="progress-bar bg-brand" role="progressbar"
                                         style="width: <?php echo str_replace(',', '.', $data['indicadores'][0]['percentual_masculino'] . '%') ?>"
                                         aria-valuenow="<?php echo $data['indicadores'][0]['percentual_masculino'] ?>"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-danger" role="progressbar"
                                         style="width: <?php echo str_replace(',', '.', $data['indicadores'][0]['percentual_feminino'] . '%') ?>"
                                         aria-valuenow="<?php echo $data['indicadores'][0]['percentual_feminino'] ?>"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar"
                                         style="width: <?php echo str_replace(',', '.', $data['indicadores'][0]['percentual_ativos'] . '%') ?>"
                                         aria-valuenow="<?php echo $data['indicadores'][0]['percentual_ativos'] ?>"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-dark" role="progressbar"
                                         style="width: <?php echo str_replace(',', '.', $data['indicadores'][0]['percentual_inativos'] . '%') ?>"
                                         aria-valuenow="<?php echo $data['indicadores'][0]['percentual_inativos'] ?>"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="kt-widget-18__item">
                                        <div class="kt-widget-18__legend kt-bg-brand"></div>
                                        <div class="kt-widget-18__desc">
                                            <a href="javascript:void(0);">
                                                <div class="kt-widget-18__title">
                                                    Masculino
                                                </div>
                                            </a>
                                            <div class="kt-widget-18__desc">
                                                Representam: <?php echo $data['indicadores'][0]['percentual_masculino'] . '%'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="kt-widget-18__item">
                                        <div class="kt-widget-18__legend kt-bg-danger"></div>
                                        <div class="kt-widget-18__desc">
                                            <a href="javascript:void(0);">
                                                <div class="kt-widget-18__title">
                                                    Feminino
                                                </div>
                                            </a>
                                            <div class="kt-widget-18__desc">
                                                Representam: <?php echo $data['indicadores'][0]['percentual_feminino'] . '%'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="kt-widget-18__item">
                                        <div class="kt-widget-18__legend kt-bg-success"></div>
                                        <div class="kt-widget-18__desc">
                                            <a href="javascript:void(0);">
                                                <div class="kt-widget-18__title">
                                                    Ativos
                                                </div>
                                            </a>
                                            <div class="kt-widget-18__desc">
                                                Representam: <?php echo $data['indicadores'][0]['percentual_ativos'] . '%'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="kt-widget-18__item">
                                        <div class="kt-widget-18__legend kt-bg-dark"></div>
                                        <div class="kt-widget-18__desc">
                                            <a href="javascript:void(0);">
                                                <div class="kt-widget-18__title">
                                                    Inativos
                                                </div>
                                            </a>
                                            <div class="kt-widget-18__desc">
                                                Representam: <?php echo $data['indicadores'][0]['percentual_inativos'] . '%'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Seus alunos
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="tbl_alunos">
                            <thead>
                            <tr>
                                <th>Nome completo</th>
                                <th>Status</th>
                                <th>Sexo</th>
                                <th>Data cadastro</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data['dados_alunos'] as $key => $value) {
                                $sexo = $value['sexo'] == 1 ? 'Masculino' : 'Feminino';
                                $status = $value['status'] == 1 ? '<span class="badge badge-pill badge-success ml-0 mr-2">Ativo</span>' : '<span class="badge badge-pill badge-danger ml-0 mr-2">Inativo</span>';
                                echo '<tr>
                                        <td>' . $value['nome_completo'] . '</td>
                                        <td>' . $status . '</td>
                                        <td>' . $sexo . '</td>
                                        <td>' . $value['data_cadastro'] . '</td>
                                        <td><button class="mb-2 mr-2 btn-icon btn btn-secondary"><i class="pe-7s-gym btn-icon-wrapper"> </i>Secondary</button></td>
                                    </tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function init() {
        $("#tbl_alunos").DataTable({
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "buttons": {
                    "copy": "Copiar registros",
                    "csv": "Exportar registros para CSV",
                    "print": "Imprimir registros",
                    "excel": "Exportar registros em excel",
                    "pdf": "Exportar registros em PDF"
                },
            },
            buttons: [{
                extend: "copy",
                className: "btn btn-sm btn-primary"
            }, {
                extend: "csv",
                className: "btn btn-sm btn-primary"
            }, {
                extend: "print",
                className: "btn btn-sm btn-primary"
            }, {
                extend: "excel",
                className: "btn btn-sm btn-primary"
            }, {
                extend: "pdf",
                className: "btn btn-sm btn-primary"
            }],
            dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            responsive: true
        });
    }
</script>
