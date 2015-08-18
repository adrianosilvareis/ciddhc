<div class="section">
    <div class="well">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Cartilhas</h1>
            </div>
        </div>
        <?php
        $View = new View();
        $membro = $View->Load("noticias_m");
        $Read = new WsPosts();
        $Read->Execute()->Query("post_status = 1 AND post_type = 'cartilhas' ORDER BY post_date DESC, post_category DESC");
        if (!$Read->Execute()->getResult()):
            WSErro("Desculpe não temos cartilhas no momento, favor volte mais tarde!", WS_INFOR); 
        else:
            $i = 0;
            echo "<div class='row'>\n";
            foreach ($Read->Execute()->getResult() as $item):
                if ($i % 3 == 0 && $i != 0):
                    echo "</div>\n";
                    echo "<div class='row'>\n";
                endif;
                $item->post_title = Check::Words($item->post_title, 4);
                $item->post_content = Check::Words($item->post_content, 10);
                $item->datetime = date('Y-m-d', strtotime($item->post_date));
                $item->pubdate = date("d/m/Y H:i", strtotime($item->post_date));
                $View->Show((array) $item, $membro);
                $i++;
            endforeach;
            echo "</div>\n";
        endif;
        ?>
    </div>
</div>