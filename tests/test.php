<?php 


use PHPUnit\Framework\TestCase;


class Test extends Testcase {

	public function testHasToGiveTheRoverSPositionToX0() {
		$rover = new Rover(0);
		$this->assertEquals(
			0,
			$rover->getPosition()
		);
	}

}
