<?php
class Recipes_page_Controller extends Base {
    protected $blocks_recipes;
    
    protected function input($params){
        parent::input();
        $this->title .= "Рецепты";
        $this->keywords = "Рецепы, страница рецептов, рецепты сайта povaryonok, приготовление пищи";
        $this->description = "Подборка хороших и интересных рецептов, на сайте Поварёнок";
        $this->blocks_recipes = $this->ob_m->get_blocks_recipes();
    }
    
    protected function output(){
        $this->content = $this->render(VIEW.'recipes_page',array(
                                                                'block_resipe' => $this->blocks_recipes
                                                                ));
        $this->page = parent::output();
        return $this->page;
    }
}