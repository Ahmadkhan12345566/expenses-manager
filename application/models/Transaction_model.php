<?php


class Transaction_model extends CI_Model
{

    public function __construct(){
        parent::__construct();
    }

    public function get_all_data(){
        $this->db->select('*');
        $this->db->from("transactions");
        $this->db->join("categories","categories.id = transactions.category_id");
        $this->db->join("transaction_types","transaction_types.id = transactions.transaction_type_id");

        //var_dump( $this->db->get()->result());
        //die();
        return $this->db->get()->result();
    }


    public function get_category_data(){
        $this->db->select('*');
        $this->db->from("categories");
        $this->db->join("transactions","transactions.category_id = categories.id","left");

        //var_dump( $this->db->get()->result());
        //die();
        return $this->db->get()->result();
    }







}