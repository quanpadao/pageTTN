<?php
require_once('config.php');

//SQL: insert, update, delete
function execute($sql){
    //open connection
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf-8');

    //query
    mysqli_query($conn, $sql);

    //close connection
    mysqli_close($conn);

}

//SQL: select
function executeResult($sql, $params = []) {
    // Open connection
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf-8');

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters if provided
    if (!empty($params)) {
        $paramTypes = '';
        $paramValues = [];

        foreach ($params as $param) {
            $paramTypes .= 's'; // Assume all parameters are strings
            $paramValues[] = $param;
        }

        mysqli_stmt_bind_param($stmt, $paramTypes, ...$paramValues);
    }

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result set
    $res = mysqli_stmt_get_result($stmt);

    // Fetch rows into an array
    $data = [];
    while (($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) != null) {
        $data[] = $row;
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    return $data;
}