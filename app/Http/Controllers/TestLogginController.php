<?php

namespace App\Http\Controllers;

use App\Services\Data\Utility\ILoggerService;
use Illuminate\Http\Request;

class TestLogginController extends Controller
{
    protected $logger;

    public function __construct(ILoggerService $logger){
        $this->logger = $logger;
    }

    public function index(){
        echo "In Index()<br/>";
        $this->logger->info("Entering TestLoginController.index()");
        echo "Out of Index";
    }
}
