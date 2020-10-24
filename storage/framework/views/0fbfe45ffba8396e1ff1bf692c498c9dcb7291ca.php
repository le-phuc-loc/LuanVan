<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Schedule</title>

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
    </style>
</head>

<body>
    <div class="container">
        <!-- DataTales -->
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3 d-inline-flex justify-content-between align-items-center" id="test">
                <h4 class="m-0 font-weight-bold text-primary">Schedule (<span style="color: black; font-size: 20px"><?php echo e($schedules[0]->course->code); ?></span>)</h4>
                <div>
                    <button id="" class="btn btn-outline-dark" onclick="history.back()"><i class="fas fa-arrow-left"></i> Back</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Weekdays</th>
                                <!-- <th>Period Start</th>
                                <th>Period End</th>
                                <th>Number of periods</th>
                                <th>Number of weeks</th> -->
                                <th>Period</th>
                                <th>Week</th>
                                <th data-orderable="false">List Students</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Weekdays</th>
                                <!-- <th>Period Start</th>
                                <th>Period End</th>
                                <th>Number of periods</th>
                                <th>Number of weeks</th> -->
                                <th>Period</th>
                                <th>Week</th>
                                <th>List Students</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($schedule->id); ?></td>
                                <td><?php echo e($schedule->weekdays); ?></td>
                                <!-- <td><?php echo e($schedule->period_start); ?></td>
                                <td><?php echo e($schedule->period_end); ?></td>
                                <td><?php echo e($schedule->num_periods); ?></td> -->
                                <!-- <td><?php echo e($schedule->num_weeks); ?></td> -->
                                <td>
                                    <?php
                                    $i = $schedule->period_start;
                                    $j = $schedule->period_end;
                                    $x = 1;

                                    while ($x < $i) {
                                        echo "*";
                                        $x++;
                                    }

                                    for ($y = $i; $y <= $j; $y++) {
                                        echo "$y";
                                    }

                                    for ($z = $j; $z < 10; $z++) {
                                        echo "*";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $i = $schedule->num_weeks;

                                    for ($x = 1; $x <= $i; $x++) {
                                        if ($x >= 10) {
                                            $y = $x - 10;
                                            echo "$y";
                                        } else {
                                            echo "$x";
                                        }
                                    }
                                    ?>
                                    *******
                                </td>

                                <td>
                                    <a href="<?php echo e(route('list',$schedule->id)); ?>" class="btn btn-info"><i class="fas fa-arrow-circle-right"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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

</body>

</html><?php /**PATH D:\Luan Van 2020-2021\manager\resources\views/schedule.blade.php ENDPATH**/ ?>