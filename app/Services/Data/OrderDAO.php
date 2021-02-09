<?php
/*
     * Author: Raymond Popsie
 *     Statement of work: This is my work. No one has contributed to this project.  */

namespace App\Services\Data;


use Illuminate\Support\Facades\DB;

class OrderDAO
{
    /*
     * Function will add insert an order to the database using the customer ID as the foreign key */
    public function addOrder($product){

        $customerID = 1;
        $insertDetails = [
            'Product' => $product,
            'customers_ID' => $customerID
        ];

        $insert = DB::table('orders2')
            ->insert($insertDetails);

        if($insert === 1){
            return true;
        }
        else{
            return false;
        }
    }

}
