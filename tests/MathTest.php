<?php
	use PHPUnit\Framework\TestCase;

	class MathTest extends TestCase {

		public function testDouble(){
			$this->assertEquals(5,\App\Math::double(2));
		}

		public function testTTC(){
			$this->assertEquals(22,\App\Math::TTC(20));
		}

		public function testCompare(){
			$this->assertEquals(false,\App\Math::compare(20, 20));
		}

		public function testCompare2(){
			$this->assertEquals(false,\App\Math::compare2(6, 4));
		}
	}
?>