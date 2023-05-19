<?php

/**
 * @package ClassManager
 */

namespace Inc\Pages;

class RegisterMember
{
    public function register()
    {
        $this->create_members_table();
        $this->add_new_member();
    }

    function create_members_table()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . 'members';

        $query = "CREATE TABLE IF NOT EXISTS " . $table_name . "(
            id int AUTO_INCREMENT PRIMARY KEY, 
            name text NOT NULL,
             phone text NOT NULL,
             email text NOT NULL,
             age int NOT NULL
         );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($query);
    }

    function add_new_member()
    {
        if (isset($_POST['submit'])) {
            $data = [
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'age' => $_POST['age'],
            
            ];

            global $wpdb;


            $table_name = $wpdb->prefix . 'members';
            $results = $wpdb->insert($table_name, $data);


            global $success_msg;

            $success_msg = false;
            if ($results == true) {
                $success_msg = true;
            } 
        }
    }
}
