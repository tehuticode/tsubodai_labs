<?php
require_once('db.php');

// format arrays, wrapping in <pre> tags so it looks nice
function formatArray($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

// select
function selectAll(){
    global $conn;
    $data = array();
    $stmt = $conn->prepare("SELECT id, firstName, lastName, email FROM devs"); //was going to use * but being explicit is better
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) echo ('No rows');
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $stmt->close();
    return $data;
}

//select single statement

function selectSingle($id = NULL){
    global $conn;
    //$data = array();
    $stmt = $conn->prepare("SELECT id, firstName, lastName, email FROM devs WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) echo ('No rows');
    $row = $result->fetch_assoc();
    $stmt->close();
    return $row;
}

//insert statement
function insert($firstName, $lastName, $email)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO devs (firstName, lastName, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstName, $lastName, $email);
    $stmt->execute();
    $stmt->close();
}

//update statement
function update($firstName, $lastName, $email)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO devs (firstName, lastName, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstName, $lastName, $email);
    $stmt->execute();
    $stmt->close();
}
