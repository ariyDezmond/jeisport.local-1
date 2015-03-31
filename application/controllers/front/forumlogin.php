<?php

class Forumlogin extends CI_Controller {
    public function login(){
        if ($this->input->get('username') != '' && $this->input->get('password') != '') {
            $query = $this->db->get_where('phpbb_users', array('username' => $this->input->get('username')));
            $userData = $query->row_array();

            $getVars = ($this->input->get())? $this->input->get() : array();
            $getString = '?mode=login';
            foreach ($getVars as $getKey=>$getVar) {
                $getString .= "&$getKey=$getVar";
            }

            $url = "http://{$_SERVER['HTTP_HOST']}/forum/ucp.php$getString";
            $c = curl_init($url);
            curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
            $page = curl_exec($c);
            curl_close($c);
            if (!empty($userData) && empty($page)) {
                $this->session->set_userdata('phpbb_username', $this->input->get('username'));
                $this->session->set_userdata('phpbb_userpassword', $this->input->get('password'));
                header("Location:/forum/ucp.php$getString");
            }
            header("Location:/index.php");
        }
        header("Location:/index.php");
    }

    public function login1(){

        $getVars =  array(
            'login' => 'external',
            'redirect' => '/forum/',
            'username' => $this->session->userdata('phpbb_username'),
            'password' => $this->session->userdata('phpbb_userpassword'),
        );
        $getString = '?mode=login';
        foreach ($getVars as $getKey=>$getVar) {
            $getString .= "&$getKey=$getVar";
        }
        header("Location:/forum/ucp.php$getString");
    }

    public function logout() {
        session_start();
        session_destroy();
        $this->session->unset_userdata('phpbb_username');
        $this->session->unset_userdata('phpbb_userpassword');

        if ($this->input->get('redirect_to_forum')) {
            header("Location:/forum/");
            exit;
        }
        header("Location:/forum/ucp.php?mode=logout&sid={$this->session->userdata('sid')}&redirect=/");
    }
}