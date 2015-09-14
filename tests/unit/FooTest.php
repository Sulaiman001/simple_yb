<?php


class FooTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
			//$mock = \Mockery::mock('\App\Tester');

		 //$mock->shouldReceive('run')->once()->andReturn('test');
			$mock = new App\Tester();
		 var_dump($mock->run());
    }
}