        <div class="modal-body">
           <form action="/data_diri/create" method="POST">
            {{csrf_field()}}
            

             <div class="form-group">
              <label for="exampleInputEmail1">Password awal : </label>
              <input name="password_awal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="password_awal"  placeholder="password awal">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Password baru : </label>
              <input name="password_baru" type="text" class="form-control" nama="exampleInputEmail1" aria-describedby="password_baru"  placeholder="password baru">
            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>