<?php

/**
 * @package employeesplugin
 */

namespace Inc\Pages;


class Admin
{
    public $pages;

    public function __construct()
    {
    }

    function register()
    {
        add_action('admin_menu', [$this, 'add_employees_menu']);
        add_action('admin_menu', [$this, 'add_add_employee_submenu']);
        add_action('admin_menu', [$this, 'add_view_employee_submenu']);
    }

    function add_employees_menu()
    {
        add_menu_page(
            'Employees',
            'Employees',
            'manage_options',
            'employees',
            [$this, "employees_menu_cb"],
            'dashicons-groups',
            110
        );
    }
function employees_menu_cb(){


}
   

    function add_add_employee_submenu()
    {
        add_submenu_page(
            'employees',
            'Add Employee',
            'Create Employee',
            'manage_options',
            'add_employee',
            [$this, "add_employee_cb"]
        );
    }

    function add_employee_cb()
    {
        require_once ABSPATH . 'wp-content/plugins/employeeplugin/templates/Add_employee.php';
    }

    function add_view_employee_submenu()
    {
        add_submenu_page(
            'employees',
            'View Employees',
            'View Employees',
            'manage_options',
            'view_employees',
            [$this, "view_employees_cb"]
        );
    }

    function view_employees_cb()
    {
        require_once ABSPATH . 'wp-content/plugins/employeeplugin/templates/View_employees.php';
    }
}
