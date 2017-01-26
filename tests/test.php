<?php 


use PHPUnit\Framework\TestCase;


class Test extends Testcase {

	public function testHasToGiveTheRoverSPosition() {
		$rover = new Rover(0, 0, 'N');
		$this->assertEquals(
			[0, 0, 'N'],
			$rover->getPosition()
			);
	}

	public function testForward() {
		$rover = new Rover(0,0,'W');
		$rover->forward();
		$this->assertEquals(
			[-1, 0,'W'],
			$rover->getPosition()
			);
	}	
	
	public function testBackward() {
		$rover = new Rover(0,0,'E');
		$rover->backward();
		$this->assertEquals(
			[0,-1,'E'],
			$rover->getPosition()
			);

	}
}
