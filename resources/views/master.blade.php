<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="container">
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    
</body>
<style>
    .demo{
        background:black;
        color: white;
        text-align: center;

    }
    .foot{
        margin-top: 2rem;
    }
    .head{
        margin-top: 1rem;
        height: 5rem;
    }
    .box{
        height: 25rem;
    }
    
    .form-control{
        width: 20rem;
    }
    .formz{
        margin-top: 2rem;
    }
    .formz h2{
        margin: 2rem auto;
    }
    .butn{
        margin: 0 20rem;
    }
    .navy{
        margin: 5rem auto;
        
    }
    .round{
        margin:0 4rem;
    }
    .system{
        margin: 0 15rem;
        margin-top: 2rem;
    }
    .addstd{
        margin: 2rem 25rem;
    }
</style>
</html>