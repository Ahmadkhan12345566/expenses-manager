<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->load->model('Transaction_model');
        $this->load->helper('form');
    }

    public function pageLoad($page,$data=null){

        $this->load->view('inc/header');
        $this->load->view('inc/sidebar');
        $this->load->view($page,$data);
        $this->load->view('inc/footer');

    }

    public function index()
    {
        // Todo:total of current month

        $data["total_income"]= $this->Crud_model->get_total(1);
        $data["total_equality"]= $this->Crud_model->get_total(2);
        $data["total_expense"]= $this->Crud_model->get_total(3);
        $data["total_lability"]= $this->Crud_model->get_total(4);


        // Todo:total of month one by one show in grapha
        $data["graph_total__income"]= $this->Crud_model->get_total_by_months(1);
        //var_dump($data["graph_total__income"][0]->month);
        $data["graph_total__equality"]= $this->Crud_model->get_total_by_months(2);
        $data["graph_total__expense"]= $this->Crud_model->get_total_by_months(3);
        $data["graph_total__lability"]= $this->Crud_model->get_total_by_months(4);

        // Todo:total amount of month
        $data["total"]= $this->Crud_model->get_total_amount_of_month();

        // Todo:total of current month

        $data["day_income"]= $this->Crud_model->get_total_by_day(1);
        $data["day_equality"]= $this->Crud_model->get_total_by_day(2);
        $data["day_expense"]= $this->Crud_model->get_total_by_day(3);
        $data["day_lability"]= $this->Crud_model->get_total_by_day(4);

        $this->pageLoad('dashboard', $data);
    }
    public function transact()
    {
        if ($this->input->post()){

            $this->Crud_model->insert('transactions', $this->input->post());

        }
            $data["transactions"]= $this->Transaction_model->get_all_data();
            $data["transaction_types"]= $this->Crud_model->get_all_data('transaction_types');
            $data["categories"]= $this->Crud_model->get_all_data('categories');
            $data["total"]= $this->Crud_model->get_total('transaction');
            $this->pageLoad('transactions', $data);
    }
    public function transacttype()
    {
        $data=$this->input->post();
        if ($data){
            $this->Crud_model->insert('transaction_types',$data);
        }
            $data["transaction_types"]= $this->Crud_model->get_all_data('transaction_types');
            $this->pageLoad('transactiontype', $data);

    }
    public function catetype()
    {

        if ($data=$this->input->post()){
            $this->Crud_model->insert('categories',$data);
        }

            $data["categories"]= $this->Crud_model->get_all_data('categories');
            //var_dump($data);
            //die();
            $this->pageLoad('categorytype', $data);

    }
}
