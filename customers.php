<?php include_once 'server/adminheader.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Customers</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

<!--					START	BODY CONTENT-->
					      <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Customer's Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                          <th>FirstName</th>
                                          <th>SecondName</th>
                                          <th>Email</th>
                                          <th>Location</th>
                                          <th>Telephone</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>FirstName</th>
                                            <th>SecondName</th>
                                            <th>Email</th>
                                            <th>Location</th>
                                            <th>Telephone</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php foreach ($selectusers as $row) { ?>
                                        <tr>
                                            <td><?= $row['firstname']; ?></td>
                                            <td><?= $row['secondname']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['location']; ?></td>
                                            <td><?= $row['mobile']; ?></td>
                                            <td><a href="server/action.php?userdel=<?= $row['id']; ?>" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i>DEL</a></td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>









		<!--					END	BODY CONTENT-->



					</div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Buy/Sell 2022</div>

                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
    </body>
</html>
