<?php
/**
 * @package Interactive Page Hierarchy
 */
/*
Plugin Name: Interactive Page Hierarchy
Plugin URI: https://interactivepagehierarchy.georgetekelis.com
Description: Interactive Page Hierarchy lets you edit or create page hierarchies in a powerful, visual drag & drop interface.
Version: 1.0.1
Author: George Tekelis
Author URI: https://www.georgetekelis.com
License: GPLv2 or later
Text Domain: georgetekelis
*/

function gtek_iph_load_scripts($hook){
    // Load only on ?page=mypluginname
    if($hook != 'toplevel_page_gtek_iph') {
        return;
    }   
    wp_enqueue_script( 'lodash-script', plugin_dir_url( __FILE__ ) . '/libs/lodash.js', false );
    wp_enqueue_script( 'backbone-script', plugin_dir_url( __FILE__ ) . '/libs/backbone.js', false );
    wp_enqueue_script( 'joint-graphlib-script', plugin_dir_url( __FILE__ ) . '/libs/graphlib.min.js', false );
    wp_enqueue_script( 'joint-dagreCore-script', plugin_dir_url( __FILE__ ) . '/libs/dagre.core.js', false );
    wp_enqueue_script( 'joint-dagreLayout-script', plugin_dir_url( __FILE__ ) . '/libs/dagre.min.js', false );
    wp_enqueue_script( 'joint-script', plugin_dir_url( __FILE__ ) . '/libs/joint.min.js', false );
    
    //// import bootsrap
    wp_enqueue_style('bootstrap4-style', plugin_dir_url(__FILE__).'libs/bootstrap.min.css' );
    wp_enqueue_script('bootstap4-script', plugin_dir_url(__FILE__).'/libs/bootstrap.min.js');
    
    wp_enqueue_style( 'joint-style', plugin_dir_url( __FILE__ ) . '/libs/joint.css' );
    wp_enqueue_style( 'gtek_iph-style', plugin_dir_url( __FILE__ ) . '/css/gtek_iph_style.css' );
    wp_enqueue_script( 'manager-script', plugin_dir_url( __FILE__ ) . '/js/gtek_iph_manager.js', false );
    
    //// toastr notifications
    wp_enqueue_style('toastr-style', plugin_dir_url(__FILE__) . 'libs/toastr.min.css');
    wp_enqueue_script('toastr-script', plugin_dir_url(__FILE__) . 'libs/toastr.min.js');
}

add_action('admin_enqueue_scripts', 'gtek_iph_load_scripts');

if(is_admin()){
    add_action( 'admin_menu', 'gtek_iph_plugin_menu' );
}

function gtek_iph_plugin_menu() {
    add_menu_page( 
        'Interactive Hierarchy',
        'Hierarchy',
        'manage_options',
        'gtek_iph',
        'gtek_iph_plugin_options',
        'dashicons-networking' );
}

function gtek_iph_plugin_options() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    echo '<div class="wrap">';     
    echo '<div id="iph-toolbar">
            <div class="row">
                <div class="col-md-12" justify-content-center>
                    <button id="iph-newPage" type="button" class="btn btn-primary">New Page</button>                    
                    <button id="iph-save" type="button" class="btn btn-success">Save Hierarchy</button>
                </div>
            </div>            
          </div>';
    echo '<div class="row" style="margin-top:20px;">
                <div class="col-md-12" justify-content-center>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>To create a new page,</strong> right-click anywhere on the canvas.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
         </div>';

    echo '<!-- Modal SAVE OVERLAY -->
    <div class="modal fade" id="ModalSaveOverlay" tabindex="-1" role="dialog" aria-labelledby="ModalOptionsTitle" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
   
        </div>
    </div>';

    echo '<!-- Modal PAGE OPTIONS -->
            <div class="modal fade" id="ModalOptions" tabindex="-1" role="dialog" aria-labelledby="ModalOptionsTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalOptionsTitle">Page options</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                <div class="form-group">
                    <label for="pageTitle">Page title</label>
                    <input type="text" class="form-control" id="pageTitle" aria-describedby="pageTitle" placeholder="page title">  
                </div>               

                <div class="form-group">
                <label for="pageStatus">Page status</label>
                    <select id="pageStatus" class="form-control">
                    <option value="draft">draft</option>
                    <option value="publish">publish</option>                    
                    </select>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button id="iph-modal-save" type="button" class="btn btn-success" data-dismiss="modal">Done</button>
                </div>
                </div>
            </div>
            </div>';

    echo '<!-- Modal PAGE DELETE -->
            <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalDeleteTitle">Permanently delete page</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                <div class="alert alert-danger" role="alert">
                    <p>By clicking the Delete button, the page will be INSTANTLY removed from the visual hierarchy as well as the site\'s pages!</p>                    
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button id="iph-modal-delete" type="button" class="btn btn-success DeletePageModalButton" data-dismiss="modal">Delete</button>
                </div>
                </div>
            </div>
            </div>';
    echo '<input id="hdn_PageTitles" type="text" hidden value="' . json_encode($pageTitlesList) . '">';    

    echo '<div id="graphContainer" style="height:700px; overflow:auto; position: relative;" >';    
    echo '<div id="myholder" style="position: absolute; overflow: hidden;"></div>';
    echo '</div>';
    echo '</div>';

    //context menu
    echo '<ul class="iph-context-menu" id="iph-container-menu">';
    echo '<li data-action="newPage">New Page</li>';    
    echo '</ul>';
}

