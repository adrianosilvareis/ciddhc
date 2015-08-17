<div class="col-md-8">

    <!-- primeira linha -->
    <div style="margin: 10 10 10 20;" class="col-md-12">
        <a class="btn btn-site">Mais notícias</a>
    </div>
    <div class="col-md-12 divbloco bg-color-rosa"></div>
    <!-- primeira linha -->
    <div class="row">
        <?php
        $Read->Execute()->Busca("cat={$cat}&limit=2&offset=3");
        if (!$Read->Execute()->getResult()):
            echo "<div style='display: block;margin-top:40px;'>\n";
            WSErro("Desculpe, não temos posts no momento, favor volte mais tarde!", WS_INFOR);
            echo "</div>\n";
        else:
            foreach ($Read->Execute()->getResult() as $row):
                $row->post_title = Check::Words($row->post_title, 2);
                $row->post_content = Check::Words($row->post_content, 5);
                $row->datetime = date('Y-m-d', strtotime($row->post_date));
                $row->pubdate = date("d/m/Y H:i", strtotime($row->post_date));
                $View->Show((array) $row, $tpl_p);
            endforeach;
        endif;
        ?>
    </div><!-- primeira linha -->
    <div class="col-md-12 divbloco bg-color-azul"></div>
    <!-- segunda linha -->
    <div class="row">
        <?php
        $Read->Execute()->Busca("cat={$cat}&limit=2&offset=5", true);
        if (!$Read->Execute()->getResult()):
            echo "<div style='display: block;margin-top:40px;'>\n";
            WSErro("Desculpe, não temos posts no momento, favor volte mais tarde!", WS_INFOR);
            echo "</div>\n";
        else:
            foreach ($Read->Execute()->getResult() as $row):
                $View->Show((array) $row, $tpl_p);
            endforeach;
        endif;
        ?>
    </div><!-- segunda linha -->

    <hr>
    <!-- cartilhas -->
    <div class="col-md-12">
        <div style="margin: 10px;" class="col-md-12">
            <a class="btn btn-site">Cartilhas</a>
        </div>

        <div class="row">
            <?php
            $Read->Execute()->Query("post_status = 1 AND post_type = 'cartilhas' AND (post_cat_parent = :cat OR post_category = :cat) ORDER BY post_date DESC LIMIT :limit OFFSET :offset", "cat={$cat}&limit=2&offset=0", true);
            if (!$Read->Execute()->getResult()):
                echo "<div style='display: block;margin-top:40px;'>\n";
                WSErro("Desculpe, não temos cartilhas no momento, favor volte mais tarde!", WS_INFOR);
                echo "</div>\n";
            else:
                foreach ($Read->Execute()->getResult() as $row):
                    $row->datetime = date('Y-m-d', strtotime($row->post_date));
                    $row->pubdate = date("d/m/Y H:i", strtotime($row->post_date));
                    $View->Show((array) $row, $cartilha);
                endforeach;
            endif;
            ?>
        </div>

    </div>
    <!-- cartilhas -->

    <!-- Canal Youtube -->
    <div class="col-md-12">
        <hr>
        <div style="margin: 10px;" class="col-md-12">
            <a class="btn btn-site">Canal do Youtube</a>
        </div>

        <section class="section">
            <article style="margin-top: 10px;" class="col-md-5">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/U317keQNZfA"
                            allowfullscreen=""></iframe>
                </div>
            </article>
            <div style="margin-top: 10px;" class="col-md-5">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/i__1Z5a9Sak"
                            allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
    </div>
    <!-- Canal do youtube -->

</div>