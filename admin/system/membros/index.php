<div class="content list_content">

    <section>

        <h1>Membros:</h1>

        <?php
        $empty = filter_input(INPUT_GET, 'empty', FILTER_VALIDATE_BOOLEAN);
        if ($empty):
            WSErro("Oppss: você tentou editar um membro que não existe no sistema!", WS_INFOR);
        endif;

        $action = filter_input(INPUT_GET, 'action', FILTER_DEFAULT);
        if ($action):
            require_once '_models/AdminPost.class.php';

            $postAction = filter_input(INPUT_GET, 'post', FILTER_VALIDATE_INT);
            $postUpdate = new AdminPost;

            switch ($action):
                case 'active':
                    $postUpdate->ExeStatus($postAction, '1');
                    WSErro("O status do membro foi atualizado para <b>ativo</b>. Membro publicado!", WS_ACCEPT);
                    break;

                case 'inative':
                    $postUpdate->ExeStatus($postAction, '0');
                    WSErro("O status do membro foi atualizado para <b>inativo</b>. Membro agora é um rascunho!", WS_ACCEPT);
                    break;

                case 'delete':
                    $postUpdate->ExeDelete($postAction);
                    WSErro('O membro ' . $postUpdate->getError()[0], $postUpdate->getError()[1]);

                    break;

                default:
                    WSErro("Ação não foi identificada pelo sistema, favor utilize os botões", WS_ERROR);
                    break;
            endswitch;
        endif;

        $posti = 0;
        $getPage = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
        $Pager = new Pager("painel.php?exe=membros/index&page=");
        $Pager->ExePager($getPage, 5);

        $Read = new Controle();
        $Read->FullRead("SELECT * FROM ws_posts WHERE post_type = 'membros' ORDER by post_status ASC, post_date DESC LIMIT :limit OFFSET :offset", "limit={$Pager->getLimit()}&offset={$Pager->getOffset()}", true);

        if (!$Read->getResult()):
            $Pager->ReturnPage();
            WSErro("Desculpa, ainda não temos membros cadastrados", WS_INFOR);
        else:
            foreach ($Read->getResult() as $post):
                $posti++;
                extract((array) $post);
                $status = (!$post_status ? 'style="background: #fffed8"' : '' );
                ?>
                <article<?php if ($posti % 2 == 0) echo ' class="right" '; ?> <?= $status; ?>>

                    <div class="img thumb_small">
                        <?= Check::Image('../uploads/' . $post_cover, $post_title, 120, 70) ?>
                    </div>

                    <h1><a target="_blank" href="../artigo/<?= $post_name; ?>" title="Ver Post"><?= Check::Words($post_title, 5) ?></a></h1>
                    <ul class="info post_actions">
                        <li><strong>Data:</strong> <?= date('d/m/Y H:i', strtotime($post_date)); ?>Hs</li>
                        <li><a class="act_view" target="_blank" href="../artigo/<?= $post_name; ?>" title="Ver no site">Ver no site</a></li>
                        <li><a class="act_edit" href="painel.php?exe=membros/update&postId=<?= $post_id; ?>" title="Editar">Editar</a></li>

                        <?php if (!$post_status): ?>
                            <li><a class="act_ative" href="painel.php?exe=membros/index&post=<?= $post_id; ?>&action=active" title="Ativar">Ativar</a></li>
                        <?php else: ?>
                            <li><a class="act_inative" href="painel.php?exe=membros/index&post=<?= $post_id; ?>&action=inative" title="Inativar">Inativar</a></li>
                        <?php endif; ?>

                        <li><a class="act_delete" href="painel.php?exe=membros/index&post=<?= $post_id; ?>&action=delete" title="Excluir">Deletar</a></li>
                    </ul>

                </article>
                <?php
            endforeach;
        endif;
        ?>

        <div class="clear"></div>
    </section>
    <?php
    $Pager->ExePaginator("ws_posts", "#post_type#", "post_type={$post_type}", true);
    echo $Pager->getPaginator();
    ?>
</div> <!-- content home -->