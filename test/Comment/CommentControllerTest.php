<?php

namespace Anax\Comment;

/**
 * Test cases for class CommentController.
 */
class CommentControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test case to construct object and verify that the object
     * has the expected properties due various ways of constructing
     * it.
     */

    protected $di;
    protected $commentController;
     /**
      * Test cases requires DI-container, therefore save in constructor
      */
    public function setUp()
    {
        $this->di = new \Anax\DI\DIFactoryConfig("diTest.php");
        $this->commentController = new CommentController();
    }

    /**
    * Test the comment object is an instance of the Comment class
    */
    public function testCreateObject()
    {
        $this->assertInstanceOf("\Anax\Comment\CommentController", $this->commentController);
    }
}
