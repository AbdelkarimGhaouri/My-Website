<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Abdel GHAOURI</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
</head>

<body id="page-top">

<p>Hi, This is {{ $data['name'] }}</p>
<p>I have some query like {{ $data['message'] }}.</p>
<p>It would be appriciative, if you gone through this feedback.</p>
    <footer class="footer text-center" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-uppercase">Around the Web</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.facebook.com/abdelkarim.ghaouri/"><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.instagram.com/abdelkarimghaouri/?hl=fr"><i class="fa fa-instagram fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://github.com/AbdelkarimGhaouri"><i class="fa fa-github fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.linkedin.com/in/abdelkarim-ghaouri-b59045135/"><i class="fa fa-linkedin fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>