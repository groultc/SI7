<?php
	use PHPUnit\Framework\TestCase;

	class MathTest extends TestCase {

		public function testDouble(){
			$this->assertEquals(4,\App\Math::double(2));
		}

		public function testTTC(){
			$this->assertEquals(24,\App\Math::TTC(20));
		}

		public function testCompare(){
			$this->assertEquals(true,\App\Math::compare(20, 20));
		}

		public function testCompare2(){
			$this->assertEquals(true,\App\Math::compare2(6, 4));
		}


	}
?>