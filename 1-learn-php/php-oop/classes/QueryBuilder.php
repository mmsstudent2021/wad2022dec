<?php


class QueryBuilder {

    // select * from users where gender = 'female' AND age > 18 AND nation = 'korea' AND language = 'en';
    // select * from lists WHERE id = 1 OR id = 3 OR id = 7;

    public $tableName,$where,$orWhere,$order;


    function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->where = $this->orWhere = $this->order = [];
    }

    function where($columnName,$operator,$value){
        // process
        $this->where[] = " $columnName $operator '$value' ";
        // array_push($this->where, "");

        return $this;
    }

    function orWhere($columnName,$operator,$value){
        // process
        $this->orWhere[] = " $columnName $operator '$value' ";
        // array_push($this->where, "");

        return $this;
    }

    function orderBy($columnName,$sort = 'ASC'){
        $this->order[] = " $columnName $sort "; 
        return $this;
    }

    function sql(){
        $sql = "SELECT * FROM ".$this->tableName;

        if(!empty($this->where)){
            $sql .= " WHERE ". join(" AND ",$this->where);
        }

        if(!empty($this->orWhere)){
            $sql .=  " OR ". join(" OR ",$this->orWhere);
        }

        if(!empty($this->order)){
            $sql .=  " ORDER BY ". join( ", ",$this->order);
        }

        $sql .= ";";
        return $sql;
    }

}