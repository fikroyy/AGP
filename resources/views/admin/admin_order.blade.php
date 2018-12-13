@extends('layouts.master')

@section('active-sidebar')
<li><a href="{{route('admin.booking')}}"><i class="fa fa-link"></i> <span>Booking</span></a></li>
<li><a href="{{route('admin.promo')}}"><i class="fa fa-link"></i> <span>Kode Promo</span></a></li>
<li><a href="{{route('admin.menu')}}"><i class="fa fa-link"></i> <span>Menu makanan</span></a></li>
<li class="active"><a href="{{route('admin.order')}}"><i class="fa fa-link"></i> <span>Order online</span></a></li>
@endsection

@section('content')
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background-color: #ffffff;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar order online
        <br>
        <!--<small>Optional description</small>-->
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                                <table>
                                    <th>Atas nama</th>
                                    <th>Menu</th>
                                    <th>Level</th>
                                    <th>Jumlah pesanan</th>
                                    <th>Pecahan uang</th>
                                    <th>No. telepon</th>
                                    <th>Lokasi</th>
                                    <th>Waktu</th>
                                    <th>Voucher</th>
                                    <th>Catatan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    @foreach ($orders as $order)
                                        @if ($orders)
                                            <tr>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ $order->menu }}</td>
                                                <td>{{ $order->level }}</td>
                                                <td>{{ $order->pcs }}</td>
                                                <td>{{ $order->your_money }}</td>
                                                <td>{{ $order->phone }}</td>
                                                <td>{{ $order->locate }}</td>
                                                <td>{{ $order->time }}</td>
                                                <td>{{ $order->voucher }}</td>
                                                <td>{{ $order->note }}</td>
                                                <td>{{ $order->status }}</td>
                                                <td>
                                                    @if ($order->status == 'BELUM KONFIRMASI')
                                                    <form id="change-status-booking-form" action="{{ route('admin.order.change_status', $order->id) }}" method="POST">
                                                        {!! method_field('post') !!}
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Ubah status pesanan</button>
                                                    </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
