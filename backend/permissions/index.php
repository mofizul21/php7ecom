<?php

?>

<?php include_once '../partials/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php include_once '../partials/sidebar.php'; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Permissions</h1>
            </div>

            <?php include_once '../partials/message.php'; ?>

            <form method="post" action="" enctype="multipart/form-data" class="form-signin">
                <h1 class="h3 mb-3 fw-normal">Add a New Role</h1>

                <label for="" class="visually-hidden">Role Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Role Name" required>

                <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Add Role</button>
            </form>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin</td>
                            <td><a href="">Edit</a> | <a href="">Delete</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<?php include_once '../partials/footer.php'; ?>