<div class="content">
    <div class="popular">
        <h3>Интересное</h3>
<? if ($interes) : ?>
    <? foreach($interes as $item_i) : ?>
        <div class="block_popular">
            <div class="content_popular">
                <img class="block_popular_img" src="<?=UPLOAD_DIR.$item_i['img'];?>" alt="popular_img"/>
                <h4>
                    <a href="<?=SITE_URL?>view_detailed/id/<?=$item_i['recipe_id']?>"><?= $item_i['title']; ?></a>
                </h4>
                <?= $item_i['anons']; ?>
               <div class="popular_button_div">
                    <a href="<?=SITE_URL?>view_detailed/id/<?=$item_i['recipe_id']?>" class="popular_button">Читать</a>
               </div>
            </div>
            <img class="popular_shadow" src="<?=SITE_URL.VIEW?>images/popular_shadow.png" alt="popular_shadow" />
        </div> 
    <? endforeach; ?>
<? endif; ?>
    </div>
    <div class="new_receptions">
        <h3>Новые рецепты</h3>
<? if ($new_recipe) : ?>
    <? foreach ($new_recipe as $item) : ?>
        <div class="block_recept">
            <div class="recept_img">
                <a href="<?=SITE_URL;?>view_detailed/id/<?=$item['recipe_id'];?>">
                    <img src="<?=SITE_URL.UPLOAD_DIR.$item['img'];?>" alt="block_recep_img" title="Перейти к рецепту"/>
                </a>
            </div>
            <h3><?=$item['title'];?></h3>
            <p><?=$item['anons'];?></p>
            <a href="<?=SITE_URL;?>view_detailed/id/<?=$item['recipe_id'];?>" class="read_more">Читать далее</a>
        </div>
    <? endforeach; ?>
<? endif; ?>
    </div>
</div>