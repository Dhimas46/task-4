@extends('layout.default')

@section('title', 'Dashboard')
@section('judul', 'Statistik')


@section('content')
<div class="col-md-12">
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label>From</label>
        <input type="date" class="form-control" name="" value="">
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label>To</label>
        <input type="date" class="form-control" name="" value="">
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label>Filter</label>
        <select class="form-control select2" style="width: 100%;">
          <option selected="selected">Today</option>
          <option>Near</option>
          <option>Price</option>
          <option>Location</option>
          <option>Highest</option>
          <option>Lowest</option>
          <option>Date</option>
        </select>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label>Export</label>
        <select class="form-control select2" style="width: 100%;">
          <option selected="selected">Export</option>
          <option>.Pdf</option>
          <option>.Docx</option>
          <option>.Excel</option>
          <option>.Png</option>
          <option>.Jpg</option>
        </select>
      </div>
    </div>
  </div>
  <hr>
  <div class="row mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5>Jumlah Tamu</h5>
        </div>
        <div class="card-body">
          <div>
            <canvas id="myTamu"></canvas>
          </div>
           <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
            const ctx = document.getElementById('myTamu');
            new Chart(ctx, {
              type: 'line',
              data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                  label: 'Jumlah',
                  data: [10, 12, 22, 32, 45, 80],
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
          </script>
        </div>
       </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5>Jumlah Kunjungan</h5>
        </div>
        <div class="card-body">
          <div>
            <canvas id="myKunjungan"></canvas>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <script>
            const myKunjungan = document.getElementById('myKunjungan');
            new Chart(myKunjungan, {
              type: 'bar',
              data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                  label: '# of Vote',
                  data: [12, 19, 3, 5, 2, 3],
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
          </script>
        </div>
       </div>
    </div>
  </div>

</div>

@endsection
