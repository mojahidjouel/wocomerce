<?php
function my_menu(){
    register_nav_menus(array(
        'main_menu'=>"Main Menu",
        'footer_menu1'=>"Footer Section 1",
        'footer_menu2'=>"Footer Section 2",
    ));
}
add_action('init','my_menu');

// custome logo
function my_custom_logo_setup(){
    $arg=array(
        'height'        => 100,
        'width'         => 400,
        'flex-height'   => true,
        'flex-width'    => true,
        'header-text' => array('site-title','site-description')
    );
    add_theme_support('custom-logo',$arg);
}
add_action('after_setup_theme','my_custom_logo_setup');



// slider post type
add_action( 'init', 'my_theme_home' );
// The custom function to register a custom article post type
function my_theme_home() {
    // Set the labels. This variable is used in the $args array
    $labels = array(
        'name'               => __( 'Home Post' ),
        'singular_name'      => __( 'Home Post' ),
        'add_new'            => __( 'Add New Home Post' ),
        'add_new_item'       => __( 'Add New Home Post' ),
        'edit_item'          => __( 'Edit Home Post' ),
        'new_item'           => __( 'New Home Post' ),
        'all_items'          => __( 'All Home Post' ),
        'view_item'          => __( 'View Home Post' ),
        'search_items'       => __( 'Search Home Post' ),
        'featured_image'     => 'Home Post Image',
        'set_featured_image' => 'Add Home Post Image'
    );
    // The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels'            => $labels,
        'description'       => 'Home Post image and details add',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt','custom-fields' ),
        'has_archive'       => false,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
    );
    // Call the actual WordPress function
    // Parameter 1 is a name for the post type
    // Parameter 2 is the $args array
    register_post_type('home_post', $args);
}

/* custome field */
function fullWidthField(){
    $post_id=get_the_ID();
    if(get_post_type($post_id)!='home_post'){
        return;
    }

    $value=get_post_meta($post_id,'_full_width',true);
    wp_nonce_field('my_custome_nonce_'.$post_id,'my_custome_nonce');
    ?>
    <div class="misc-pub-section curtime misc-pub-curtime" >
        <label for=""> Full Width Post
            <input type="checkbox" value="1" <?php checked($value,true,true); ?> name="_full_width" id="">
        </label>
    </div>
    <?php
}

function saveCustomeField($post_id){
     if(isset($_POST['_full_width'])){
        update_post_meta($post_id,'_full_width',$_POST['_full_width']);
     }else{
        delete_post_meta($post_id,'_full_width');
     }
}

add_action('post_submitbox_misc_actions','fullWidthField');
add_action('save_post','saveCustomeField');

function TopPost(){
    $post_id=get_the_ID();
    if(get_post_type($post_id)!='home_post'){
        return;
    }

    $value=get_post_meta($post_id,'_top',true);
    wp_nonce_field('my_top_nonce_'.$post_id,'my_top_nonce');
    ?>
    <div class="misc-pub-section curtime misc-pub-curtime" >
        <label for=""> Top Post
            <input type="checkbox" value="1" <?php checked($value,true,true); ?> name="_top" id="">
        </label>
    </div>
    <?php
}

function saveTopPost($post_id){
     if(isset($_POST['_top'])){
        update_post_meta($post_id,'_top',$_POST['_top']);
     }else{
        delete_post_meta($post_id,'_top');
     }
}

add_action('post_submitbox_misc_actions','TopPost');
add_action('save_post','saveTopPost');

add_theme_support('post-thumbnails');
add_image_size('full', 9999, 9999, false);



//********************************my theme option
include_once('WPEX_Options_Panel.php');



// Register new Options panel.
$panel_args = [
    'title'           => 'My Theme Options',
    'option_name'     => 'my_options',
    'slug'            => 'my-options-panel',
    'user_capability' => 'manage_options',
];

$panel_settings = [
    // 'option_1' => [
    //     'label'       => esc_html__( 'Checkbox Option', 'text_domain' ),
    //     'type'        => 'checkbox',
    //     'description' => 'My checkbox field description.',
    // ],
    // 'option_2' => [
    //     'label'       => esc_html__( 'Select Option', 'text_domain' ),
    //     'type'        => 'select',
    //     'description' => 'My select field description.',
    //     'choices'     => [
    //         ''         => esc_html__( 'Select', 'text_domain' ),
    //         'choice_1' => esc_html__( 'Choice 1', 'text_domain' ),
    //         'choice_2' => esc_html__( 'Choice 2', 'text_domain' ),
    //         'choice_3' => esc_html__( 'Choice 3', 'text_domain' ),
    //     ],
    // ],
    // 'email_address' => [
    //     'label'       => esc_html__( 'Email Address', 'text_domain' ),
    //     'type'        => 'text',
    //     'description' => 'Company Email address',
    // ],
    // 'option_4' => [
    //     'label'       => esc_html__( 'Textarea Option', 'text_domain' ),
    //     'type'        => 'textarea',
    //     'description' => 'My textarea field description.',
    // ],

    'Footer_image' => [
        'label'       => esc_html__( 'Footer Image', 'text_domain' ),
        'type'        => 'image',
        'description' => 'This image will show into Footer Image.',
    ],

    'Footer_Language1' => [
        'label'       => esc_html__( 'Footer Language1', 'text_domain' ),
        'type'        => 'text',
        'description' => 'Footer Language1',
    ],

    'Footer_Language2' => [
        'label'       => esc_html__( 'Footer Language2', 'text_domain' ),
        'type'        => 'text',
        'description' => 'Footer Language2',
    ],

    

    'Footer_Copyright' => [
        'label'       => esc_html__( 'Footer Copyright', 'text_domain' ),
        'type'        => 'text',
        'description' => 'Company Copyright',
    ],

    'Footer_Design' => [
        'label'       => esc_html__( 'Footer Design', 'text_domain' ),
        'type'        => 'text',
        'description' => 'Company Design',
    ],
    
    
];

new WPEX_Options_Panel( $panel_args, $panel_settings );



function register_address_widget_area() {
    register_sidebar(
        array(
            'id' => 'address-widget-area',
            'name' => esc_html__( 'Footer Address', 'theme-domain' ),
            'description' => esc_html__( 'Your address in footer', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );
}
    add_action( 'widgets_init', 'register_address_widget_area' );

