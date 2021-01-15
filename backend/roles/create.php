<?php
require_once '../../app/Database.php';

$role = $connection->insert('roles', ['name'=>$_POST['name']]);

if ($role) {
    $data = [
        'message'   => 'Role created successfully'
    ];
}else{
    $data = [
        'message'   =>  'Something went wrong'
    ];
}

header('Content-type: application/json');

echo json_encode($data);