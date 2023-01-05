<?php

/**
 * home controller
 */
class Home extends Controller
{
  function index()
  {
    // code...
    $user = new User();


    //$data = $user->where('firstname', 'john');
    $arr['firstname'] = 'Boom2';
    $arr['lastname'] = 'Bam2';
    //$arr['date'] = '2023-01-02 13:52:11';
    //$arr['user_id'] = 'sdsdsds';
    //$arr['gender'] = 'female';
    //$arr['school_id'] = 'sdsdsdsd';
    //$arr['level'] = 'student';

    //$user->insert($arr);
    $user->update(3, $arr);
    //$user->delete(id); 
    $data = $user->findAll();

    $this->view('home', ['rows'=>$data]);
  }
}
