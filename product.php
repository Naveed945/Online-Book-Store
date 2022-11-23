<?php include_once 'server/adminheader.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Books</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Available</li>
                        </ol>

<!--					START	BODY CONTENT-->





					  <div class="card mb-4">
                            <div class="card-header">

								<a href="createproduct.php"><button class="btn my-3 btn-lg btn-success">Create New Book +</button></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                          <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Amount (USD)</th>
                                            <th>Desc</th>
                                            
                                            <th>Edit</th>
                                            <th>Del</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>

                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Amount (USD)</th>
                                            <th>Desc</th>
                                            
                                            <th>Edit</th>
                                            <th>Del</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php foreach ($selectproducts as $row) { ?>
                                        <tr>

                                            <td><img src="server/<?= $row['productimage']; ?>" style="width: 100px;border-radius: 20px;height: 100px;"></td>
                                            <td><?= $row['sellername']; ?> </td>
                                            <td><?= $row['productname']; ?> </td>
                                            <td><?= $row['price']; ?></td>
                                            <td><?= substr($row['description'], 0, 50); ?>...</td>
                                            <td><a href="editproduct.php?edit=<?= $row['id']; ?>" class="btn btn-sm btn-primary my-1">edit <i class="fas fa-edit"></i></a>

												</td>
											<td><a href="server/action.php?productdel=<?= $row['id']; ?>" class="btn btn-sm btn-danger">del <i class="fas fa-trash"></i></a></td>
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
