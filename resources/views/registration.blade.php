<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

</head>
<body>
<div class="container">
    <form action="register" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group">
                <input type="text" name="admin_id" id="" class="form-control" placeholder="Admin ID">
                <input type="text" name="admin_name" id="" class="form-control" placeholder="Admin Name">
                <input type="text" name="admin_address" id="" class="form-control" placeholder="Admin Address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <input type="date" name="admin_dob" id="" class="form-control" placeholder="Admin Date of bith">
                <input type="text" name="admin_phn" id="" class="form-control" placeholder="Admin Tel">
                <input type="email" name="admin_mail" id="" class="form-control" placeholder="Admin Email">
                <input type="password" name="admin_pass" id="" class="form-control" placeholder="Admin Password">
            </div>
        </div>



        <button type="submit">Submit</button>
    </form>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</body>
</html>
