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
                            <th> Appointment Booking </th>
                            <th> Frist Booking at </th>
                            <th> Doctor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle w-25"><a href="#">teeth</a></td>
                            <td class="align-middle"> 32</td>
                            <td class="align-middle"> 2024/01/22</td>
                            <td class="align-middle w-10"> DR.Ahmed Nabeil </td>
                        </tr>
                    </tbody><!-- /tbody -->
                </table><!-- /.table -->
            </div><!-- /.table-responsive -->
        </div><!-- /.card-body -->
    </div>
@endsection
