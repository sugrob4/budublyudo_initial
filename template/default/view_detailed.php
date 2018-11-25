<div class="content">
    <p id="krohi">
        <a href="#">Главная</a>&nbsp;&nbsp;&gt;&gt;&gt;&nbsp;
        <a href="#">Полезные советы</a>&nbsp;&nbsp;&gt;&gt;&gt;&nbsp;
        <span>Разделка говядины и качество мяса</span>
    </p>
    <div id="view_detailed">
    <? if($content_recipe) : ?>
        <h2><?=$content_recipe['title']; ?></h2>
        <img src="<?=SITE_URL.UPLOAD_DIR.$content_recipe['img'];?>" alt="view_deatil_img" />
        <?=$content_recipe['text']; ?>       
        <p align="right"><?=$content_recipe['date'];?></p>
    <? else : ?>
        <p id="no_text_recipe">Рецептов и статей с такими параметрами нет.</p>
    <? endif; ?>
    </div>
</div>