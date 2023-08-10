@extends('layout.master')
@section('content')

    <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Tambah Data transaksi</h5>
              <div class="card">
                <div class="card-body">
                  <form method="POST" action="{{ route('booking_transaksi.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Id transaksi</label>
                      <input type="text" class="form-control" name="id_transaksi">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama pelanggan</label>
                      <select name="id_pelanggan" id="" class="form-control">
                        <option value="">Pilih Nama Pelanggan</option>
                          @foreach ($list_data_pelanggan as $key => $value)
                        <option value="{{ $key }}">
                          {{ $value }}
                        </option>
                          @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama rumah</label>
                      <!-- <?php   
                          $con = mysqli_connect("localhost","root","","booking_homestay");  
                      ?>  -->
                      <select name="id_rumah" id="" class="form-control" onchange="changeValue(this.value)" required>
                        <option value="">Pilih Rumah</option>
                          @foreach ($list_data_rumah as $key => $value)
                        <option value="{{ $key }}">
                          {{ $value }}
                        </option>
                          @endforeach
                          <!-- <?php   
                          $query = mysqli_query($con, "select * from data_rumah order by id_rumah esc");  
                          $result = mysqli_query($con, "select * from data_rumah");  
                          $a          = "var alamat = new Array();n;";  
                          //$b          = "var total = new Array();n;";  
                          while ($row = mysqli_fetch_array($result)) {  
                               echo '<option name="id_rumah" value="'.$row['id_rumah'] . '">' . $row['id_rumah'] . '</option>';   
                          $a .= "alamat['" . $row['id_rumah'] . "'] = {alamat:'" . addslashes($row['alamat'])."'};n";  
                          //$b .= "total['" . $row['id_rumah'] . "'] = {total:'" . addslashes($row['total'])."'};n";  
                          }  
                          ?>  -->
                      </select>
                    </div>
                    <!-- <div class="mb-3">
                      <label class="form-label">alamat rumah</label>
                      <input type="text" class="form-control" name="alamat" id="alamat" readonly>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">total</label>
                      <input type="text" class="form-control" name="total">
                    </div> -->
                    <div class="mb-3">
                      <label class="form-label">tanggal transaksi</label>
                      <input type="date" class="form-control" name="trans_date">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection