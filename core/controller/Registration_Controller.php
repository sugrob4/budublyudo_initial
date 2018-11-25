<?php
class Registration_Controller extends Base{
    
    
    protected function input($params){
        parent::input();
    }
    
    protected function output(){
        $this->content = $this->render(VIEW.'registration',array(
                                                                
                                                                ));
        $this->page = parent::output();
        return $this->page;
    }
}