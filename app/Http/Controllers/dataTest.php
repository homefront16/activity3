<?php
/*
     * Author: Raymond Popsie
 *     Statement of work: This is my work. No one has contributed to this project.  */
namespace App\Http\Controllers;

use App\Services\Business\OrderService;
use App\Services\Data\CustomerDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class dataTest extends Controller
{
    public function index(Request $request)
    {
        Log::info("Entering dataTest Controller index()");
        $firstName = $request->input('First_Name');
        $lastName = $request->input('Last_Name');

        $cDAO = new CustomerDAO();

        If($cDAO->addCustomers($firstName, $lastName)){
            return view('yes');
        }
        else{
            return "did not work";
        }


    }
    public function transaction(Request $request)
    {
        $firstName = $request->input('First_Name');
        $lastName = $request->input('Last_Name');

        $OS = new OrderService();
        if($OS->createOrder($firstName, $lastName, "Oven"));

        return view(yes);



    }
}
