<?php

namespace Anax\User\HTMLForm;

use Anax\User\User;

/**
 * Test cases for class CommentController.
 */
class UpdateFormtTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test case to construct object and verify that the object
     * has the expected properties due various ways of constructing
     * it.
     */

    protected $di;
    protected $update;
    protected $user;
     /**
      * Setting up di and a user
      */
    public function setUp()
    {
        $this->di = new \Anax\DI\DIFactoryConfig("diTest.php");
        $this->user = new User();
        $this->user->setDb($this->di->get("db"));
        $this->user->find("acronym", "doe");
        $this->update = new UpdateForm($this->di, $this->user->id);
    }

    /**
    * Testing the callback function, return shuold be true
    */
    public function testCallback()
    {
        $this->assertEquals(true, $this->update->callbackSubmit());
    }
}
