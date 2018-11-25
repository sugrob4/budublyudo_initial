<?php
class View_detailed_Controller extends Base {
    protected $view_detailed;
    
    protected function input($params){
        parent::input();
        
        if (isset($params['id'])) {
        	$id = $this->clear_int($params['id']);
        }
        if ($id) {
            $this->view_detailed = $this->ob_m->get_recipe_content($id);
            $this->title = $this->view_detailed['title'];
            $this->keywords = $this->view_detailed['keywords'];
            $this->description = $this->view_detailed['description'];
        }
        
    }
    
    protected function output(){
        $this->content = $this->render(VIEW.'view_detailed',array(
                                                                  'content_recipe' => $this->view_detailed
                                                                  ));
        $this->page = parent::output();
        return $this->page;
    }
}