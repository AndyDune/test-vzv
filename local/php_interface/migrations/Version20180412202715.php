<?php

namespace Sprint\Migration;
use \Sprint\Migration\Env as Env;


class Version20180412202715 extends Version {


    protected $description = "";
    
    public $ArrValue = array(
       array(70,1),
       array(71,2),
       array(73,3),
       array(74,4),
       array(75,5),
       array(76,6),
       array(77,7),
       array(78,8),
       array(79,9),
       array(71,10),
       array(72,11),
       array(73,12),
       array(74,1)
    );
    
    public function up(){
        $helper = new HelperManager();
        $bitrixDb = Env::getDb();
            $bitrixDb->Query('CREATE TABLE course_evro(ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, VAL FLOAT, MOUNTH INTEGER)');
		foreach($this->ArrValue as $k => $v){
		    $bitrixDb->Query('INSERT INTO course_evro (VAL, MOUNTH) VALUES('.$v[0].','.$v[1].')');
		}
	}
    
    public function down(){
        $helper = new HelperManager();
        $bitrixDb = Env::getDb();
        $bitrixDb->Query('DROP TABLE course_evro');
    }

}
