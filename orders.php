<?php include_once 'server/adminheader.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Orders</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

<!--					START	BODY CONTENT-->




					  <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Order's List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                          <th>Fullnames</th>
                                          <th>Country</th>
                                          <th>Street</th>
                                          <th>city</th>
                                          <th>County</th>
                                          <th>Zip</th>
                                          <th>Email</th>
                                          <th>Mobile</th>
                                          <th>Books</th>
                                          <th>Amount</th>
                                          <th>Status</th>
                                          <th>Verify Order</th>
                                          <th>Del</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>

                                            <th>Fullnames</th>
                                            <th>Country</th>
                                            <th>Street</th>
                                            <th>city</th>
                                            <th>County</th>
                                            <th>Zip</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Books</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Verify Order</th>
                                            <th>Del</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php foreach ($selectorders as $row) { ?>
                                        <tr>

                                            <td><?= $row['firstname']; ?> <?= $row['lastname']; ?></td>
                                            <td><?= $row['country']; ?></td>
                                            <td><?= $row['street']; ?></td>
                                            <td><?= $row['city']; ?></td>
                                            <td><?= $row['county']; ?></td>
                                            <td><?= $row['zip']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['mobile']; ?></td>
                                            <td><?= $row['products']; ?></td>
                                            <td><?= $row['grand_total']; ?></td>
                                            <?php if($row['status']==0){ ?>
                                            <td><p class="alert alert-warning">Pending</p></td>
                                          <?php }else{ ?>
                                            <td><p class="alert alert-success">Verified</p></td>
                                          <?php } ?>
                                            <td><a href="server/action.php?verify=<?= $row['id']; ?>" class="btn btn-sm btn-primary my-1">verify <i class="fas fa-edit"></i></a>

												</td>
											<td><a href="server/action.php?orderdel=<?= $row['id']; ?>" class="btn btn-sm btn-danger">del <i class="fas fa-trash"></i></a></td>
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
                            <div class="text-muted">Copyright &copy; BookStore 2022</div>

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
