<?php

namespace App\Http\Controllers;

use App\Models\DTO;
use App\Services\Business\SecurityService;
use Illuminate\Http\Request;

class UsersRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $securityService = new SecurityService();
        $data = $securityService->getAllUsers();

        $errorCode = json_last_error();
        $errorMessage = json_last_error_msg();


        $DTO = new DTO($errorCode, $errorMessage, $data);

        $json = json_encode($DTO->jsonSerialize(), JSON_PRETTY_PRINT);

        return $json;

    }


    public function show($id)
    {
        $securityService = new SecurityService();
        $data = $securityService->getUserByID($id);

        $errorCode = json_last_error();
        $errorMessage = json_last_error_msg();


        $DTO = new DTO($errorCode, $errorMessage, $data);

        $json = json_encode($DTO->jsonSerialize(), JSON_PRETTY_PRINT);

        return $json;
    }


}
