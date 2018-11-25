<?php
class Pager{
    protected $page;
    protected $table_name;
    protected $where;
    protected $order;
    protected $napr;
    protected $operand;
    protected $match;
    protected $post_number;
    protected $number_link;
    protected $db;
    protected $total_count;
    public function __construct(
                                $page,
                                $table_name,
                                $where = array(),
                                $order='',
                                $napr='',
                                $poost_number,
                                $number_link,
                                $operand = '=',
                                $match = array()
                                                ){
        $this->page = $page;
        $this->table_name = $table_name;
        $this->where = $where;
        $this->order = $order;
        $this->napr = $napr;
        $this->post_number = $poost_number;
        $this->number_link = $number_link;
        $this->operand = $operand;
        $this->match = $match;
        $this->db = Model_Driver::get_instance();
    }
    public function get_total() {
        if (!$this->total_count) {
            $result = $this->db->select(
                                        array("COUNT(*) as count"),
                                        $this->table_name,
                                        $this->where,
                                        $this->order,
                                        $this->napr,
                                        false,
                                        $this->operand,
                                        $this->match
                                        );
            $this->total_count = $result[0]['count'];	
        }
        return $this->total_count;
    }
    public function get_posts() {
        $total_post = $this->get_total();
        $number_pages = (int)($total_post/$this->post_number);
        if (($total_post % $this->post_number) != 0) {
        	$number_pages++;
        }
        if ($this->page <= 0 || $this->page > $number_pages) {
        	return false;
        }
        $start = ($this->page-1)*$this->post_number;
        $result = $this->db->select(
                                    array('*'),
                                    $this->table_name,
                                    $this->where,
                                    $this->order,
                                    $this->napr,
                                    $start.','.$this->post_number,
                                    $this->operand,
                                    $this->match                                 
                                    );
        return $result;
    }
    public function get_navigation() {
        $total_post = $this->get_total();
        $number_pages = (int)($total_post/$this->post_number);
        if (($total_post % $this->post_number) != 0) {
        	$number_pages++;
        }
        if ($total_post < $this->post_number || $this->page > $number_pages) {
        	return false;
        }
        $result = array();
        if ($this->page != 1) {
        	$result['first'] = 1;
            $result['last_page'] = $this->page - 1;
        }
        return $result;
    }
}