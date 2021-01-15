<?php
include_once '../partials/header.php';

// $result = $connection->select('roles');
// $result->execute();
// $roles = $result->fetchAll();
?>

<div class="container-fluid">
    <div class="row">
        <?php include_once '../partials/sidebar.php'; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Roles</h1>
            </div>

            <?php include_once '../partials/message.php'; ?>

            <form method="post" action="some.html" enctype="multipart/form-data" class="form-signin">
                <h1 class="h3 mb-3 fw-normal">Add a New Role</h1>
                <div id="alert" class="alert alert-success" style="display: none;">
                    <p>Role has been created</p>
                </div>

                <label for="" class="visually-hidden">Role Name</label>
                <input type="text" id="name" class="form-control" placeholder="Role Name" required>
                <p></p>
                <button class="w-100 btn btn-lg btn-primary" type="submit" id="button">Add Role</button>
            </form>

            <div class="table-responsive">
                <table class="table table-striped table-sm" id="role_list">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php //foreach ($roles as $role) { 
                                ?>
                            <tr>
                                <td><?php //echo $role['id']; 
                                    ?></td>
                                <td><?php //echo $role['name']; 
                                    ?></td>
                                <td>
                                    <a href="../roles/edit.php?id=<?php //echo $role['id']; 
                                                                    ?>" class="btn-sm btn btn-info">Edit</a>
                                    <a href="../roles/delete.php?id=<?php //echo $role['id']; 
                                                                    ?>" class="btn-sm btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php //} 
                        ?> -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<?php include_once '../partials/datatable.php'; ?>

<script>
    // it applied on roles/index.php
    let button = document.getElementById('button');
    button.addEventListener('click', function(e) {
        // stop form submission
        e.preventDefault();

        // grab field value
        let role_name = document.getElementById('name').value;

        // create instance
        let request = new XMLHttpRequest();

        // after clicking th button open this file
        request.open("POST", "../roles/create.php");
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        // after form submission
        request.onreadystatechange = function() {
            let container = document.getElementById('alert');
            container.style.display = "block";
            console.log(request.response);

            // empty form field
            document.getElementById('name').value = "";

            //window.location.href = '../roles/index.php';

            // refresh the role list using jquery
            $('#nameList').load(document.URL + ' #role_list');
        }

        // send data
        request.send("name=" + role_name);
    });

    // Data Table
    $('#role_list').DataTable({
        dom: 'Bfrtip',
        buttons: ['excel', 'print', 'pdf', 'excel', 'copy'],
        serverSide: true,
        ajax: 'json.php',
        pageLength: 5,
        processing: true,
    });
</script>

<?php include_once '../partials/footer.php'; ?>