<?php 

class Connector{
    private$host;
    private$name;
    private$username;
    private$password;
    private$db;
    private$debugLevel;
    
    public function __construct($configuration){
        $this->host=$configuration->dbhost;
        $this->name=$configuration->dbname;
        $this->username=$configuration->dbuser;
        $this->password=$configuration->dbpassword;
        $this->debugLevel=$configuration->debugLevel;
        $this->db=$this->connect();}
        
    private function connect(){
        $elskrouq="\x64\x62";${"G\x4cOBA\x4cS"}["wlrx\x78\x74\x6e\x64"]="d\x73n";
        ${${"G\x4cO\x42AL\x53"}["\x77\x6cr\x78\x78\x74\x6e\x64"]}="my\x73q\x6c:\x64bname=".$this->name."\x3bh\x6fst\x3d".$this->host."\x3b\x70o\x72\x74=33\x30\x36";

        //$elskrouq="db";${"GLOBALS"}["wlrxxtnd"]="dsn";        ${${"GLOBALS"}["wlrxxtnd"]}="mysql:dbname=".$this->name.";host=".$this->host.";port=3306";
        
        try{${"GL\x4f\x42\x41\x4c\x53"}["\x6a\x6b\x72\x70\x79\x64\x73\x6b\x78ip"]="\x64b";
        ${"G\x4c\x4f\x42AL\x53"}["j\x64\x70\x70\x71tq\x6e\x74"]="\x64\x73n";
        ${${"\x47\x4c\x4fBA\x4c\x53"}["\x6a\x6b\x72p\x79d\x73\x6b\x78\x69\x70"]}=new PDO(${${"GL\x4f\x42\x41\x4c\x53"}["j\x64\x70\x70q\x74\x71\x6e\x74"]},$this->username,$this->password);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch(PDOException$e){if($this->debugLevel==2){$kjlyyp="\x65";
        die("\x43oul\x64 \x6e\x6f\x74\x20\x63\x6fn\x6ee\x63t\x20\x74o \x74\x68e\x20d\x61t\x61\x62\x61\x73\x65:\x3cb\x72/>".${$kjlyyp});
        }else if($this->debugLevel==1){die("C\x6ful\x64 \x6e\x6f\x74\x20\x63\x6fn\x6eec\x74 \x74\x6f\x20\x74he d\x61\x74\x61b\x61s\x65\x3cbr/>");
        }else{die();}}return${$elskrouq};}public function get_connection(){return$this->db;}}

        //try{${"GLOBALS"}["jkrpydskxip"]="db";        ${"GLOBALS"}["jdppqtqnt"]="dsn";        ${${"GLOBALS"}["jkrpydskxip"]}=new PDO(${${"GLOBALS"}["jdppqtqnt"]},$this->username,$this->password);        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);        } catch(PDOException$e){if($this->debugLevel==2){$kjlyyp="e";        die("Could not connect to the database:<br/>".${$kjlyyp});        }else if($this->debugLevel==1){die("Could not connect to the database<br/>");        }else{die();}}return${$elskrouq};}public function get_connection(){return$this->db;}}
?>