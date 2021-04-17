<div class="bl_productionItem">
    <div class="bl_productionItem_item">
        <h4 class="bl_productionItem_tit">目的</h4>
        <div class="bl_productionItem_stroke"></div>
        <div class="bl_productionItem_txt"><?php the_field('purpose'); ?></div>
    </div>
    <div class="bl_productionItem_item">
        <h4 class="bl_productionItem_tit">目標</h4>
        <div class="bl_productionItem_stroke"></div>
        <div class="bl_productionItem_txt"><?php the_field('goal'); ?></div>
    </div>
    <!--term web only-->
    <?php
    global $post;
    $slug = $post->post_name;
    if (is_single($slug) ):
    ?>
    <div class="bl_productionItem_item">
        <h4 class="bl_productionItem_tit">ターゲット</h4>
        <div class="bl_productionItem_stroke"></div>
        <div class="bl_productionItem_txt"><?php the_field('target'); ?></div>
    </div>
    <div class="bl_productionItem_item">
        <h4 class="bl_productionItem_tit">ペルソナ</h4>
        <div class="bl_productionItem_stroke"></div>
        <div class="bl_productionItem_txt"><?php the_field('persona'); ?></div>
    </div>
    <div class="bl_productionItem_item">
        <h4 class="bl_productionItem_tit">コンセプト</h4>
        <div class="bl_productionItem_stroke"></div>
        <div class="bl_productionItem_txt"><?php the_field('concept'); ?></div>
    </div>
    <?php endif; ?>
    <!--ここまでterm web only-->
    <div class="bl_productionItem_item">
        <h4 class="bl_productionItem_tit">制作ポイント</h4>
        <div class="bl_productionItem_stroke"></div>
        <div class="bl_productionItem_txt"><?php the_field('point'); ?></div>
    </div>
    <div class="bl_productionItem_item">
        <h4 class="bl_productionItem_tit">制作期間</h4>
        <div class="bl_productionItem_stroke"></div>
        <div class="bl_productionItem_txt"><?php the_field('period'); ?></div>
    </div>
    <div class="bl_productionItem_item">
        <h4 class="bl_productionItem_tit">使用ツール</h4>
        <div class="bl_productionItem_stroke"></div>
        <div class="bl_productionItem_txt">
            <!--,を改行に変える-->
            <?php
            $field = get_field('tool');
            $str = implode('<br>', $field);
            echo $str;
            ?>
        </div>
    </div>
</div><!--/.bl_productionItem-->