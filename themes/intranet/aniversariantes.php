<?php
$View = new View();
$tpl = $View->Load('aniversariantes');
?>
<section class="section print table">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $AppNiver = new AppNiver();
                $AppNiver->Execute()->findAll();
                if (!$AppNiver->Execute()->getResult()):
                    WSErro("<b>Oppss!</b> Não temos Aniversários este mês!", INFO);
                else:
                    ?>
                    <table class="table table-bordered table-condensed table-hover table-striped text-center">
                        <thead>
                            <tr>
                                <th colspan="4" class="info text-center">
                        <h1>Aniversáriantes do mês</h1>
                        </th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Setor</th>
                            <th>Data</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($AppNiver->Execute()->getResult() as $niver):
                                $niver->id = $i;
                                $niver->niver_data = date('d/m/Y', strtotime($niver->niver_data));
                                $View->Show((array) $niver, $tpl);
                                $i++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                <?php
                endif;
                ?>
            </div>
        </div>
        <div style="display:none;" class="print">&copy; Adriano Reis - Todos os direitos reservados.</div>
    </div>
</section>