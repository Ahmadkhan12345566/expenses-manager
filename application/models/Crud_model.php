<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Ahmad khan
 * Date: 8/3/2019
 * Time: 6:21 PM
 */
class Crud_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }

    public function insert($table, $data){
        date_default_timezone_set('Asia/Karachi');
        $data['created_at']=date('Y-m-d H:i:s');
        $data['updated_at']=date('Y-m-d H:i:s');
        return $this->db->insert($table, $data);
    }

    public function get_all_data($table){
        return $this->db->get($table)->result();
    }

    public function get($table, $id){
        $this->db->where('id', $id);
        return $this->db->get($table)->row();
    }

    public function update($table, $id , $data){
        $this->db->where('id', $id);
        $this->db->set($table,$data);
        return $this->db->update($table);
    }

    public function delete($table, $id){
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }
    //Todo: Total Current Month Amount Sum
    public function get_total($id){
        $this->db->select(' SUM(amount) AS amount');
        $this->db->where('transaction_type_id', $id);
        $this->db->where('MONTH(date)', date('m'));
        // $this->db->where('YEAR(date)', date('Y'));
        $query = $this->db->get('transactions');
        $result = $query->row();
        return $result;

    }

    //Todo: Amount Sum of All months
    public function get_total_by_months($id){

        $this->db->select('MONTH(date) AS month,SUM(amount) AS amount');
        $this->db->where('transaction_type_id', $id);
             $this->db->group_by('MONTH(date)');
        $result=$this->db->get('transactions')->result();
        return $result;
    }

    //Todo: Amount Sum of All months
    public function get_total_amount_of_month(){
        $this->db->select('SUM(amount) AS amount');
        $query=$this->db->get('transactions');
        $result=$query->row();
//        var_dump($result);
//        die();
        return $result;
    }

    //Todo: Total Category Amount Sum
    public function get_category_total_by_month(){


        $this->db->select('categories.name,SUM(amount) AS amount');
        $this->db->from('transactions');
       $this->db->join("categories","categories.id = transactions.category_id",'right');
        $this->db->where('MONTH(date)', date('m'));
        $this->db->group_by('category_id');
        $result=$this->db->get()->result();
        return $result;
        //  $this->db->select('SUM(amount) AS category_name');
        //$this->db->where('category_id', $id);
       // $this->db->group_by('MONTH(date)');
//        $this->db->where('date BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()');
        // $this->db->where('YEAR(date)', date('Y'));
       // $query = $this->db->get('transactions');
       // $result = $query->result();
//        var_dump($result);
//        die();
        //return $result;

    }




}