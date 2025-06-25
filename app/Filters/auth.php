<?php
namespace App\FilterS;

use CodeIgniter\Filters\FilterInterface as FiltersFilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\FilterInterface;

class auth implements FiltersFilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('logged_in')){
            return redirect()->to('/ProT3_42203444/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }

}