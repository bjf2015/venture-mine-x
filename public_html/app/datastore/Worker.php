<?php ${"G\x4c\x4fBA\x4cS"}["\x63\x62\x69y\x71\x66\x68\x74\x6f\x69"]="\x73\x65\x61r\x63h";${"GLOB\x41\x4cS"}["\x7avcc\x65vgb\x68\x79"]="r\x65\x73\x75\x6ct";${"\x47\x4c\x4f\x42A\x4cS"}["i\x6dj\x6fp\x6f\x68"]="key";${"\x47\x4c\x4fBALS"}["\x6e\x6c\x64\x6ey\x73v\x74"]="\x76\x61l\x75\x65";${"\x47\x4c\x4fB\x41\x4cS"}["\x6cdghey"]="\x71uer\x79";${"G\x4cO\x42\x41\x4cS"}["\x62g\x6d\x79qt\x6cbb"]="st\x61\x74\x65\x6de\x6et";${"GL\x4f\x42\x41L\x53"}["\x7ax\x76\x74\x70pg\x6adkm\x6c"]="\x62i\x6ed\x73";${"\x47\x4c\x4f\x42\x41L\x53"}["\x75\x77\x68wjx\x63\x73\x74x\x64"]="\x64\x62";class Worker{private$connection;function __construct($db){$this->connection=${${"\x47\x4cO\x42\x41L\x53"}["\x75\x77\x68\x77\x6a\x78\x63\x73\x74x\x64"]};}public function query_bind($query,$binds){$eflwrukkvp="quer\x79";if(!empty(${${"\x47\x4cO\x42\x41L\x53"}["z\x78v\x74\x70\x70\x67\x6ad\x6b\x6d\x6c"]})&&!empty(${$eflwrukkvp})){${"\x47L\x4f\x42A\x4cS"}["\x66\x79\x73\x73\x69\x6d\x72nu\x68\x6e"]="k\x65y";${"G\x4c\x4f\x42\x41\x4c\x53"}["\x71m\x69\x68\x72u\x64\x78\x70c\x6f"]="\x62i\x6ed\x73";${${"\x47\x4c\x4f\x42A\x4c\x53"}["b\x67\x6dy\x71\x74\x6c\x62b"]}=$this->connection->prepare(${${"\x47LO\x42\x41\x4cS"}["\x6c\x64\x67\x68\x65\x79"]});foreach(${${"\x47L\x4fBAL\x53"}["\x71\x6d\x69h\x72\x75\x64\x78\x70\x63\x6f"]} as${${"\x47L\x4fB\x41\x4cS"}["f\x79\x73s\x69mrnu\x68\x6e"]}=>${${"G\x4c\x4f\x42\x41\x4c\x53"}["nl\x64\x6e\x79\x73\x76t"]}){${"G\x4cOB\x41LS"}["pm\x6eb\x78\x66\x75\x6b"]="\x76\x61\x6cu\x65";$statement->bindValue(":".${${"G\x4c\x4fBA\x4cS"}["\x69m\x6a\x6f\x70\x6f\x68"]},${${"\x47L\x4fB\x41L\x53"}["\x70m\x6ebxf\x75k"]});}$statement->execute();try{return$statement->fetchAll();}catch(Exception$ignored){return$this->connection->lastInsertId();}}else{die("\x45mp\x74\x79 \x61r\x67uments giv\x65n\x2e");}}public function query($query){if(!empty(${${"G\x4c\x4f\x42\x41L\x53"}["\x6cdgh\x65\x79"]})){${"GLOB\x41L\x53"}["b\x68fl\x71\x64\x62\x7a\x74\x63"]="\x71\x75\x65\x72\x79";${${"\x47LO\x42A\x4cS"}["\x62\x67\x6dy\x71\x74\x6c\x62\x62"]}=$this->connection->prepare(${${"\x47L\x4f\x42\x41LS"}["\x62\x68\x66lq\x64b\x7a\x74\x63"]});$statement->execute();try{return$statement->fetchAll();}catch(Exception$ignored){return$this->connection->lastInsertId();}}else{die("\x45\x6d\x70\x74\x79\x20ar\x67\x75\x6den\x74s g\x69ve\x6e.");}}public function get_value($result,$search){${"GL\x4f\x42\x41\x4c\x53"}["i\x66\x6cmhu\x6a\x65\x6e"]="x";foreach(${${"GL\x4f\x42\x41\x4c\x53"}["\x7a\x76\x63\x63ev\x67b\x68y"]} as${${"\x47\x4cO\x42AL\x53"}["i\x66lm\x68\x75je\x6e"]}){${"G\x4cO\x42A\x4c\x53"}["\x65\x78\x6a\x66c\x62"]="\x78";return${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x65xj\x66\x63\x62"]}[${${"\x47\x4cO\x42A\x4c\x53"}["c\x62\x69y\x71\x66ht\x6fi"]}];}return null;}public function count_rows($result){return count(${${"GL\x4f\x42\x41\x4c\x53"}["zv\x63\x63\x65\x76\x67\x62\x68\x79"]});}public function transact(){if(!$this->connection->inTransaction()){$this->connection->beginTransaction();}}public function commit(){if($this->connection->inTransaction()){$this->connection->commit();}}public function rollback(){if($this->connection->inTransaction()){$this->connection->rollBack();}}}

//<?php ${"G\x4c\x4fBA\x4cS"}["\x63\x62\x69y\x71\x66\x68\x74\x6f\x69"]="\x73\x65\x61r\x63h";${"GLOB\x41\x4cS"}["\x7avcc\x65vgb\x68\x79"]="r\x65\x73\x75\x6ct";${"\x47\x4c\x4f\x42A\x4cS"}["i\x6dj\x6fp\x6f\x68"]="key";${"\x47\x4c\x4fBALS"}["\x6e\x6c\x64\x6ey\x73v\x74"]="\x76\x61l\x75\x65";${"\x47\x4c\x4fB\x41\x4cS"}["\x6cdghey"]="\x71uer\x79";${"G\x4cO\x42\x41\x4cS"}["\x62g\x6d\x79qt\x6cbb"]="st\x61\x74\x65\x6de\x6et";${"GL\x4f\x42\x41L\x53"}["\x7ax\x76\x74\x70pg\x6adkm\x6c"]="\x62i\x6ed\x73";${"\x47\x4c\x4f\x42\x41L\x53"}["\x75\x77\x68wjx\x63\x73\x74x\x64"]="\x64\x62";class Worker{private$connection;function __construct($db){$this->connection=${${"\x47\x4cO\x42\x41L\x53"}["\x75\x77\x68\x77\x6a\x78\x63\x73\x74x\x64"]};}public function query_bind($query,$binds){$eflwrukkvp="quer\x79";if(!empty(${${"\x47\x4cO\x42\x41L\x53"}["z\x78v\x74\x70\x70\x67\x6ad\x6b\x6d\x6c"]})&&!empty(${$eflwrukkvp})){${"\x47L\x4f\x42A\x4cS"}["\x66\x79\x73\x73\x69\x6d\x72nu\x68\x6e"]="k\x65y";${"G\x4c\x4f\x42\x41\x4c\x53"}["\x71m\x69\x68\x72u\x64\x78\x70c\x6f"]="\x62i\x6ed\x73";${${"\x47\x4c\x4f\x42A\x4c\x53"}["b\x67\x6dy\x71\x74\x6c\x62b"]}=$this->connection->prepare(${${"\x47LO\x42\x41\x4cS"}["\x6c\x64\x67\x68\x65\x79"]});foreach(${${"\x47L\x4fBAL\x53"}["\x71\x6d\x69h\x72\x75\x64\x78\x70\x63\x6f"]} as${${"\x47L\x4fB\x41\x4cS"}["f\x79\x73s\x69mrnu\x68\x6e"]}=>${${"G\x4c\x4f\x42\x41\x4c\x53"}["nl\x64\x6e\x79\x73\x76t"]}){${"G\x4cOB\x41LS"}["pm\x6eb\x78\x66\x75\x6b"]="\x76\x61\x6cu\x65";$statement->bindValue(":".${${"G\x4c\x4fBA\x4cS"}["\x69m\x6a\x6f\x70\x6f\x68"]},${${"\x47L\x4fB\x41L\x53"}["\x70m\x6ebxf\x75k"]});}$statement->execute();try{return$statement->fetchAll();}catch(Exception$ignored){return$this->connection->lastInsertId();}}else{die("\x45mp\x74\x79 \x61r\x67uments giv\x65n\x2e");}}public function query($query){if(!empty(${${"G\x4c\x4f\x42\x41L\x53"}["\x6cdgh\x65\x79"]})){${"GLOB\x41L\x53"}["b\x68fl\x71\x64\x62\x7a\x74\x63"]="\x71\x75\x65\x72\x79";${${"\x47LO\x42A\x4cS"}["\x62\x67\x6dy\x71\x74\x6c\x62\x62"]}=$this->connection->prepare(${${"\x47L\x4f\x42\x41LS"}["\x62\x68\x66lq\x64b\x7a\x74\x63"]});$statement->execute();try{return$statement->fetchAll();}catch(Exception$ignored){return$this->connection->lastInsertId();}}else{die("\x45\x6d\x70\x74\x79\x20ar\x67\x75\x6den\x74s g\x69ve\x6e.");}}public function get_value($result,$search){${"GL\x4f\x42\x41\x4c\x53"}["i\x66\x6cmhu\x6a\x65\x6e"]="x";foreach(${${"GL\x4f\x42\x41\x4c\x53"}["\x7a\x76\x63\x63ev\x67b\x68y"]} as${${"\x47\x4cO\x42AL\x53"}["i\x66lm\x68\x75je\x6e"]}){${"G\x4cO\x42A\x4c\x53"}["\x65\x78\x6a\x66c\x62"]="\x78";return${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x65xj\x66\x63\x62"]}[${${"\x47\x4cO\x42A\x4c\x53"}["c\x62\x69y\x71\x66ht\x6fi"]}];}return null;}public function count_rows($result){return count(${${"GL\x4f\x42\x41\x4c\x53"}["zv\x63\x63\x65\x76\x67\x62\x68\x79"]});}public function transact(){if(!$this->connection->inTransaction()){$this->connection->beginTransaction();}}public function commit(){if($this->connection->inTransaction()){$this->connection->commit();}}public function rollback(){if($this->connection->inTransaction()){$this->connection->rollBack();}}}
?>