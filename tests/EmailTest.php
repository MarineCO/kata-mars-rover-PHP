<?php

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase {

	public function testCanBeCreatedFromValidEmailAddress() {
		$this->assertInstanceOf(
				Email::class,
				Email::fromString('user@example.com')
			);
	}
}