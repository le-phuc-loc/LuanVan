<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Courses</title>

    <link rel="icon" href="/favicon.ico">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body style="background-color: #e2e8f0;">
    <div class="card-header py-3 justify-content-between align-items-center text-center">
        <h4 class="m-0 font-weight-bold text-primary">Danh sách học phần</h4>
    </div>
    <div class="container">
        <div class="row mt-5">
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="caption mt-3">
                            <h5><?php echo e($course->code); ?></h5>
                            <h4><?php echo e($course->course_name); ?></h4>
                            <h5>Credits: <?php echo e($course->credit); ?></h5>
                        </div>
                        <div class="mt-3 text-center">
                            <a href="<?php echo e(route('schedule',$course->id)); ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</body>

</html><?php /**PATH D:\Luan Van 2020-2021\manager\resources\views/course.blade.php ENDPATH**/ ?>