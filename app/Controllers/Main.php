<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
/*konnstruktor = inicializace objektu */
class Main extends BaseController
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        /* Zavolá původní inicializaci z BaseController
        *view = zaklad je stejny, lisi se jenom data, které se vykresluji
         */
        parent::initController($request, $response, $logger);
    }

    public function index()
    {
        echo view("index");
    }
    public function dungeons(){
        echo view("dungeons");
    }
    public function minecraft(){
        echo view("minecraft");
    }
    public function legends(){
        echo view("legends");
    }
    public function film(){
        echo view("film");
    }
    public function spoluzaci(){
        echo view("spoluzaci");
    }
}
