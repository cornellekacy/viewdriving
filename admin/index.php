<?php include 'header.php'; ?>
</div>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>All Licence Details In the System</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date Of Birth</th>
                                    <th>Licence Number</th>
                                    <th>NIN</th>
                                    <th>Post Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include 'conn.php';
// Check connection
                                if (!$link) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                $sql = "SELECT * FROM licence";
                                $result = mysqli_query($link, $sql);

                                if (mysqli_num_rows($result) > 0) {
    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {?>
                                        <tr>
                                            <td><?php echo $row["name"] ?></td>
                                            <td><?php echo $row["dob"] ?></td>
                                            <td><?php echo $row["lisencenumber"] ?></td>
                                            <td><?php echo $row["inumber"] ?></td>
                                            <td><?php echo $row["postcode"] ?></td>
                                                                                        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row["licence_id"]; ?>">
                    <i class="glyphicon glyphicon-trash icon-white"></i>
                    Delete
                </a>
              <!--   <a class="btn btn-primary" href="edit.php?id=<?php echo $row["licence_id"]; ?>">
                    <i class="glyphicon glyphicon-pencil icon-white"></i>
                    Edit
                </a> -->
            </td>
                                        </tr>

                                    </tbody>
                                    <?php 

                                }
                            } else {
                                echo "0 results";
                            }

                            mysqli_close($link);
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>