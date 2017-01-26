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

	public function testForwardToWest() {
		$rover = new Rover(0, 0,'W');
		$rover->forward();
		$this->assertEquals(
			[-1, 0,'W'],
			$rover->getPosition()
			);
	}

	public function testForwardToNorth() {
		$rover = new Rover(0, 0,'N');
		$rover->forward();
		$this->assertEquals(
			[0, 1,'N'],
			$rover->getPosition()
			);
	}

	public function testForwardToEast(){
		$rover = new Rover(0, 0, 'E');
		$rover->forward();
		$this->assertEquals(
            [1, 0, 'E'],
            $rover->getPosition()
			);
	}

	public function testForwardToSouth(){
		$rover = new Rover(0, 0, 'S');
		$rover->forward();
		$this->assertEquals(
				[0, -1, 'S'],
				$rover->getPosition()
			);
	}
	
	public function testBackwardSinceTheNorth() {
		$rover = new Rover(0, 0,'N');
		$rover->backward();
		$this->assertEquals(
			[0, -1,'N'],
			$rover->getPosition()
			);
	}

	public function testBackwardSinceTheEast() {
		$rover = new Rover(0, 0, 'E');
		$rover->backward();
		$this->assertEquals(
			[-1, 0, 'E'],
			$rover->getPosition()
		);
	}

	public function testBackwardSinceTheSouth() {
		$rover = new Rover(0, 0, 'S');
		$rover->backward();
		$this->assertEquals(
			[0, 1, 'S'],
			$rover->getPosition()
		);
	}

	public function testBackwardSinceTheWest() {
		$rover = new Rover(0, 0, 'W');
		$rover->backward();
		$this->assertEquals(
			[1, 0, 'W'],
			$rover->getPosition()
		);
	}

	public function testRightSinceTheWest() {
		$rover = new Rover (0, 0, 'W');
		$rover->right();
		$this->assertEquals(
			[0, 0, 'N'],
			$rover->getPosition()
			);
	}

	public function testRightSinceTheNorth() {
		$rover = new Rover (0, 0, 'N');
		$rover->right();
		$this->assertEquals(
			[0, 0, 'E'],
			$rover->getPosition()
		);
	}

	public function testRightSinceTheEast() {
		$rover = new Rover(0, 0, 'E');
		$rover->right();
		$this->assertEquals(
			[0, 0, 'S'],
			$rover->getPosition()
		);
	}

	public function testRightSinceTheSouth() {
		$rover = new Rover(0, 0, 'S');
		$rover->right();
		$this->assertEquals(
			[0, 0, 'W'],
			$rover->getPosition()
		);
	}

	public function testRoverMovesForwardTwiceAndTurnOnTheRight() {
		$rover = new Rover (0, 0, 'N');
		$rover->forward();
		$rover->forward();
		$rover->right();
		$this->assertEquals( 
			[0, 2, 'E'],
			$rover->getPosition()
			);
	}

	
}
