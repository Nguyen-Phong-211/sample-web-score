<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @include('cdn-js')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 menu py-5">
                <h3 class="text-white text-center mb-3">Menu</h3>
                @include('menu')
            </div>

            <div class="col-md-10 py-5">
                <h2 class="mb-2 card p-3">
                    G-Scores
                </h2>

                <div class="card">
                    <div class="card-body">
                        <h4 class="m-1 mb-3">Thống kê số lượng học sinh theo mức điểm</h4>

                        <div class="container">
                            <canvas id="reportChart" width="400" height="200" data-report="{{ json_encode($reportData) }}"></canvas>
                        </div>
                        
                        <script src="{{ asset('assets/js/chart.js') }}"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
