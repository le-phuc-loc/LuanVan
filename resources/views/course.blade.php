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
            @foreach($courses as $course)
            <div class="col-lg-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="caption mt-3">
                            <h5>{{$course->code}}</h5>
                            <h4>{{$course->course_name}}</h4>
                            <h5>Credits: {{$course->credit}}</h5>
                        </div>
                        <div class="mt-3 text-center">
                            <a href="{{ route('schedule',$course->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>