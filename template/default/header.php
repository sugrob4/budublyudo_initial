<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Aleksey Povar" />
    <title><?=$title;?></title>   
    <meta http-equiv="Keywords" content="<?=$keywords;?>" />
    <meta http-equiv="Description" content="<?=$description;?>" />
<? if ($styles) : ?>
    <? foreach ($styles as $style) : ?>
        <link rel="stylesheet" type="text/css" href="<?=$style;?>"/>
    <? endforeach; ?>
<? endif; ?>
<? if ($scripts) : ?>
    <? foreach ($scripts as $script) : ?>
        <script type="text/javascript" src="<?=$script;?>"></script>
    <? endforeach; ?>
<? endif; ?>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?=SITE_URL.VIEW?>images/favicon.ico"/> 
    <link rel="icon" href="<?=SITE_URL.VIEW?>images/favicon.ico"/>
</head>
<body>
<div class="karkas">
    <div class="header_main">
        <div class="header_top">
        <a href="<?=SITE_URL;?>" class="logo_top_left">
            <img src="<?=SITE_URL.VIEW;?>images/logo_top_left.png" alt="logo_top_left" title="<?=$this->title;?>"/>
        </a>
            <div class="header_right">
                <ul class="menu_top">
                <li>
                    <a href="<?=SITE_URL;?>recipes_page" class="men_head_1">Рецепты</a>
                </li>
<? if ($cat_header): ?>
    <? for($i=0; $i<count($cat_header); $i++): ?>
        <li>
            <a href="<?=SITE_URL;?>catalog/category/id/<?=$cat_header[$i]['category_id']?>" class="men_head_<?=$cat_header[$i]['in_header']?>"><?=$cat_header[$i]['category_name']; ?></a>
        </li>
    <? endfor; ?>
<? endif; ?>
                </ul>
            </div>
        </div>
        <div class="header_bottom">
            <ul class="menu_nav">
               	<li class="menu_nav_first"><a href="<?=SITE_URL;?>">Главная</a></li>
                <li><a href="<?=SITE_URL;?>recipes_page">Рецепты</a></li>
<? if ($page) : ?>
    <? foreach($page as $item) : ?>
        <li><a href="<?=SITE_URL;?>page/id/<?=$item['page_id'];?>"><?= $item['title']; ?></a></li>
    <? endforeach; ?>
<? endif; ?>
            </ul>
        </div>
    </div>