<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;   

class auth implements FilterInterface 
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if the user is authenticated
        if (!session()->get('logged_in')) {
            // Redirect to the login page
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
//
    }

}