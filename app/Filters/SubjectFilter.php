<!-- Filter buat find it teacher nanti maunya biar langsung ke mapel teachernya -->

<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $level = session()->get('level');
        if ($level == 2) {
            return redirect()->to('/dashboard');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // $session = session();
        // if ($session->get('log') == TRUE) {
        //     return redirect()->to('/');
        // }
    }
}
