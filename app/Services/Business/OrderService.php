<?php


namespace App\Services\Business;
/*
 * Author: Raymond Popsie
*     Statement of work: This is my work. No one has contributed to this project.  */

use App\Services\Data\CustomerDAO;
use App\Services\Data\OrderDAO;
use Illuminate\Support\Facades\DB;

class OrderService
{
    /*
     * This method will use conduct a manual transaction using the addCustomers method and addOrder method.
     * If the add customers or add order method do not work the entire transaction will be rolled back. The transaction
     * method has built in try catch and turns autocommit off  */
    public function createOrder($firstName, $lastName, $product){

        DB::transaction(function() use ($firstName, $lastName, $product ) {

            $cDAO = new CustomerDAO();
            $oDAO = new OrderDAO();

            $cDAO->addCustomers($firstName, $lastName);
            $oDAO->addOrder($product);

        });

    }


}
