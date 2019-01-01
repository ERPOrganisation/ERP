@extends('layouts.blank')

@section('header_styles')
@stop


@section('inner-content')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<table class="table table-bordered" id="etablissement-table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>state</th>
                <th>city</th>
                <th>streetName</th>
                <th>buildingNumber</th>
                <th>postcode</th>
                <th>PhoneNumber</th>
            </tr>
        </thead>
    </table>

@stop

@push('scripts')
<script>
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- DataTables -->

@endpush

