@extends('layouts.layout-dash')
@section('content')
    <div class="page-section">
        @include('sections.staff.administrative')
        @include('sections.staff.doctors')
        @include('sections.staff.pharmacy')
        @include('sections.staff.accountants')
        @include('sections.staff.ambulance')
        @include('sections.staff.reception')
        @include('sections.staff.assistants')
        @include('sections.staff.cleaning-official')
        @include('sections.staff.security')
    </div>
@endsection
