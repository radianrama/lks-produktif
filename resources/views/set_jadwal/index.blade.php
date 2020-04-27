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
            <h1>Data Hasil Jadwal Siswa</h1>
          </div>
          <div class="col-6">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Set Jawwal
            </button>
      

          </div>
      
      <TABLE class="table table-hover">
        <tr>
            <TH>Waktu</TH>
            <TH>Kegiatan</TH>
            <TH>Set Pelajaran</TH>
        </tr>

        <?php $a = 0;?>
         @foreach($set_jadwal as $set_jadwal)
         <?php $a++;?>  
        <tr>
            <td>{{ $set_jadwal->waktu}}</td>
            <td>{{ $set_jadwal->kegiatan}}</td>
            <td>{{ $set_jadwal->set_pelajaran}}</td>

        </tr>
        @endforeach
      </table>

        </div>
      </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="/set_jadwal/create" method="POST">
            {{csrf_field()}}
            

             <div class="form-group">
              <label for="exampleInputEmail1">Waktu</label>
              <input name="waktu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="waktu"  placeholder="Waktu">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Kegiatan</label>
              <input name="kegiatan" type="text" class="form-control" nama="exampleInputEmail1" aria-describedby="kegiatan"  placeholder="Kegiatan">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Set Pelajaran</label>
              <input name="set_pelajaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="set_pelajaran" placeholder="Set Pelajaran" >
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
