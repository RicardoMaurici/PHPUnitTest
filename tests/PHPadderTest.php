<?php
use PHPUnit_Framework_TestCase as PHPUnit;
use math\PHPadder as PHPadder;

class PHPadderTest extends PHPUnit
{
	protected $adder;

	public function setUp()
	{
		$this->adder = new PHPadder();
	}

	/**
	* add only one element
	*/

	public function testAddOperation()
	{
		$this->adder->setA(42);
		$this->adder->add();
		$this->assertEquals(42, $this->adder->getSum(), 'dont added correctly');
	}


	/**
	* add only two elements
	*/

	public function testAddOperation1()
	{
		$this->adder->setA(4);
		$this->adder->setB(5);
		$this->adder->add();
		$this->assertEquals(9, $this->adder->getSum(), 'dont added correctly');
	}

	/**
	* add three elements
	*/

	public function testAddOperation2()
	{
		$this->adder->setA(400);
		$this->adder->setB(500);
		$this->adder->setC(925);
		$this->adder->add();
		$this->assertEquals(1825, $this->adder->getSum(), 'dont added correctly');
	}

	public function tearDown()
	{

	}
}
