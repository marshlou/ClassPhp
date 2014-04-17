<?php
/**
 * Created by PhpStorm.
 * User: designstudio_11
 * Date: 17/04/2014
 * Time: 14:55
 */

namespace tests\controllers;
include('../../apps/controllers/MainController.php');

class MainControllerTest extends \PHPUnit_Framework_TestCase {
    function testPageSet(){
        $data=new \apps\controllers\MainController();
        $this->assertNotEmpty($data->page,$message="The page property has not been set");
    }
    function testPageEquals(){
        $data = new \apps\controllers\MainController();
        $this->assertEquals($data->page,'about', $message="This page is not set to about");
    }

}
 