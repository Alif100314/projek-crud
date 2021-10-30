<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body bgcolor="silver">
  <br>
  <center><u><h1 style="font-family:Algerian;">
                                            <td><font color="red">T</font></td>
                                            <td>A</td> 
                                            <td><font color="red">M</font></td>
                                            <td>B</td>
                                            <td><font color="red">A</font></td>
                                            <td>H</td>&nbsp
                                            <td><font color="red">D</font></td>
                                            <td>A</td>
                                            <td><font color="red">T</font></td>
                                            <td>A</td>
                                            </h1></u></center>
<form action="/biodata/store" method="POST">
@csrf
<div class="mb-5">
    <label for="exampleInputEmail1" class="form-label" style="font-family:Elephant;">Nama </label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
  </div>
  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label" style="font-family:Elephant;">No Telepon</label>
    <input type="number" name="no_tlp" class="form-control" id="exampleInputPassword1" placeholder="***">
  </div>
  <button type="submit" class="btn btn-danger">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
</body>
</html>

  