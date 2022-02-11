<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authmodel extends CI_Model {
    public function is_login()
    {
        $is_login = $this->session->userdata('auth');
        if(!empty($is_login))
        {
            return true;
        }else{
            return false;
        }
    }
    public function do_login()
    {
        $post = $this->input->post();
        if(!empty($post))
        {
            $name = @$post['name'];
            $password = @$post['password'];
            $user = $this->db->query('SELECT * FROM user WHERE name = ?', $name)->row_array();
            if(!empty($user))
            {
                echo $password;
                if($user['password']==md5($password)){
                    $this->session->set_userdata('auth',$user);
                    redirect(base_url());
                }else{
                    return 'maaf user dan sandi tidak sesuai';
                }
            }else{
                return 'maaf user '.$name.' tidak terdaftar';
            }
        }
    }
}