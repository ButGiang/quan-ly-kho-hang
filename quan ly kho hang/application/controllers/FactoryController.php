<?php
    class FactoryController {
        public function make() {
            switch($route['admin'] ?? '') {
                case 'admin_user':
                    return $this->session->userdata('admin_user');
                case 'admin':
                    return $this->ADM->get_admin('',$where_admin);
                case 'web':
                    return $this->ADM->identitaswebsite();
                case 'breadcrumb':
                    return 'Dashboard';
                case 'dashboard':
                case 'content':
                    return 'admin/dashboard/statistik';
                case 'notif':
                    return $this->ADM->get_low_stock();       

                default:
                    $this->load->vars($data);
                    $this->load->view('admin/home');
            }

            switch($route['Login'] ?? '') {
                case 'web':
                    $this->ADM->identitaswebsite();
                    $this->load->vars($data);
			        $this->load->view('admin/login');
                
                default:
                $this->LOG->remov_session();
                redirect("login");
            }

            switch($route['website'] ?? '') {
                case 'web':
                    $this->ADM->identitaswebsite();
                    $this->load->vars($data);
			        $this->load->view('admin/login');
                
                default:
                $this->LOG->remov_session();
                redirect("login");
            }
        }
    }
?>