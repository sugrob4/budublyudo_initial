<?php
class Model {
    static $instance;
    public $ins_driver;
    
    static function get_instance() {
        if (self::$instance instanceof self) {
            return self::$instance;
        }
        return self::$instance = new self;
    }
    
    public function __construct() {
        try {
            $this->ins_driver = Model_Driver::get_instance();
        }
        catch(DbException $e) {
            exit();
        }
        
    }
    
    public function get_new_recipes() {
        $result = $this->ins_driver->select(
                                            array('recipe_id','title','img','anons'),
                                            'recipes',
                                            array('recipe' => 1),  // ERROR
                                            'date',
                                            'DESC',
                                            5
                                            );
        $row = array();
        foreach ($result as $value) {
        	$value['anons'] = substr($value['anons'],0,200);
            $value['anons'] = substr($value['anons'],0, strrpos($value['anons'],' '));
            $value['anons'] = rtrim($value['anons'], ' ,.');
            $value['anons'] = substr_replace($value['anons'], '...', strlen($value['anons']));
            $row[] = $value;
        }
        return $row;
    }
    
    public function get_pages() {
        $result = $this->ins_driver->select(
                                            array('page_id','title'),
                                            'pages',
                                            array(),
                                            'position',
                                            'ASC',
                                            false
                                            );
        return $result;
    }
    
    public function get_catalog_category() {
        $result = $this->ins_driver->select(
                                            array('category_id', 'category_name'),
                                            'categories'
                                            ); 
        return $result;
    }
    
    public function get_recipes_interesting() {
        $result = $this->ins_driver->select(
                                            array('recipe_id','title','	img','anons','category_id'),
                                            'recipes',
                                            array('publish' => 1),
                                            'RAND()',
                                            false,
                                            5
                                            );
        $row = array();
        foreach ($result as $val) {
        	$val['anons'] = substr($val['anons'], 0, 300);
            $val['anons'] = substr($val['anons'], 0, strrpos($val['anons'], ' '));
            $val['anons'] = rtrim($val['anons'],' .,');
            $val['anons'] = substr_replace($val['anons'], '...', strlen($val['anons']));
            $row[] = $val;
        }
        return $row;
    }
    
    public function get_header_categories() {
        $result = $this->ins_driver->select(
                                            array('category_id','category_name','in_header'),
                                            'categories',
                                            array('in_header' => "'1','2','3','4','5'"),
                                            'in_header',
                                            'ASC',
                                            5,
                                            array('IN')
                                            );
        return $result;
    }
    
    public function get_recipe_content($id) {
        $result = $this->ins_driver->select(
                                            array('title','keywords','description','img','text','date'),
                                            'recipes',
                                            array('recipe_id' => $id,'publish' => 1)
                                            );
         $row_r = array();
         foreach ($result as $dat) {
        	$date_r = date_create($dat['date']);
            $dat['date'] = date_format($date_r,'d.m.Y');
            $row_r[] = $dat;
        }
        return $row_r[0];
    }
    
    public function get_blocks_recipes() {
        $result = $this->ins_driver->select(
                                            array('recipe_id','title','	img','anons'),
                                            'recipes',
                                            array('recipe' => 1)
                                            );
        return $result;
    }
    
    public function get_content_page($id) {
        $result = $this->ins_driver->select(
                                            array('title','keywords','description','text','type'),
                                            'pages',
                                            array('page_id' => $id)
                                            );
        return $result[0];
    }
}