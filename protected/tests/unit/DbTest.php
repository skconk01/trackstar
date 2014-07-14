<?php


class DbTest extends CTestCase
{  
     public function testConnection()
     {
       //$this->assertTrue(false);
       $this->assertNotNull(Yii::app()->db->connectionString); 
     }
}
