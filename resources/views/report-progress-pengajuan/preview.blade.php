<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
    @include('layout.css')
</head>
<body>
    <div class="container-fluid">
        <div class="mt-12 text-right col-lg-1">
            <a href="{{ asset('report/progress-pengajuan-kpi') }}" class="btn btn-light-success"><i class="fas fa-arrow-left"></i>Kembali</a>
        </div>
        <div class="mt-12 text-center">
            <img src="{{asset('assets/media/logos/preview-progress-pengajuan.png')}}">
        </div>
    </div>
</body>
</html>