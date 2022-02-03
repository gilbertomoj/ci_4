<?php

namespace CodeIgniter;

use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
/**
 * @internal
 */
final class ExampleSessionTest extends CIUnitTestCase
{
    use ControllerTestTrait, DatabaseTestTrait;
    public function testSessionSimple()
    {
        $session = Services::session();

        $session->set('logged_in', 123);
        $this->assertSame(123, $session->get('logged_in'));
    }

    public function testShowCategories()
    {
        $results = $this->controller(\App\Controllers\Home::class)
        ->execute('something');

        $this->assertTrue($results->isOK());
    }
    public function testCreate()
    {
        $results = $this->controller(\App\Controllers\Home::class)
        ->execute('something');

        $this->assertTrue($results->isOK());
    }

    public function testHome()
    {
        $results = $this->controller(\App\Controllers\Home::class)
        ->execute('count');

        $this->assertTrue($results->isOK());


        $result = $this->withURI('http://localhost:8080/')
        ->controller(\App\Controllers\Home::class)
        ->execute('count');

        $this->assertTrue($result->isOK());

    }

    public function testredirectPage()
    {
        // $result = $this->withURI('http://localhost:8080/')
        // ->controller(\App\Controllers\BaseController::class)
        // ->execute('redirect');

        // $this->assertTrue($result->isOK());
        // $body = [
        //     'name' => 'asdadsazx',
        //     'email' => 'sadassdsa',
        //     'developer' => 'sadadsd',
        //     'releaser_date' => "2020"
        // ];

        // $results = $this->withBody($body)
        //                 ->controller(\App\Controllers\Home::class)
        //                 ->execute('count');

        // print_r($results);

        
        // $path = "http://localhost:8080/home/count";
        // $params = [
        //     'name' => 'asdadsazx',
        //     'email' => 'sadassdsa',
        //     'developer' => 'sadadsd',
        //     'releaser_date' => "2020"
        // ];
        
        // $this->post($path, $params);

        
    }
}
