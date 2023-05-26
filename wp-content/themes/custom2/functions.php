<?php

add_theme_support('post-formats', ['aside', 'image', 'video', 'quote', 'gallery']);

add_theme_support('post-thumbnails');


//menu setup
function custom5_theme_setup()
{
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'custom5_theme_setup');



function food_post_type()
{
    $labels = [
        'name' => 'Foods',
        'singular_name' => 'Food',
        'add_new' => 'Add food item',
        'all_items' => 'All foods',
        'add_new_item' => 'Edit food Item',
        'new_item' => 'New food item',
        'view_item' => 'View item',
        'search_item' => 'Search food',
        'not_found' => 'No food item found',
        'not_found_in_trash' => ' No food items found in trash',
        'parent_item_colon' => 'Parent Item'
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability' => 'post',
        'hierachichal' => false,
        'supports' => [
            'title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'

        ],
        'taxonomies' => [
            'category',
            'post_tag',
            'menu_position' => 7
        ],
    ];
    register_post_type('food', $args);
}
add_action('init', 'food_post_type');

//Login attempts login
function checking_login_attempts($user, $username, $password)
{
    if (get_transient('attempted_login')) {
        $attempts = get_transient('attempted_login');
        if ($attempts['tried'] >= 4) {
            $locked_time = get_option('_transient_timeout_' . 'attempted_login');

            $upto = remaning_time($locked_time);


            return new WP_Error('too_many_attempts', '<strong>ERROR</strong>: You have exceeded maximum login attempts. Please try again after ' . $upto);
        }
    }
    return $user;
}

add_filter('authenticate', 'checking_login_attempts', 30, 3);

function failed_login($username)
{
    if (get_transient('attempted_login')) {
        $attempts = get_transient('attempted_login');
        $attempts['tried']++;
        $attempts['tried']++;
        set_transient('attempted_login', $attempts, 180);
    } else {
        $attempts = [
            'tried' => 1
        ];
        set_transient('attempted_login', $attempts, 180);
    }
}

add_action('wp_login_failed', 'failed_login',10,1 );

function remaning_time($times)
{
  $timestamp =[
    "second",
"minute",
"hour", 
"day",
"week",
"month",
"year"  
  ];
  $lengths = [
    "60",
"60",
"24",
"7",
"4.35",
"12"
  ];
  $now = time();
  $difference = $times - $now;
  for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++){
    $difference /= $lengths[$j];
  }
  $difference = round($difference);
  if($difference != 1){
    $timestamp[$j] .= "s";
  }
  $difference .= " " . $timestamp[$j] . " remaining";
  return $difference;


} 
