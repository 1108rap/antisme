<?php

function check_already_login() {

    $ci =& get_instance();
    $user_session = $ci->session->userdata('username');
    if($user_session) {
        redirect('Dashboard');
    }

}

function check_not_login() {

    $ci =& get_instance();
    $user_session = $ci->session->userdata('username');
    if(!$user_session) {
        redirect('Auth');
    }

}