@extends('layout.default')

@section('title', 'Tamu')
@section('judul', 'Tamu')


@section('content')
  <div id="flash" data-flash="{{session()->get('success')}}"></div>
  <div class="col-md-12">
    <div class="row">
      <table class="table table-borderless">
        <tbody>
          <tr>
            <td><div class="form-group">
                  <label>From</label>
                  <input type="date" class="form-control" name="" value="">
                </div></td>
                <td>  <div class="form-group">
                    <label>To</label>
                    <input type="date" class="form-control" name="" value="">
                  </div></td>
                  <td><div class="form-group">
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
                  </div></td>
                  <td>
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
                    </div></td>
          </tr>
        </tbody>
      </table>
    </div>
    <hr>
    <div class="card mt-0">
      <div class="card-header">
        <a  data-toggle="modal" data-target="#exampleModal" class="btn btn-success "><i class="fa fa-plus"></i> &nbspTambah</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Asal</th>
              <th>Jumlah</th>
              <th>PIC</th>
              <th>Tanggal</th>
              <th style="width: 80px;">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tamu as $key => $value)
            <tr>
              <td>{{$value->asal}}</td>
              <td>{{$value->jumlah}}</td>
              <td>{{$value->pic}}</td>
              <td>{{date('d/m/Y', strtotime($value->tanggal))}}</td>
              <td>
                <div class="btn-group">
                  <button type="button" class="btn btn-success">Action</button>
                  <button type="button" class="btn btn-success dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    <span class="sr-only ">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="btn dropdown-item" data-toggle="modal" data-target="#modal-edit{{$value->id}}">Edit</a>
                    <a id="btn-hapus" class="dropdown-item"href="{{url('delete-tamu/'.$value->id)}}">Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Tamu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="" action="{{url('tambah-tamu')}}" method="post">
            @csrf
            <label>Asal</label>
            <input type="text" class="form-control" name="asal" placeholder="Kantor">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="jumlah" placeholder="2">
            <label>PIC</label>
            <input type="text" class="form-control" name="pic" placeholder="Dhimas">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Save changes</button>
        </div>
          </form>
      </div>
    </div>
  </div>
@foreach ($tamu as $key => $value)
  <div class="modal fade" id="modal-edit{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Tamu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="" action="{{url('update-tamu/'. $value->id)}}" method="post">
            @csrf
            @method('PUT')
            <label>Asal</label>
            <input type="text" class="form-control" name="asal" value="{{$value->asal}}">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="jumlah" value="{{$value->jumlah}}">
            <label>PIC</label>
            <input type="text" class="form-control" name="pic" value="{{$value->pic}}">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal" value="{{$value->tanggal}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save changes</button>
        </div>
          </form>
      </div>
    </div>
  </div>
@endforeach
@endsection
