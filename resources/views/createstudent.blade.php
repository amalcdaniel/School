<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
</head>
<body>
    <div class="container">
    <center><h1>STUDENT DETAILS</h1></center>
    <br>
    <div class="row">
    <div class="col col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12">
    <form action="studentread" method="post">
    {{ csrf_field() }}
    <table class="table table-borderless">
    <tr>
        <td>Name :</td>
        <td><input type="text" class="form-control" name="sname" ></td>
    </tr>
    <tr>
        <td>Roll No :</td>
        <td><input type="number" class="form-control" name="srollno"></td>
    </tr>
    <tr>
        <td>Admission No :</td>
        <td> <input type="number" class="form-control" name='sadmission'></td>
    </tr>
    <tr>
        <td>College :</td>
        <td><input type="text" class="form-control" name='scollege'></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-dark">Submit</button></td>
    </tr>
    
    
    </table>
    </form>
    
    
    </div>
    
    </div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
<</html>