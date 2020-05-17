<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body style="align-content: center">

    <h2>User account</h2>
{{--
     @if($errors->any())
     <div>
         <ul>
             @foreach ($errors->all() as $err)
             <li>
  {{$err}}
             </li>
             @endforeach
         </ul>
     </div>
     @endif --}}
     <div class="alert-danger">first</div>

    <form action="accounts" method="POST">

    <input type="text" name="name" id="" placeholder="name">
    {{@csrf_field()}}
    <br>
    @error('name')
    <span style="color: red">{{ $message}}</span>
    @enderror
    <br>
    <input type="password" name="pass" id="" placeholder="password">
    <br>
    @error('pass')
    <span style="color: red">{{ $message}}</span>
    @enderror
    <br>
    <button class="btn btn-outline-success" type="submit">Submit</button>
</form>

  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/jQuery v3.4.1.js') }}"></script>
</body>
</html>
