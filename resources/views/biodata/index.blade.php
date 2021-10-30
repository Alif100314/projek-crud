<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head >
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" style="font-family:Forte;">
                                            <td><font color="red">B</font></td>
                                            <td>I</td> 
                                            <td><font color="red">O</font></td>
                                            <td>D</td>
                                            <td><font color="red">A</font></td>
                                            <td>T</td>&nbsp
                                            <td><font color="red">A</font></td>
                                            </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/aku" style="font-family:Forte;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login" style="font-family:Forte;">Logout</a>
      </li>
    </ul>
  </div>
</nav>
    <form action="/biodata" method="GET">
		<input type="text" name="search" autocomplete="off">
		<button type="submit">Search</button>
	</form>
    <br>
    <a href="/biodata/create"  class="btn btn-primary" style="font-family:Elephant;">Tambahkan Data</a>
    <table border="10"  class="table table-hover">
    <thead>
        <tr align="center" style="font-family:Algerian;" bgcolor="yellow">
            <th>No</th>
            <th>Nama Siswa</th>
            <th>No Tlp</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach($table as $no =>$value)
    <tbody>
        <tr align="center" style="font-family:Elephant;" bgcolor="#778899">
            <td><font>{{$loop->iteration}}</font></td>
            <td>{{$value->nama}}</td>
            <td>{{$value->no_tlp}}</td>
            <td><a href="/biodata/edit/{{$value->id}}" class="btn btn-info" style="font-family:Elephant;">Edit</a>&nbsp<a href="/biodata/destroy/{{$value->id}}" class="btn btn-primary " style="font-family:Elephant;">Hapus</a>&nbsp<a href="/biodata/detail/{{$value->id}}" class="btn btn-danger" style="font-family:Elephant;">Show</a></td>
        </tr>
    </tbody>
    @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
