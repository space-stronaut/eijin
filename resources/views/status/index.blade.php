@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Izin</div>

                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <form action="{{ route('status.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="status" value="masuk">
                            <button class="btn btn-primary">Checkin</button>
                        </form>
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Izin Keluar
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Izin Keluar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('status.store') }}" method="post">
                @csrf
                <input type="hidden" name="status" value="keluar">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <label for="">Tanggal Keluar</label>
                    <input type="date" name="start_date" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jam Keluar</label>
                    <input type="time" name="start_time" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Perkiraan Tanggal Kembali</label>
                    <input type="date" name="end_date" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Perkiraan Jam Kembali</label>
                    <input type="time" name="end_time" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary">Checkout</button>
            </form>
        </div>
      </div>
    </div>
  </div>
                        {{-- <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Izin Keluar
      </button> --}}
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Izin Keluar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('status.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="status" value="keluar">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="form-control">
                        <label for="">Tanggal Keluar</label>
                        <input type="date" name="start_date" id="" class="form-control">
                    </div>
                    <div class="form-control">
                        <label for="">Jam Keluar</label>
                        <input type="time" name="start_time" id="" class="form-control">
                    </div>
                    <div class="form-control">
                        <label for="">Perkiraan Tanggal Kembali</label>
                        <input type="date" name="end_date" id="" class="form-control">
                    </div>
                    <div class="form-control">
                        <label for="">Perkiraan Jam Kembali</label>
                        <input type="time" name="end_time" id="" class="form-control">
                    </div>
                    <div class="form-control">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary">Checkout</button>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
                    </div>
                    
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection