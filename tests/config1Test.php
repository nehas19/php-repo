<?php

require("ecomm_project/config1.php");
class ConfigTest extends PHPUnit_Framework_TestCase
	{
		public function testHostconfiguration()
		{
			$this->assertEquals('localhost', Config::HOST);
		}
		public function testUserconfiguration()
		{
			$this->assertEquals('root', Config::USER);
		}
		public function testPasswordconfiguration()
		{
			$this->assertEquals('root', Config::PASSWORD);
		}
		public function testHelperconfiguration()
		{
			$this->assertEquals('Helper.php', Config::HELPER);
		}
	}
		
?>
