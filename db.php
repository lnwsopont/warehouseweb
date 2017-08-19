<?php

function sql_select($sql){
    $l = mysql_connect('localhost','root', 'root1234');
    mysql_select_db('gundam');
    $r = mysql_query($sql);
    $result = array();
    while($row = mysql_fetch_assoc($r)){
        $result[] = $row;
    }
    return $result;
}

function sql_insert($sql){
    mysql_connect('localhost', 'root','root1234');
    mysql_select_db('gundam');
    $r = mysql_query($sql);
    return mysql_insert_id();
}

function sql_update($sql){
    mysql_connect('localhost', 'root','root1234');
    mysql_select_db('gundam');
    $r = mysql_query($sql);
    return mysql_affected_rows();
}

function sql_delete($sql){
    return sql_update($sql);
}

?>
