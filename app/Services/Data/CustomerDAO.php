<?php


namespace App\Services\Data;


use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class CustomerDAO
{
    public function addCustomers($firstName, $lastName){

        $insertDetails = [
            'First_Name' => $firstName,
            'Last_Name' => $lastName
        ];

        // inserts to table
        $insert = DB::table('customers')
            ->insert($insertDetails);

        if($insert){
            return true;
        }
        else{
            return false;
        }
    }



}
