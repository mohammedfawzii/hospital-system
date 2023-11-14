@extends('layouts.layout-dash')
@section('content')
    <x-header-dash title="Department" />
    <div class="card card-fluid">
        <!-- .card-header -->
        <!-- .card-body -->
        <div class="card-body">
            <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                    <!-- thead -->
                    <thead>
                        <tr>
                            <th> Department</th>
                            <th> Patients </th>
                            <th> Floor </th>
                            <th> Rooms </th>
                            <th> Available rooms </th>
                            <th> Head </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle w-25"><a href="#">Cardiology</a></td>
                            <td class="align-middle "> 29 </td>
                            <td class="align-middle"> 4 </td>
                            <td class="align-middle"> 25 </td>
                            <td class="align-middle"> 9 </td>
                            <td class="align-middle w-10"> DR.Harry Maguire </td>
                        </tr>
                    </tbody><!-- /tbody -->
                </table><!-- /.table -->
            </div><!-- /.table-responsive -->
            <!-- .pagination -->

        </div><!-- /.card-body -->
    </div>
@endsection
