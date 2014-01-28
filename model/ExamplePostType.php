<?php
/**
 * ::: Example Post Type Model :::
 * This file represents a example model of a new post type
 *
 * The CustomPostModel class adds functionality for save and load custom posts in WP, while also providing methods for query the custom post types.
 * See the class documentation for CustomPostModel in WPMVC repository file.
 */

namespace plugins\WPMVCExamplePlugin\model;
use plugins\WPMVC\Core\model\CustomPostModel;

class ExamplePostType extends CustomPostModel {

    /**
     * This attribute should always exists for telling WPMVC CustomPostModel about the object.
     * It's used when making queries on the CustomPostModel
     * @var string
     */
    static protected $__CLASS__ = __CLASS__;

    /**
     * Name of the custom post
     * @var string
     */
    static protected $customPostName = 'ExamplePostType';

    /**
     * Features the custom post type supports
     * See http://codex.wordpress.org/Function_Reference/register_post_type#Arguments under 'supports' section, for more info
     * @var array
     */
    static protected $supports = array(
        'title',
        'editor',
        'revisions',
        'thumbnail'
    );

    /**
     * Options for the custom post type
     * See http://codex.wordpress.org/Function_Reference/register_post_type#Arguments for more info for how to fill in this information
     * @var array
     */
    static protected $customPostOptions = array(
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true
    );

    /**
     * Protected attributes will be saved as post meta data on save
     * @var
     */
    protected $myCustomPostMeta;

    /**
     * @param mixed $myCustomPostMeta
     */
    public function setMyCustomPostMeta($myCustomPostMeta)
    {
        $this->myCustomPostMeta = $myCustomPostMeta;
    }

    /**
     * @return mixed
     */
    public function getMyCustomPostMeta()
    {
        return $this->myCustomPostMeta;
    }

    /**
     * Post title can be changed trough the $postTitle attribute from parent
     */

    /**
     * @param mixed $postTitle
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;
    }

    /**
     * @return mixed
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }


    /**
     * Post content can be changed trough the $postContent attribute from parent
     */

    /**
     * @param mixed $postContent
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;
    }

    /**
     * @return mixed
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Post date can be changed trough the DateTime object attribute PostDate from parent
     */

    /**
     * @param \DateTime $postDate
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    }

    /**
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Post status can be changed using the postStatus attribute
     * Please see http://codex.wordpress.org/Function_Reference/get_post_status#Return_Values for possible values
     */

    /**
     * @param string $postStatus
     */
    public function setPostStatus($postStatus)
    {
        $this->postStatus = $postStatus;
    }

    /**
     * @return string
     */
    public function getPostStatus()
    {
        return $this->postStatus;
    }



} 