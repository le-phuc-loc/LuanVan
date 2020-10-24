<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>List Students</title>

    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        .table td {
            vertical-align: middle;
        }

        td:last-child {
            text-align: center
        }

        .btn-check {
            position: fixed;
            bottom: 50px;
            right: 20px;
            z-index: 99;
            font-size: 20px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Modal Add Image -->
        <div class="modal fade" id="modaladd">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Add image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Modal body -->
                    <form id="frmCreate" action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="customFile">Icon</label>
                                <div class="custom-file">
                                    <input id="icon_pro" type="file" class="custom-file-input file-upload @error('icon_pro') is-invalid @enderror" name="icon_pro">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    @error('icon_pro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="icon img-thumbnail" alt="icon">
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button id="btnAdd" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- DataTales -->
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3 d-inline-flex justify-content-between align-items-center" id="test">
                <h4 class="m-0 font-weight-bold text-primary">List Students <span style="color: black;">(Group: {{ $list[0]->schedule->id }})</span></h4>
                <div>
                    <a href="/" class="btn btn-outline-dark"><i class="fas fa-home"></i> Home</a>
                    <button id="" class="btn btn-outline-dark" onclick="history.back()"><i class="fas fa-arrow-left"></i> Back</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student Code</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th data-orderable="false">Register</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Student Code</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($list as $l)
                            <tr>
                                <td>{{ $l->id }}</td>
                                <td>{{ $l->student->student_code }}</td>
                                <td>{{ $l->student->full_name }}</td>
                                <td>{{ $l->student->gender }}</td>
                                <td>{{ $l->student->email }}</td>

                                @if (in_array($l->student->student_code, $attend))
                                <td>yes</td>
                                @else
                                <td>no</td>
                                @endif

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <button class="btn-check btn btn-outline-dark" data-toggle="modal" data-target="#modaladd"><i class="fas fa-user-check"></i></button>
        <!-- <a class="btn-check btn-success text-white" id="check" href=""><i class="fas fa-user-check"></i></a> -->
    </div>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>

    <!-- <script>
        $(document).ready(function() {
            $("#check").click(function() {
                alert("The paragraph was clicked.");
            });
        });
    </script> -->

    <script>
        $(document).ready(function() {


            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.icon').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


            $(".file-upload").on('change', function() {
                readURL(this);
            });
        });
    </script>
</body>

</html>