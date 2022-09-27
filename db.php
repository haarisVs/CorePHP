<?php
class db
{
    public $conn;
    function __construct($host="", $username="", $password="", $dbname='')
    {
        $this->conn = new mysqli($host, $username, $password, $dbname);
    }


    function Query($q)
    {
        return $this->conn->query($q);
        
    }

    function Result($result, $RowNumber, $FieldName)
    {
        if (strpos($FieldName,'.'))
        {
            $FieldName = explode('.', $FieldName);
            $sCustomerFirstName = $FieldName[0];
            $FieldName = $FieldName[1];
        }

        if($result->num_rows == 0) return('');
            $result->data_seek($RowNumber);
            $ceva = $result->fetch_assoc();
            $r = $ceva[$FieldName];
    
          return $r;
    }

    function rows($result)
    {
       return $r = $result->num_rows;
    }
}