<?php
/*
 * ::: Controller Object :::
 * As always the controller class binds views to models.
 * In WPMVC this happens trough the router, that binds controller methods to WP hooks.
 */

namespace plugins\WPMVCExamplePlugin\controller;
use plugins\WPMVC\Core\controller\Controller;
use plugins\WPMVCExamplePlugin\model\ExamplePostType;

class ExampleController extends Controller {

    /**
     * Method for showing and saving custom post type model data trough a shortcode in the router
     */
    public function showPostForm() {
        $noOnce = wp_create_nonce('saveExamplePostData'); //We create a noonce code for checking our data against the form
        if(isset($_POST['saveExamplePostData_noOnce']) && wp_verify_nonce($_POST['saveExamplePostData_noOnce'], 'saveExamplePostData')) { //If we receive data, we create a new post in WP
            $examplePost = new ExamplePostType();
            $examplePost->setPostTitle($_POST['exampleTitle']); //Sets the post title
            $examplePost->setMyCustomPostMeta($_POST['exampleMeta']); //Sets the example meta data
            $examplePost->setPostContent($_POST['exampleContent']); //Sets the post content
            $examplePost->setPostStatus('publish');
            $examplePost->save(true); //We call save with true, because we are creating a new post and not updating a post. If not set the post would only get updated and not created
        }

        //The loadView method loads a view from the plugins view folder. The name is the filename without the PHP extension.
        //Variables that should be passed into the view has to be parsed in as an array. The key will be available in the view as a variable with the given value.
        return $this->loadView('form', array('noOnce' => $noOnce));
    }

    /**
     * Returns a view with a postlist
     * @return string
     */
    public function showPostList() {
        $postList = ExamplePostType::all(); //We can use the static method all, to retrieve all posts of the given CustomPostModel
        return $this->loadView('postList', array('list' => $postList)); //Like before we are returning a view with the list given as a variable that should be passed
    }
} 