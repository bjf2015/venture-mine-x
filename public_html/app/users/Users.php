<?php 
${"\x47\x4c\x4fB\x41\x4c\x53"}["\x6es\x6bh\x73\x77c\x67\x75h\x70t"]="\x72\x65\x73\x75\x6ct";
${"\x47L\x4f\x42\x41L\x53"}["\x6eeb\x6ax\x69b"]="\x65\x6e\x63\x72\x79p\x74\x65\x64";
${"\x47\x4cO\x42\x41\x4cS"}["u\x75r\x74\x68\x76rh\x70o"]="\x64\x65\x63\x72\x79p\x74e\x64";
${"\x47\x4cO\x42A\x4c\x53"}["\x64x\x6c\x63\x6eqo"]="\x6bey";
${"GL\x4f\x42\x41\x4c\x53"}["\x74\x6b\x6d\x6b\x61\x73\x7a\x66\x73\x6b"]="\x65\x6d\x61\x69\x6c";
${"G\x4c\x4f\x42\x41\x4c\x53"}["\x73\x63h\x67\x76\x61\x66\x6c\x63"]="\x6c\x61st\x5f\x6ea\x6de";
${"\x47\x4c\x4f\x42A\x4c\x53"}["i\x78k\x61\x6ee\x71\x77fhmp"]="f\x69\x72\x73\x74\x5fn\x61\x6d\x65";
${"G\x4c\x4f\x42\x41\x4c\x53"}["\x73j\x62hkh\x6f\x75\x6e\x75\x74"]="\x70\x61\x73s\x77\x6f\x72d\x5f\x6bey";
${"G\x4c\x4f\x42AL\x53"}["\x64\x73\x6fcd\x65\x66wq\x6a"]="pas\x73w\x6f\x72\x64";
${"\x47\x4c\x4f\x42A\x4c\x53"}["\x65\x6d\x6a\x61\x79o\x69zb\x71"]="u\x73\x65\x72";
${"GL\x4f\x42\x41L\x53"}["m\x6c\x61\x70hl\x66\x6d"]="\x73e\x61\x72\x63h";
${"\x47\x4cO\x42\x41\x4c\x53"}["e\x6esg\x63\x6cd\x75\x78"]="co\x6e\x66i\x67\x75r\x61\x74\x69\x6f\x6e";
${"G\x4c\x4f\x42A\x4c\x53"}["\x78k\x73o\x70\x77\x79\x79\x62\x64\x78"]="w\x6f\x72\x6b\x65\x72";
//${"GLOBALS"}["nskhswcguhpt"]="result";${"GLOBALS"}["nebjxib"]="encrypted";${"GLOBALS"}["uurthvrhpo"]="decrypted";${"GLOBALS"}["dxlcnqo"]="key";${"GLOBALS"}["tkmkaszfsk"]="email";${"GLOBALS"}["schgvaflc"]="last_name";${"GLOBALS"}["ixkaneqwfhmp"]="first_name";${"GLOBALS"}["sjbhkhounut"]="password_key";${"GLOBALS"}["dsocdefwqj"]="password";${"GLOBALS"}["emjayoizbq"]="user";${"GLOBALS"}["mlaphlfm"]="search";${"GLOBALS"}["ensgcldux"]="configuration";${"GLOBALS"}["xksopwyybdx"]="worker";
class Users{private$worker;private$configuration;function __construct($worker,$configuration){
    $this->worker=${${"\x47L\x4f\x42A\x4cS"}["\x78\x6bsop\x77yybd\x78"]};
    $this->configuration=${${"G\x4c\x4fBAL\x53"}["\x65\x6e\x73\x67cl\x64\x75\x78"]};
    require_once("\x55\x73\x65\x72.php");
    }

//class Users{private$worker;private$configuration;function __construct($worker,$configuration){    $this->worker=${${"GLOBALS"}["xksopwyybdx"]};    $this->configuration=${${"GLOBALS"}["ensgcldux"]};    require_once("User.php");    }
    
    public function user_exists($email){
        $rowbzslcl="\x65\x6d\x61\x69\x6c";
        return$this->worker->count_rows($this->worker->query_bind("\x53\x45LE\x43\x54 \x65\x6d\x61i\x6c F\x52\x4fM \x75sers\x20W\x48E\x52E e\x6d\x61\x69\x6c\x20\x3d :em\x61il L\x49\x4dIT \x30,\x31",array("\x65ma\x69\x6c"=>${$rowbzslcl})));
        }
//public function user_exists($email){        $rowbzslcl="email";        return$this->worker->count_rows($this->worker->query_bind("SELECT email FROM users WHERE email = :email LIMIT 0,1",array("email"=>${$rowbzslcl})));        }

    public function get_user($search){
        if(!is_numeric(${${"\x47LO\x42\x41\x4c\x53"}["\x6d\x6ca\x70\x68l\x66m"]})){
            $bdentkrh="user";$rlxyqet="\x73\x65\x61r\x63\x68";${$bdentkrh}=$this->worker->query_bind("SEL\x45CT\x20* \x46R\x4fM\x20u\x73e\x72\x73\x20W\x48\x45\x52E ema\x69l\x20\x3d\x20:ema\x69l\x20LIMIT \x30,1",array("emai\x6c"=>${$rlxyqet}));
        if($this->check_fails()){return false;}if($this->worker->count_rows(${${"\x47\x4c\x4f\x42AL\x53"}["\x65\x6djay\x6fiz\x62q"]})==1){
            ${"\x47\x4cOB\x41\x4c\x53"}["\x71piq\x73\x70cbji"]="la\x73t\x5f\x6e\x61\x6de";
            ${"\x47L\x4f\x42ALS"}["\x77\x6c\x77uyw\x6c\x6b\x63h"]="\x75\x73\x65r";$wuxfobei="fi\x72\x73\x74\x5fn\x61\x6d\x65";
            ${${"\x47\x4c\x4fBA\x4cS"}["\x64\x73\x6f\x63de\x66w\x71j"]}=$this->worker->get_value(${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x65m\x6aay\x6f\x69\x7a\x62\x71"]},"p\x61ss\x77or\x64");
            $vcuuos="\x75s\x65\x72";${${"G\x4c\x4f\x42\x41L\x53"}["\x73\x6a\x62\x68\x6b\x68o\x75\x6e\x75\x74"]}=$this->worker->get_value(${$vcuuos},"\x70\x61\x73\x73\x77or\x64\x5f\x6be\x79");${${"GL\x4f\x42\x41L\x53"}["i\x78k\x61\x6e\x65q\x77\x66\x68\x6dp"]}=$this->worker->get_value(${${"\x47LO\x42\x41\x4c\x53"}["em\x6a\x61\x79\x6f\x69\x7a\x62\x71"]},"fi\x72\x73t_\x6e\x61\x6d\x65");
            ${${"\x47\x4c\x4f\x42A\x4c\x53"}["qpiqspc\x62\x6a\x69"]}=$this->worker->get_value(${${"\x47\x4cO\x42\x41\x4cS"}["w\x6cw\x75\x79\x77\x6ckch"]},"la\x73\x74\x5f\x6eame");
            return new User(${${"G\x4c\x4f\x42ALS"}["\x6dl\x61\x70hlfm"]},
            ${${"G\x4c\x4f\x42A\x4cS"}["\x64\x73o\x63\x64\x65\x66\x77\x71\x6a"]},
            ${${"G\x4c\x4f\x42\x41\x4c\x53"}["sj\x62\x68\x6bh\x6f\x75\x6eu\x74"]},
            ${$wuxfobei},${${"G\x4c\x4fBALS"}["\x73c\x68\x67\x76af\x6c\x63"]},$this);
            }else{return null;}
            }else{return null;}
            }
    //public function get_user($search){        if(!is_numeric(${${"GLOBALS"}["mlaphlfm"]})){            $bdentkrh="user";$rlxyqet="search";${$bdentkrh}=$this->worker->query_bind("SELECT * FROM users WHERE email = :email LIMIT 0,1",array("email"=>${$rlxyqet}));        if($this->check_fails()){return false;}if($this->worker->count_rows(${${"GLOBALS"}["emjayoizbq"]})==1){            ${"GLOBALS"}["qpiqspcbji"]="last_name";            ${"GLOBALS"}["wlwuywlkch"]="user";$wuxfobei="first_name";            ${${"GLOBALS"}["dsocdefwqj"]}=$this->worker->get_value(${${"GLOBALS"}["emjayoizbq"]},"password");            $vcuuos="user";${${"GLOBALS"}["sjbhkhounut"]}=$this->worker->get_value(${$vcuuos},"password_key");${${"GLOBALS"}["ixkaneqwfhmp"]}=$this->worker->get_value(${${"GLOBALS"}["emjayoizbq"]},"first_name");            ${${"GLOBALS"}["qpiqspcbji"]}=$this->worker->get_value(${${"GLOBALS"}["wlwuywlkch"]},"last_name");            return new User(${${"GLOBALS"}["mlaphlfm"]},            ${${"GLOBALS"}["dsocdefwqj"]},            ${${"GLOBALS"}["sjbhkhounut"]},            ${$wuxfobei},${${"GLOBALS"}["schgvaflc"]},$this);            }else{return null;}            }else{return null;}            }

    public function login($email,$password){
        $zmpxicyv="\x75se\x72";
        $hzfeywms="\x75\x73\x65\x72";
        ${"\x47\x4cO\x42\x41L\x53"}["\x65i\x70ht\x74\x6alo\x78"]="\x75s\x65\x72";
        ${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x65\x69\x70\x68t\x74\x6alox"]}=$this->get_user(${${"GL\x4f\x42\x41\x4cS"}["t\x6b\x6d\x6ba\x73\x7af\x73k"]});
        if(${$zmpxicyv}===false){
            return"P\x6c\x65as\x65 \x77a\x69\x74 1\x35 m\x69\x6e\x75\x74e\x73 \x62\x65\x66or\x65\x20l\x6f\x67gi\x6eg\x20\x69\x6e\x20\x61\x67ai\x6e";}if(${$hzfeywms}!=null){
                ${"\x47\x4cO\x42\x41\x4c\x53"}["\x7a\x74c\x71odck"]="\x70a\x73\x73\x77o\x72\x64";if($user->verify_password(${${"G\x4cO\x42AL\x53"}["z\x74\x63\x71\x6f\x64\x63\x6b"]})){$vgxaicpdffy="e\x6d\x61\x69\x6c";$this->set_cookies(${$vgxaicpdffy},$this->cookie_encrypt($user->get_password()));return true;}}return"In\x63or\x72\x65ct email\x20or \x70as\x73wo\x72d";}public function logout(){$this->set_cookies("","");}private function check_fails(){${"\x47L\x4f\x42ALS"}["\x78iv\x78\x66\x73\x6e"]="r\x65sult";${"\x47\x4cOBA\x4cS"}["\x61\x6c\x66vsi\x76\x79"]="\x72\x65\x73\x75\x6c\x74";${${"G\x4c\x4f\x42AL\x53"}["\x78\x69\x76\x78\x66sn"]}=$this->worker->query_bind("\x53E\x4cE\x43\x54\x20* F\x52\x4f\x4d\x20\x66ail\x65\x64_logi\x6e\x73\x20\x57\x48ER\x45\x20\x74r\x79\x5fd\x61te\x20\x3e NOW()\x20-\x20\x49N\x54\x45RVA\x4c\x201\x35 M\x49\x4eU\x54E \x41\x4eD ip \x3d :ip",array("ip"=>$_SERVER["RE\x4dO\x54E\x5fA\x44\x44\x52"]));return$this->worker->count_rows(${${"\x47\x4cOB\x41\x4cS"}["a\x6c\x66\x76si\x76\x79"]})>4;
    }
//    // public function login($email,$password){
//         $zmpxicyv="\x75se\x72";
//         $hzfeywms="\x75\x73\x65\x72";
//         ${"\x47\x4cO\x42\x41L\x53"}["\x65i\x70ht\x74\x6alo\x78"]="\x75s\x65\x72";
//         ${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x65\x69\x70\x68t\x74\x6alox"]}=$this->get_user(${${"GL\x4f\x42\x41\x4cS"}["t\x6b\x6d\x6ba\x73\x7af\x73k"]});
//         if(${$zmpxicyv}===false){
//             return"P\x6c\x65as\x65 \x77a\x69\x74 1\x35 m\x69\x6e\x75\x74e\x73 \x62\x65\x66or\x65\x20l\x6f\x67gi\x6eg\x20\x69\x6e\x20\x61\x67ai\x6e";}if(${$hzfeywms}!=null){
//                 ${"\x47\x4cO\x42\x41\x4c\x53"}["\x7a\x74c\x71odck"]="\x70a\x73\x73\x77o\x72\x64";if($user->verify_password(${${"G\x4cO\x42AL\x53"}["z\x74\x63\x71\x6f\x64\x63\x6b"]})){$vgxaicpdffy="e\x6d\x61\x69\x6c";$this->set_cookies(${$vgxaicpdffy},$this->cookie_encrypt($user->get_password()));return true;}}return"In\x63or\x72\x65ct email\x20or \x70as\x73wo\x72d";}public function logout(){$this->set_cookies("","");}private function check_fails(){${"\x47L\x4f\x42ALS"}["\x78iv\x78\x66\x73\x6e"]="r\x65sult";${"\x47\x4cOBA\x4cS"}["\x61\x6c\x66vsi\x76\x79"]="\x72\x65\x73\x75\x6c\x74";${${"G\x4c\x4f\x42AL\x53"}["\x78\x69\x76\x78\x66sn"]}=$this->worker->query_bind("\x53E\x4cE\x43\x54\x20* F\x52\x4f\x4d\x20\x66ail\x65\x64_logi\x6e\x73\x20\x57\x48ER\x45\x20\x74r\x79\x5fd\x61te\x20\x3e NOW()\x20-\x20\x49N\x54\x45RVA\x4c\x201\x35 M\x49\x4eU\x54E \x41\x4eD ip \x3d :ip",array("ip"=>$_SERVER["RE\x4dO\x54E\x5fA\x44\x44\x52"]));return$this->worker->count_rows(${${"\x47\x4cOB\x41\x4cS"}["a\x6c\x66\x76si\x76\x79"]})>4;
//     }
    public function add_fail(){$this->worker->query_bind("IN\x53ER\x54 \x49NTO \x66\x61i\x6c\x65\x64_\x6cogins\x20(i\x70) V\x41LUES (:\x69p)",array("\x69\x70"=>$_SERVER["\x52\x45\x4dOT\x45_A\x44\x44R"]));
    }

//public function add_fail(){$this->worker->query_bind("INSERT INTO failed_logins (ip) VALUES (:ip)",array("ip"=>$_SERVER["REMOTE_ADDR"]));    }

    public function is_loggedin(){return$this->check_cookies();
    }
    
    public function add_user($email,$password,$first_name,$last_name){${"G\x4c\x4f\x42\x41\x4c\x53"}["\x62\x62d\x78s\x70\x63\x74u\x72"]="\x6bey";${"\x47L\x4f\x42A\x4c\x53"}["\x73\x67\x73\x67\x6b\x68d\x61\x6fo"]="las\x74\x5f\x6e\x61m\x65";${"G\x4c\x4fBAL\x53"}["\x6d\x6d\x7a\x61\x69\x73\x78\x73vu\x72"]="\x65\x6d\x61\x69\x6c";${${"\x47LO\x42A\x4cS"}["\x64\x78\x6cc\x6e\x71o"]}=substr(md5(rand()),0,5);$this->worker->query_bind("INSE\x52\x54 \x49N\x54O\x20\x75\x73\x65rs\x20V\x41\x4c\x55\x45S(:\x65\x6da\x69\x6c, :p\x61s\x73\x77ord, :\x6be\x79,\x20:f\x69rst, :l\x61s\x74)",array("email"=>${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x6d\x6dza\x69s\x78\x73\x76\x75\x72"]},"p\x61\x73s\x77\x6f\x72d"=>$this->hash_password(${${"\x47\x4c\x4fB\x41\x4c\x53"}["d\x73\x6f\x63\x64\x65\x66wqj"]},${${"\x47\x4cO\x42\x41\x4cS"}["\x64\x78\x6c\x63n\x71o"]}),"ke\x79"=>${${"G\x4cO\x42A\x4cS"}["b\x62\x64\x78sp\x63\x74ur"]},"\x66ir\x73\x74"=>${${"\x47L\x4f\x42\x41\x4c\x53"}["\x69\x78k\x61\x6eeq\x77fhm\x70"]},"\x6c\x61\x73\x74"=>${${"\x47\x4cO\x42A\x4c\x53"}["\x73g\x73\x67\x6bh\x64a\x6f\x6f"]},));
    }
//public function add_user($email,$password,$first_name,$last_name){${"G\x4c\x4f\x42\x41\x4c\x53"}["\x62\x62d\x78s\x70\x63\x74u\x72"]="\x6bey";${"\x47L\x4f\x42A\x4c\x53"}["\x73\x67\x73\x67\x6b\x68d\x61\x6fo"]="las\x74\x5f\x6e\x61m\x65";${"G\x4c\x4fBAL\x53"}["\x6d\x6d\x7a\x61\x69\x73\x78\x73vu\x72"]="\x65\x6d\x61\x69\x6c";${${"\x47LO\x42A\x4cS"}["\x64\x78\x6cc\x6e\x71o"]}=substr(md5(rand()),0,5);$this->worker->query_bind("INSE\x52\x54 \x49N\x54O\x20\x75\x73\x65rs\x20V\x41\x4c\x55\x45S(:\x65\x6da\x69\x6c, :p\x61s\x73\x77ord, :\x6be\x79,\x20:f\x69rst, :l\x61s\x74)",array("email"=>${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x6d\x6dza\x69s\x78\x73\x76\x75\x72"]},"p\x61\x73s\x77\x6f\x72d"=>$this->hash_password(${${"\x47\x4c\x4fB\x41\x4c\x53"}["d\x73\x6f\x63\x64\x65\x66wqj"]},${${"\x47\x4cO\x42\x41\x4cS"}["\x64\x78\x6c\x63n\x71o"]}),"ke\x79"=>${${"G\x4cO\x42A\x4cS"}["b\x62\x64\x78sp\x63\x74ur"]},"\x66ir\x73\x74"=>${${"\x47L\x4f\x42\x41\x4c\x53"}["\x69\x78k\x61\x6eeq\x77fhm\x70"]},"\x6c\x61\x73\x74"=>${${"\x47\x4cO\x42A\x4c\x53"}["\x73g\x73\x67\x6bh\x64a\x6f\x6f"]},));
 //   }
    
    public function get_loggedin_user(){if($this->is_loggedin()){return$this->get_user($_COOKIE["e\x6dail"]);}return null;}private function cookie_decrypt($password){${"\x47\x4cOBA\x4cS"}["\x63l\x67k\x6e\x75\x61"]="\x70\x61\x73\x73w\x6frd";$actdbrgl="\x64e\x63\x72yp\x74\x65d";if(openssl_private_decrypt(base64_decode(${${"\x47\x4c\x4fB\x41L\x53"}["cl\x67\x6bn\x75a"]}),${$actdbrgl},$this->configuration->private_key)){return${${"\x47\x4cO\x42\x41L\x53"}["\x75\x75r\x74hvr\x68\x70o"]};}return null;
    }
//public function get_loggedin_user(){if($this->is_loggedin()){return$this->get_user($_COOKIE["email"]);}return null;}private function cookie_decrypt($password){${"GLOBALS"}["clgknua"]="password";$actdbrgl="decrypted";if(openssl_private_decrypt(base64_decode(${${"GLOBALS"}["clgknua"]}),${$actdbrgl},$this->configuration->private_key)){return${${"GLOBALS"}["uurthvrhpo"]};}return null;    }

    
    private function cookie_encrypt($password){if(openssl_public_encrypt(${${"\x47\x4cO\x42A\x4c\x53"}["d\x73\x6f\x63\x64efwq\x6a"]},${${"\x47\x4c\x4f\x42\x41LS"}["\x6e\x65b\x6axib"]},$this->configuration->public_key)){${"\x47\x4c\x4f\x42A\x4c\x53"}["l\x77\x63a\x66\x67\x76\x7ahk"]="\x70a\x73swo\x72\x64";${${"\x47LO\x42\x41\x4cS"}["l\x77\x63\x61\x66gv\x7ah\x6b"]}=base64_encode(${${"\x47\x4c\x4f\x42\x41\x4cS"}["n\x65\x62\x6a\x78i\x62"]});
    }else{
        die("Un\x61\x62\x6ce t\x6f\x20e\x6e\x63ry\x70t\x20\x64\x61\x74\x61,\x20p\x6c\x65\x61se \x63ont\x61\x63t a\x20sy\x73\x74\x65\x6d\x20ad\x6d\x69nistra\x74o\x72.");}$eitvxymazhg="p\x61\x73\x73\x77\x6f\x72\x64";
        return${$eitvxymazhg};
    }

//private function cookie_encrypt($password){if(openssl_public_encrypt(${${"GLOBALS"}["dsocdefwqj"]},${${"GLOBALS"}["nebjxib"]},$this->configuration->public_key)){${"GLOBALS"}["lwcafgvzhk"]="password";${${"GLOBALS"}["lwcafgvzhk"]}=base64_encode(${${"GLOBALS"}["nebjxib"]});    }else{        die("Unable to encrypt data, please contact a system administrator.");}$eitvxymazhg="password";        return${$eitvxymazhg};    }
    
    private function set_cookies($email,$password){$mlfexcmhcb="\x70a\x73\x73\x77o\x72\x64";${"G\x4cO\x42\x41\x4cS"}["\x7a\x64\x65\x73\x76\x70"]="ema\x69\x6c";setcookie("e\x6d\x61\x69l",${${"G\x4cO\x42\x41LS"}["\x7a\x64\x65\x73\x76\x70"]},time()+3600*60*60,"/");setcookie("\x70\x61ssword",${$mlfexcmhcb},time()+3600*60*5,"/");
    }
//private function set_cookies($email,$password){$mlfexcmhcb="password";${"GLOBALS"}["zdesvp"]="email";setcookie("email",${${"GLOBALS"}["zdesvp"]},time()+3600*60*60,"/");setcookie("password",${$mlfexcmhcb},time()+3600*60*5,"/");    }    

    private function check_cookies(){if(isset($_COOKIE["e\x6d\x61\x69l"])){${"\x47\x4cO\x42\x41\x4c\x53"}["\x6fhljqrp\x73\x74\x65"]="em\x61i\x6c";${${"G\x4c\x4f\x42A\x4c\x53"}["\x74\x6bm\x6bas\x7afsk"]}=$_COOKIE["e\x6dai\x6c"];${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x70\x67m\x75t\x73\x74g"]="\x70\x61sswo\x72\x64";${"\x47\x4c\x4fB\x41\x4cS"}["z\x72\x6bb\x78o\x75q\x61is"]="\x72e\x73\x75\x6c\x74";${${"\x47L\x4f\x42\x41\x4c\x53"}["\x70\x67\x6d\x75\x74\x73\x74\x67"]}=$this->cookie_decrypt($_COOKIE["pa\x73\x73w\x6f\x72d"]);${${"\x47\x4c\x4f\x42\x41L\x53"}["z\x72\x6b\x62\x78\x6f\x75q\x61\x69\x73"]}=$this->worker->query_bind("S\x45L\x45\x43T \x65mail \x46\x52OM user\x73 W\x48ER\x45\x20\x65\x6d\x61il =\x20:\x65m\x61\x69l\x20A\x4e\x44 `p\x61s\x73\x77or\x64`\x20\x3d\x20:p\x61s\x73\x77o\x72\x64",array("e\x6d\x61\x69\x6c"=>${${"\x47\x4c\x4fBA\x4c\x53"}["\x6fhljq\x72p\x73t\x65"]},"pas\x73\x77o\x72d"=>${${"\x47LOBALS"}["d\x73\x6fc\x64\x65\x66w\x71\x6a"]}));return$this->worker->count_rows(${${"\x47\x4cO\x42\x41\x4c\x53"}["\x6e\x73k\x68\x73w\x63\x67u\x68\x70\x74"]})==1;}return false;
    }


    
    private function hash_password($password,$key){${"\x47\x4cO\x42\x41\x4c\x53"}["e\x71\x6f\x6e\x62\x67\x75\x72"]="pa\x73\x73\x77\x6f\x72\x64";return md5(md5(${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x64\x78lcn\x71\x6f"]}).md5(${${"\x47\x4cO\x42A\x4cS"}["e\x71\x6fn\x62\x67\x75\x72"]}));
    }
}
//private function check_cookies(){if(isset($_COOKIE["email"])){${"GLOBALS"}["ohljqrpste"]="email";${${"GLOBALS"}["tkmkaszfsk"]}=$_COOKIE["email"];${"GLOBALS"}["pgmutstg"]="password";${"GLOBALS"}["zrkbxouqais"]="result";${${"GLOBALS"}["pgmutstg"]}=$this->cookie_decrypt($_COOKIE["password"]);${${"GLOBALS"}["zrkbxouqais"]}=$this->worker->query_bind("SELECT email FROM users WHERE email = :email AND `password` = :password",array("email"=>${${"GLOBALS"}["ohljqrpste"]},"password"=>${${"GLOBALS"}["dsocdefwqj"]}));return$this->worker->count_rows(${${"GLOBALS"}["nskhswcguhpt"]})==1;}return false;    }        private function hash_password($password,$key){${"GLOBALS"}["eqonbgur"]="password";return md5(md5(${${"GLOBALS"}["dxlcnqo"]}).md5(${${"GLOBALS"}["eqonbgur"]}));}}
?>