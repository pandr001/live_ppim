<?php
class db{
public $conn;
public function __construct(){
    $cstr=[];
	try{
        switch (DB){
            case 0:
                $cstr['0']='mysql:host';
                $cstr['1']='dbname';
                break;
            case 1:
                $cstr['0']='sqlsrv:Server';
                $cstr['1']='Database';
                break;
            default:
                $cstr['0']='mysql:host';
                $cstr['1']='dbname';
                break;
        }
        $this->conn=new PDO($cstr['0']."=".DB_H.";".$cstr['1']."=".DB_N,DB_U,DB_P,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
    }catch(PDOException $e){
		die($e->getMessage());
	}
}
public function getRows($table,$conditions=array()){
    try{
        $sql='SELECT ';
        $sql.=array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql.=' FROM '.$table;
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key=>$value){
                $pre=($i>0)?' AND ':'';
                $sql.=$pre.$key." = '".$value."'";
                $i++;
            }
        }
        if(array_key_exists("order_by",$conditions)){
            $sql.=' ORDER BY '.$conditions['order_by']; 
        }
        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql.=' LIMIT '.$conditions['start'].','.$conditions['limit']; 
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql.=' LIMIT '.$conditions['limit']; 
        }
        $query = $this->conn->prepare($sql);
        $query->execute();
        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data=$query->rowCount();
                    break;
                case 'single':
                    $data=$query->fetch();
                    break;
                default:
                    $data='';
            }
        }else{
            if($query->rowCount() > 0){
                $data=$query->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        return isset($data)?$data:array();
     }catch(PDOException $e){
        die($e->getMessage());
    }
}
public function getQuery($query){
    try{
        $q=$this->conn->prepare($query);
        $q->execute();
        $list=$q->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
public function getFetchWithCount($query){
    $data=[];
    $list=$this->getFetch($query);
    $data['count']=count($list);
    $data['data']=@$list[0];
    return $data;
}
public function getFetchWCount($query){
    $data=[];
    $list=$this->getQuery($query);
    $data['count']=count($list);
    $data['data']=@$list[0];
    return $data;
}
public function getFetchAllWCount($query){
    $data=[];
    $data['data']=$this->getQuery($query);
    $data['count']=count($data['data']);
    return $data;
}
public function getCount($query){
    return count($this->getQuery($query));
}
public function getFetch($query){
    try{
        $q=$this->conn->prepare($query);
        $q->execute();
        $list=$q->fetch();
        return $list;
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
public function select($table){
    $query="
        SELECT *
        FROM $table
    ";
    return $this->getQuery($query);
}
public function fetch($table,$id){
    $query="
        SELECT * 
        FROM $table
        WHERE ID=$id
    ";
    return $this->getFetch($query);
}
public function insert($table,$data){
    if(!empty($data) && is_array($data)){
        $columns='';
        $values='';
        $i=0;  
        $columnString=implode(',', array_keys($data));
        $valueString=":".implode(',:', array_keys($data));
        $sql="INSERT INTO ".$table." (".$columnString.") VALUES (".$valueString.")";
        $query=$this->conn->prepare($sql);
        foreach($data as $key=>$val){
            $query->bindValue(':'.$key, $val);
        }
        $insert=$query->execute();
        return $insert?$this->conn->lastInsertId():false;
    }else{
        return false;
    }
}
public function update($table,$data,$conditions){
	try{
        if(!empty($data) && is_array($data)){
            $colvalSet='';$colvalSet2='';
            $whereSql='';
            $i=0;$x=0;
            foreach($data as $key=>$val){
                $pre=($i>0)?', ':'';
                $colvalSet.=$pre.$key." = :".$key."";
                $i++;
            }
            foreach($data as $key=>$val){
                $pre=($x>0)?', ':'';
                $colvalSet2.=$pre."'".$val."'";
                $x++;
            }
            if(!empty($conditions)&& is_array($conditions)){
                $whereSql.=' WHERE ';
                $i=0;
                foreach($conditions as $key=>$value){
                    $pre=($i>0)?' AND ':'';
                    $whereSql.=$pre.$key." = '".$value."'";
                    $i++;
                }
            }
            $sql="UPDATE ".$table." SET ".$colvalSet.$whereSql;
            $query=$this->conn->prepare($sql);
            foreach($data as $key=>$val){
                $query->bindValue(':'.$key, $val);
            }
            $update=$query->execute();
            return $update?true:false;
        }else{
            return false;
        }
    }catch(PDOException $e){
		die($e->getMessage());
	}
}
public function delete($table,$conditions){
    $whereSql='';
    if(!empty($conditions)&& is_array($conditions)){
        $whereSql.=' WHERE ';
        $i=0;
        foreach($conditions as $key=>$value){
            $pre=($i>0)?' AND ':'';
            $whereSql.=$pre.$key." = '".$value."'";
            $i++;
        }
    }
    $sql="DELETE FROM ".$table.$whereSql;
    $delete=$this->conn->exec($sql);
    return $delete?$delete:false;
    }
}