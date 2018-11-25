<?php
class Page_Controller extends Base {
    protected $text_page;
    
    protected function input($params){
        parent::input();
        if (isset($params['id'])) {
        	$id = $this->clear_int($params['id']);
            $this->text_page = $this->ob_m->get_content_page($id);
            $this->title .= $this->text_page['title'];
            $this->keywords = $this->text_page['keywords'];
            $this->description = $this->text_page['description'];
        }
    }
    
    protected function output(){       
        $this->content = $this->render(VIEW.'view_page',array(
                                                              'content_page' => $this->text_page
                                                              ));
        $this->page = parent::output();
        return $this->page;
    }
}