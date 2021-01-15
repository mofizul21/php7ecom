<?php
include_once '../../app/ssp.class.php';

// $result = $connection->select('roles');
// $result->execute();
// $roles = $result->fetchAll();

// header('Content-type: application/json');
// echo json_encode($roles);






$table = 'roles';
$primaryKey = 'id';

$columns = [
    [ 'db' => 'id', 'dt' => 0 ],
    [ 'db' => 'name',  'dt' => 1 ],
    [ 'db' => 'id',  'dt' => 2,
        'formatter' =>  function($d, $row){
            return '<a herf="../roles/edit.php?id='.$d. '" class="btn-sm btn btn-info">Edit</a> <a herf="../roles/delete.php?id=' . $d . '" class="btn-sm btn btn-danger">Delete</a>';
        },
    ],
];
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'php7ecom',
    'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

header('Content-type: application/json');
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

?>

