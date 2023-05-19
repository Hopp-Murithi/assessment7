<?php

/**
 * @package employeesplugin
 */

namespace Inc\Pages;

class RegisterEmployee
{
    public function register()
    {
        $this->create_employees_table();
        $this->add_new_employee();
    }

    function create_employees_table()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . 'employees';

        $query = "CREATE TABLE IF NOT EXISTS " . $table_name . "(
            id int AUTO_INCREMENT PRIMARY KEY, 
            name text NOT NULL,
             phone text NOT NULL,
             email text NOT NULL,
             department text NOT NULL
         );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($query);
    }

    function add_new_employee()
    {
        if (isset($_POST['submit'])) {
            $data = [
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'department' => $_POST['department'],
            
            ];

            global $wpdb;


            $table_name = $wpdb->prefix . 'employees';
            $results = $wpdb->insert($table_name, $data);


            global $success_msg;

            $success_msg = false;
            if ($results == true) {
                $success_msg = true;
            } 
        }
    }
}
