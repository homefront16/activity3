<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class RestClientController extends Controller
{
    public function index()
    {
        // Call Rest API
        $serviceURL = "http://localhost/TestLogin2/usersrest";
        $api = "usersrest";
        $param = "";
        $uri = $api . "/" . $param;
        try {
            // Make REST Call
            $client = new Client(['base_uri' => $serviceURL]);
            $response = $client->request('GET', $uri);

            // Return JSON or Error
            if ($response->getStatusCode() == 200) {
                return $response->getBody();
            } else {
                return "There was an error: " . $response->getStatusCode();
            }
        } catch (\ClientException $e) {
            // Return an error
            return "There was an exception: " . $e->getMessage();
        } catch (GuzzleException $e) {
            return "There was an exception: " . $e->getMessage();
        }
    }

    public function show($id)
    {
        // Call Rest API
        $serviceURL = "http://localhost/TestLogin2/usersrest";
        $api = "usersrest";
        $param = $id;
        $uri = $api . "/" . $param;
        try {
            // Make REST Call
            $client = new Client(['base_uri' => $serviceURL]);
            $response = $client->request('GET', $uri);

            // Return JSON or Error
            if ($response->getStatusCode() == 200) {
                return $response->getBody();
            } else {
                return "There was an error: " . $response->getStatusCode();
            }
        } catch (\ClientException $e) {
            // Return an error
            return "There was an exception: " . $e->getMessage();
        } catch (GuzzleException $e) {
            return "There was an exception: " . $e->getMessage();
        }
    }



}
