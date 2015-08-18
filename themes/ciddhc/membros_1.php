
<section class="section artigos">
    <?php
    $View = new View();
    $membro = $View->Load("article_membro");
    $Read = new WsPosts();
    $Read->Execute()->Query("post_status = 1 AND post_type = 'membros' ORDER BY post_date DESC");
    if (!$Read->Execute()->getResult()):
        WSErro("Desculpe não temos membros no momento, favor volte mais tarde!", WS_INFOR);
    else:
        $i = 0;
        foreach ($Read->Execute()->getResult() as $item):
            $item->post_title = Check::Words($item->post_title, 4);
            $item->post_content = Check::Words($item->post_content, 10);
            $item->datetime = date('Y-m-d', strtotime($item->post_date));
            $item->pubdate = date("d/m/Y H:i", strtotime($item->post_date));
            $View->Show((array) $item, $membro);
            $i++;
        endforeach;
    endif;
    ?>
</section>
