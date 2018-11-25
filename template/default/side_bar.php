<div class="side_bar">
    <div class="categories">
        <h3>Рубрики</h3>
        <ul class="cat_name">
<? if ($categories) : ?>
    <? foreach($categories as $item_c) : ?>
       <li><a href="<?=SITE_URL;?>catalog/cactegory/id/<?=$item_c['category_id'];?>"><?= $item_c['category_name']; ?></a></li> 
    <? endforeach; ?>
<? endif; ?>
      <li><a href="<?=SITE_URL;?>recipes_page">Рецепты</a></li>
        </ul>
    </div>
    <div class="search">             
        <img src="<?=SITE_URL.VIEW;?>images/search_img.png" alt="search_img" />
        <h3>поиск по сайту</h3>
        <p>Введите слово или фразу :</p>
        <form action="" method="get">
            <input type="text" name="search"/>
            <input type="button" value="Искать" name="search_btn"/>
        </form>               
    </div>
    <div class="autorization">
        <h2>Авторизация:</h2>
        <form>
            <input type="text" name="login" class="login" id="login" placeholder="Ваш логин:"/><br />
            <input type="password" class="password" name="pass" id="pass"  placeholder="Ваш пароль:"/><br />
            <p class="background_buttton"><input type="submit" value="Войти"/></p>
        </form>
        <p class="back_butt_a"><a href="<?=SITE_URL?>registration" class="register">Зарегестрироваться</a></p>
    </div>
</div>