@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
             Rekap Data
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Total Checkout</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pegawais as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>
                                {{$item->name}}
                            </td>
                            <td>
                                {{App\Models\Status::where('user_id', $item->id)->orderBy('updated_at', 'desc')->get()[0]->status == 'masuk' ? 'Aktif' : 'Keluar'}} - Keperluan : {{App\Models\Status::where('user_id', $item->id)->orderBy('updated_at', 'desc')->get()[0]->keterangan }}
                            </td>
                            <td>
                                {{
                                $status = DB::table('status')
                                ->selectRaw('SEC_TO_TIME(SUM(TIME_TO_SEC(end_time - start_time))) as time')
                                ->where('user_id', $item->id)
                                ->groupBy('user_id')
                                ->get()[0]->time;
                                }}
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection