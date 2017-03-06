<?php 
${"G\x4c\x4fB\x41LS"}["i\x6b\x73\x69i\x74p\x71q"]="\x62\x69\x64";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x65g\x63\x77c\x66ef\x68n\x73"]="c\x6f\x75n\x74";
${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x75\x67\x64\x7a\x64\x67\x76v\x65gy"]="\x6d\x61\x78_sh\x61\x72\x65\x73";${"G\x4c\x4fBAL\x53"}["\x66\x67\x68\x75\x62seo\x78x"]="\x64\x65s\x63r\x69\x70ti\x6fn";
${"\x47\x4c\x4fBA\x4c\x53"}["\x79\x6dhil\x74\x6fv\x6fw"]="i\x6d\x61g\x65";
${"\x47\x4c\x4fB\x41\x4cS"}["\x76i\x76\x6aff\x7a\x6f\x6d"]="\x62\x69\x64\x73";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6c\x66\x78s\x68\x75q\x6b"]="\x6d\x61\x78\x69\x6d\x75\x6d";
${"G\x4cO\x42\x41\x4c\x53"}["\x77m\x67i\x68\x6cri\x75kd"]="\x6d\x69ni\x6d\x75\x6d";

class Venture{
    private$bids;
    private$id;
    private$name;
    private$image;
    private$description;
    private$minimum;
    private$maximum;
    private$max_shares;
    private$end_date;
    
function __construct($id,$name,$minimum,$maximum,$image,$max_shares,$description,$end_date,$bids=null){
    $vbimdxte="n\x61\x6d\x65";
    $wqpzaeoiykvn="\x69\x64";
    $this->id=${$wqpzaeoiykvn};
    $this->name=${$vbimdxte};
    $this->minimum=${${"G\x4cO\x42\x41LS"}["\x77\x6d\x67ihl\x72\x69\x75\x6bd"]};
    $this->maximum=${${"G\x4cOB\x41L\x53"}["\x6cf\x78\x73\x68\x75q\x6b"]};
    $xrmolwn="\x65\x6ed_da\x74\x65";
    $this->bids=${${"GLOB\x41\x4cS"}["vi\x76\x6affz\x6f\x6d"]};
    $this->image=${${"GL\x4fB\x41L\x53"}["\x79m\x68\x69\x6ct\x6f\x76o\x77"]};
    $this->description=${${"\x47L\x4f\x42\x41\x4cS"}["\x66\x67h\x75\x62s\x65oxx"]};
    $this->max_shares=${${"\x47\x4c\x4fBA\x4c\x53"}["u\x67d\x7a\x64gvv\x65\x67\x79"]};
    $this->end_date=${$xrmolwn};
    }
public function get_bids(){
    return$this->bids;
    }
public function get_id(){
    return$this->id;
    }
public function get_name(){
    return$this->name;
    }
public function get_image(){
    return$this->image;
    }
public function get_description(){
    return$this->description;
    }
public function get_minimum(){
    return$this->minimum;
    }
public function get_maximum(){
    return$this->maximum;
    }
public function set_bids($bids){
    $this->bids=${${"\x47\x4cO\x42\x41\x4cS"}["\x76\x69v\x6a\x66\x66\x7a\x6f\x6d"]};
    }
public function still_valid(){
    return strtotime($this->get_end_date())>time();
    }
public function bid_amount(){
    ${${"\x47\x4cOB\x41\x4c\x53"}["\x65\x67cwcf\x65\x66hns"]}=0;
    foreach($this->bids as${${"\x47\x4c\x4f\x42\x41L\x53"}["\x69\x6b\x73\x69\x69\x74\x70\x71q"]}){
        ${"\x47\x4cO\x42A\x4c\x53"}["nfx\x6a\x65\x6el\x66\x67\x72\x62"]="\x63\x6fu\x6e\x74";${${"\x47L\x4fBA\x4c\x53"}["\x6e\x66\x78\x6a\x65n\x6c\x66\x67\x72b"]}+=$bid->get_amount();}
        return${${"\x47\x4cOB\x41\x4c\x53"}["\x65g\x63\x77\x63\x66\x65\x66\x68ns"]};
    }
public function get_max_shares(){
    return$this->max_shares;
    }
public function get_end_date(){
    return$this->end_date;
    }
}
//<?php ${"GLOBALS"}["iksiitpqq"]="bid";${"GLOBALS"}["egcwcfefhns"]="count";${"GLOBALS"}["ugdzdgvvegy"]="max_shares";${"GLOBALS"}["fghubseoxx"]="description";${"GLOBALS"}["ymhiltovow"]="image";${"GLOBALS"}["vivjffzom"]="bids";${"GLOBALS"}["lfxshuqk"]="maximum";${"GLOBALS"}["wmgihlriukd"]="minimum";class Venture{private$bids;private$id;private$name;private$image;private$description;private$minimum;private$maximum;private$max_shares;private$end_date;function __construct($id,$name,$minimum,$maximum,$image,$max_shares,$description,$end_date,$bids=null){$vbimdxte="name";$wqpzaeoiykvn="id";$this->id=${$wqpzaeoiykvn};$this->name=${$vbimdxte};$this->minimum=${${"GLOBALS"}["wmgihlriukd"]};$this->maximum=${${"GLOBALS"}["lfxshuqk"]};$xrmolwn="end_date";$this->bids=${${"GLOBALS"}["vivjffzom"]};$this->image=${${"GLOBALS"}["ymhiltovow"]};$this->description=${${"GLOBALS"}["fghubseoxx"]};$this->max_shares=${${"GLOBALS"}["ugdzdgvvegy"]};$this->end_date=${$xrmolwn};}public function get_bids(){return$this->bids;}public function get_id(){return$this->id;}public function get_name(){return$this->name;}public function get_image(){return$this->image;}public function get_description(){return$this->description;}public function get_minimum(){return$this->minimum;}public function get_maximum(){return$this->maximum;}public function set_bids($bids){$this->bids=${${"GLOBALS"}["vivjffzom"]};}public function still_valid(){return strtotime($this->get_end_date())>time();}public function bid_amount(){${${"GLOBALS"}["egcwcfefhns"]}=0;foreach($this->bids as${${"GLOBALS"}["iksiitpqq"]}){${"GLOBALS"}["nfxjenlfgrb"]="count";${${"GLOBALS"}["nfxjenlfgrb"]}+=$bid->get_amount();}return${${"GLOBALS"}["egcwcfefhns"]};}public function get_max_shares(){return$this->max_shares;}public function get_end_date(){return$this->end_date;}}
?>