<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
       
      <div class="container">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-6">
            <h1>Data jadwal siswa</h1>
            <h6 align="right">Silahkan Isi<h6>
          </div>
        </div>
        <div class="modal-body">
           <form action="/laporan/pdf" method="POST">
            {{csrf_field()}}
      
      <TABLE class="table table-hover">
        <tr>
            <TH>Waktu</TH>
            <TH>Kegiatan</TH>
            <TH>Set Pelajaran</TH>
        </tr>

        <?php $a = 0;?>
         @foreach($laporan as $laporan)
         <?php $a++;?>  
        <tr>
            <td>{{ $laporan->waktu}}</td>
            <td>{{ $laporan->kegiatan}}</td>
            <td>{{ $laporan->set_pelajaran}}</td>

        </tr>
        @endforeach
      </table>

      </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">cetak</button>
          </form>
          </div>

        </div>
      </div>

    

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
