@extends('layouts.master')

@section('active-sidebar')
<li class="active"><a href="{{route('admin.booking')}}"><i class="fa fa-link"></i> <span>Booking</span></a></li>
<li><a href="{{route('admin.promo')}}"><i class="fa fa-link"></i> <span>Kode promo</span></a></li>
@endsection

@section('content')
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-left: 20%;
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
        Permintaan Booking
        <!--<small>Optional description</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
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
                                    <th>Untuk tanggal</th>
                                    <th>Pada jam</th>
                                    <th>Jumlah orang</th>
                                    <th>Telepon</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    @foreach ($bookings as $booking)
                                        @if ($bookings)
                                            <tr>
                                                <td>{{ $booking->name }}</td>
                                                <td>{{ $booking->book_date }}</td>
                                                <td>{{ $booking->book_time }}</td>
                                                <td>{{ $booking->people_amount }}</td>
                                                <td>{{ $booking->phone }}</td>
                                                <td>{{ $booking->status }}</td>
                                                <td> <a href="#">Terima Pesanann Booking</a></td>
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
