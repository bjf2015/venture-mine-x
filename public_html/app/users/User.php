<?php 
${"\x47\x4c\x4f\x42A\x4cS"}["\x73io\x6f\x76z\x6cke\x6c\x68"]="l\x61s\x74\x5f\x6ea\x6d\x65";${"G\x4cO\x42A\x4cS"}["\x74\x69s\x65\x6f\x6f\x64\x72\x73\x70\x78\x72"]="\x70\x61\x73\x73\x77\x6f\x72\x64";

class User{
    private$email;
    private$password;
    private$password_key;
    private$first_name;
    private$last_name;
    private$users;
    
    function __construct($email,$password,$password_key,$first_name,$last_name,$users){
        $nmtspnqm="f\x69\x72\x73t\x5f\x6e\x61\x6d\x65";
        $pkpkrwpwl="\x65m\x61\x69l";${"\x47LOB\x41\x4c\x53"
        }
        ["c\x77ei\x77\x6e"]="\x75\x73\x65\x72\x73";${"G\x4c\x4f\x42\x41\x4c\x53"}["\x66b\x70\x6e\x78l\x6a\x74\x78\x73z"]="p\x61\x73swo\x72\x64\x5f\x6be\x79";
        $this->email=${$pkpkrwpwl};
        $this->password=${${"GL\x4fB\x41\x4c\x53"}["ti\x73\x65oo\x64r\x73\x70x\x72"]};
        $this->password_key=${${"GLOB\x41\x4c\x53"}["\x66\x62p\x6ex\x6cj\x74\x78\x73\x7a"]};
        $this->first_name=${$nmtspnqm};
        $this->last_name=${${"\x47L\x4f\x42AL\x53"}["s\x69\x6f\x6f\x76\x7al\x6be\x6c\x68"]};
        $this->users=${${"\x47L\x4f\x42\x41\x4c\x53"}["\x63\x77\x65\x69w\x6e"]};
        }
        
    public function get_email(){
        return$this->email;}
    public function verify_password($password){$cdxddj="\x70\x61\x73\x73\x77\x6f\x72\x64";
    if($this->password==$this->hash_password(${$cdxddj})){
        return true;
        }
        else{$this->users->add_fail();
            return false;}}
    private function hash_password($password){
        return md5(md5($this->password_key).md5(${${"G\x4cO\x42\x41\x4c\x53"}["ti\x73\x65\x6fod\x72s\x70\x78\x72"]}));
        }
    public function get_password(){return$this->password;
    }
    public function get_first_name(){
        return$this->first_name;
        }
    public function get_last_name(){
        return$this->last_name;}
        }
?>