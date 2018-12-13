@extends('layouts.master')

@section('active-sidebar')
<li><a href="{{route('admin.booking')}}"><i class="fa fa-link"></i> <span>Booking</span></a></li>
<li><a href="{{route('admin.promo')}}"><i class="fa fa-link"></i> <span>Kode Promo</span></a></li>
<li class="active"><a href="{{route('admin.menu')}}"><i class="fa fa-link"></i> <span>Menu makanan</span></a></li>
<li><a href="{{route('admin.order')}}"><i class="fa fa-link"></i> <span>Order online</span></a></li>
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
        Daftar menu
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
                    <a href="{{ route('admin.menu.add') }}"><button type="button" class="btn btn-primary">Buat menu baru</button></a>
                    <div class="card">
                        <div class="card-body">
                                <table>
                                    <th>Nama menu</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                    @foreach ($menus as $menu)
                                        @if ($menus)
                                            <tr>
                                                <td>{{ $menu->title }}</td>
                                                <td>{{ $menu->description }}</td>
                                                <td>{{ $menu->price }}</td>
                                                <td>{{ $menu->stock }}</td>
                                                <td>{{ $menu->images }}</td>
                                                <td>
                                                    <form id="delete-menu-form" action="{{ route('admin.menu.delete', $menu->id) }}" method="POST">
                                                        {!! method_field('delete') !!}
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Hapus menu</button>
                                                    </form>
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
