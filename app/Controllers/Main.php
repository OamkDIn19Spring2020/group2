<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    function showme($page = 'main')
    {
        if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
    // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }

}
