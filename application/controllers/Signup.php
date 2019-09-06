<?php


class Signup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->load->helper('form','url');
    }

    public function index(){
        if ($data=$this->input->post()){

            $_POST["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT);

            $this->Crud_model->insert('users', $_POST);

            //todo: inset status data ;
//            $data= array();
//            $this->Crud_model->insert('admission_process_status', $data);
            redirect(base_url("login"));
        }
        else{
            $this->load->view('signup');
        }
    }

    //Todo: Insert Transaction Types in database
    public function insert_transaction_types(){

        // Transaction type //
        $transaction_type=array();
        $transaction_type["transaction_name"]= 'Income';

        // Transaction type 1//

        $transaction_type1=array();
        $transaction_type1["transaction_name"]='Equity';

        // Transaction type 2 //

        $transaction_type2=array();
        $transaction_type2["transaction_name"]='Expense';

        // Transaction type 3//

        $transaction_type3=array();
        $transaction_type3["transaction_name"]='Lability';


        $this->Crud_model->insert('transaction_types', $transaction_type);
        $this->Crud_model->insert('transaction_types', $transaction_type1);
        $this->Crud_model->insert('transaction_types', $transaction_type2);
        $this->Crud_model->insert('transaction_types', $transaction_type3);

        echo "<h2 style='color: blue; text-align: center'>Welcome<h2><hr><p style='color: green; text-align: center''>Your transaction types inserted in your database</p>";
    }


    //Todo: Insert User in database
    public function insert_user(){

        $user=array();
        $user["username"]='admin';
        $user["email"]='admin@gmail.com';
       // $user["password"]='123';
        $user["password"]=password_hash("123",PASSWORD_DEFAULT);


        $this->Crud_model->insert('users',$user);

        echo "<h2 style='color: blue;'>Welcome<h2><hr><p style='color: green;'>Your user inserted in your database</p>";


    }

}