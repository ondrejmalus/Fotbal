<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * Helpers, které se načtou automaticky
     * (text se hodí pro character_limiter, url třeba pro odkazy).
     */
    protected $helpers = ['text', 'url'];

    /**
     * Data, která se budou předávat do view.
     */
    protected $data = [];

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        // E.g.: $this->session = service('session');

        // 👇 Načteme menu z databáze (musíš mít NavbarModel)
        $navbarModel = new \App\Models\NavbarModel();
        $this->data['navbar'] = $navbarModel->getMenu();
    }
}
