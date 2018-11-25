<?php
class Index_Controller extends Base {
    protected $text;
    protected $interesting, $new_recipes;
    
    protected function input() {
        parent::input();
        $this->title .= "Главная";
        $this->keywords = "Главная, сайт поварёнок, povaryonok, рецепты, полезные советы, много интерестного про еду";
        $this->description = "На сайте поварёнок,
        Вы найдёте много разных рецептов и полезных советов о правильном и вкусном приготовлении пищи";
        $this->new_recipes = $this->ob_m->get_new_recipes();
        $this->interesting = $this->ob_m->get_recipes_interesting();
    }
    
    protected function output() {
        $this->content = $this->render(VIEW.'content',array(
                                                            'new_recipe' => $this->new_recipes,
                                                            'interes' => $this->interesting
                                                            ));
        $this->page = parent::output();
        return $this->page;
    }
}