add_action( 'wp_ajax_gtek_iph_load_wp_pages', 'gtek_iph_load_wp_pages' );

function gtek_iph_load_wp_pages() {
    $pages = get_pages(
        array(
            'post_status' => ['draft', 'publish']
        )
    ); 
    $pageTitlesList = array();

    for ($i=0; $i < count($pages) ; $i++) { 
        $pageTitlesList[$i] = $pages[$i]->post_title;     
    }    
    echo json_encode($pages);
}

add_action('wp_ajax_iph_save_pages', 'iph_save_pages');

//========== BEGIN::DATA SANITIZATION
function gtek_iph_sanitize_text_field( $input ) {
    $filteredInput = _sanitize_text_fields( $input, false );
    return apply_filters( 'sanitize_text_field', $filteredInput, $input );
}

//========== END::DATA SANITIZATION

function iph_save_pages()
{
        $the_post = array(
            'post_type'     => 'page',
            'post_title'    => strlen ( $_POST['postTitle'] ) > 0 ? gtek_iph_sanitize_text_field($_POST['postTitle']) : '--NO TITLE--',
            'post_name'     => strlen ( $_POST['postTitle'] ) > 0 ? sanitize_title_with_dashes($_POST['postTitle'],'','save') : '--NO TITLE--',
            'post_status'   => strlen ($_POST['postStatus'] ) > 0 ? gtek_iph_sanitize_text_field($_POST['postStatus']) : 'publish',
            'post_author'   => get_current_user_id()            
        );
    
        echo wp_insert_post($the_post);    
}

add_action('wp_ajax_iph_update_pages', 'iph_update_pages');

function iph_update_pages()
{
        $the_post = array(
            'post_type'     => 'page',
            'post_title'    => strlen ( $_POST['postTitle'] ) > 0 ? gtek_iph_sanitize_text_field($_POST['postTitle']) : '--NO TITLE--',
            'post_name'     => strlen ( $_POST['postTitle'] ) > 0 ? sanitize_title_with_dashes($_POST['postTitle'],'','save') : '--NO TITLE--',
            'post_status'   => strlen ($_POST['postStatus'] ) > 0 ? gtek_iph_sanitize_text_field($_POST['postStatus']) : 'publish',
            'post_author'   => get_current_user_id(),
            'post_parent'   => absint(intval( $_POST['postParent'] )),
            'ID'            => absint(intval( $_POST['id'] )),
            'post_content'  => $_POST['postContent']
        );
    
        echo wp_insert_post($the_post);        
}

add_action('wp_ajax_iph_get_page_links', 'iph_get_page_links');

function iph_get_page_links()
{
    $data = array('edit_link' => get_edit_post_link( absint(intval($_POST['id'])), '&'),
                  'view_link' => get_permalink( absint(intval($_POST['id'])), $leavename = false));   
    
    echo json_encode($data, JSON_UNESCAPED_SLASHES);
}

add_action('wp_ajax_iph_delete_post', 'iph_delete_post');

function iph_delete_post()
{   
    echo wp_delete_post(absint(intval($_POST['id'])), true);
}
