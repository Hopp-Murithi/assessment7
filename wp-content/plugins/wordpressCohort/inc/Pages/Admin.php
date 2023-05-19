<?php

/**
 * @package wordpressCohortplugin
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
        add_action('admin_menu', [$this, 'add_member_page']);
        add_action('admin_menu', [$this, 'add_view_members']);
    }

    function add_member_page()
    {
        add_menu_page(
            'Register member',
            'Register member',
            'manage_options',
            'register_member',
            [$this, "add_member_cb"],
            'dashicons-plus',
            110
        );
    }

    function add_member_cb()
    {
        require_once ABSPATH . 'wp-content/plugins/wordpressCohort/templates/Add_member.php';
    }

    function add_view_members()
    {
        add_menu_page(
            'View all members',
            'View all members',
            'manage_options',
            'view_members',
            [$this, "view_all_members_cb"],
            'dashicons-book',
            111
        );
    }

    function view_all_members_cb()
    {
        require_once ABSPATH . 'wp-content/plugins/wordpressCohort/templates/View_members.php';
    }
}