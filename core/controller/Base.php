<?php
abstract class Base extends Base_Controller {
    protected $ob_m;
    protected $title;
    protected $style;
    protected $script;
    protected $header;
    protected $header_menu;
    protected $content;
    protected $side_bar;
    protected $footer;
    protected $pages,$category_recipe,$keywords,$description;
    
    protected function input() {
        $this->title = "Поварёнок | ";
        foreach ($this->styles as $style) {
            $this->style[] = SITE_URL.VIEW.$style;
        }
        foreach ($this->scripts as $script) {
            $this->script[] = SITE_URL.VIEW.$script;
        }
        
        $this->ob_m = Model::get_instance();
        $this->pages = $this->ob_m->get_pages();
        $this->category_recipe = $this->ob_m->get_catalog_category();
        $this->header_menu = $this->ob_m->get_header_categories();
    }
    
    protected function output() {
        $this->side_bar = $this->render(VIEW.'side_bar', array(
                                                               'categories' => $this->category_recipe
                                                               ));
        
        $this->footer = $this->render(VIEW.'footer');
        
        $this->header = $this->render(VIEW.'header',array(
                                                  'styles' => $this->style,
                                                  'scripts' => $this->script,
                                                  'title' => $this->title,
                                                  'keywords' => $this->keywords,
                                                  'description' => $this->description,
                                                  'page' => $this->pages,
                                                  'cat_header' => $this->header_menu
                                                  ));
        
        $page = $this->render(VIEW.'index',array(
                                                 'header' => $this->header,
                                                 'side_bar' => $this->side_bar,
                                                 'content' => $this->content,
                                                 'footer' => $this->footer
                                                 ));
        return $page;
    }
}