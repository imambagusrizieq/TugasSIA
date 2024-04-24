<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Akun</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 15px 15px 0 0;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .modal-content {
            border-radius: 15px;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-footer {
            border-top: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Tambah Akun Baru</h5>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="nama_akun" class="form-label">Nama Akun</label>
                                <input type="text" class="form-control" id="nama_akun" name="nama_akun">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_akun" class="form-label">Jenis Akun</label>
                                <input type="text" class="form-control" id="jenis_akun" name="jenis_akun">
                            </div>
                            <div class="mb-3">
                                <label for="type_saldo" class="form-label">Tipe Saldo</label>
                                <select class="form-select" id="type_saldo" name="type_saldo">
                                    <option value="debit">Debit</option>
                                    <option value="kredit">Kredit</option>
                                </select>
                            </div>
                            <button type="reset" class="btn btn-secondary me-2">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Akun</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Akun</th>
                                        <th>Jenis Akun</th>
                                        <th>Tipe Saldo</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kas</td>
                                        <td>Aset</td>
                                        <td>Debit</td>
                                        <td>
                                            <button class="btn btn-sm btn-success me-1" data-bs-toggle="modal" data-bs-target="#editAkun"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <!-- Data Akun lainnya -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editAkun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_nama_akun" class="form-label">Nama Akun</label>
                            <input type="text" class="form-control" id="edit_nama_akun" name="nama_akun" value="Kas">
                        </div>
                        <div class="mb-3">
                            <label for="edit_jenis_akun" class="form-label">Jenis Akun</label>
                            <input type="text" class="form-control" id="edit_jenis_akun" name="jenis_akun" value="Aset">
                        </div>
                        <div class="mb-3">
                            <label for="edit_type_saldo" class="form-label">Tipe Saldo</label>
                            <select class="form-select" id="edit_type_saldo" name="type_saldo">
                                <option value="debit" selected>Debit</option>
                                <option value="kredit">Kredit</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
