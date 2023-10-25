@extends('layouts.app')

@section('content')


<div class="dashboard-wrapper">
    <div class="container-fluid">
        <div class="row">

        <!-- SIDEBAR -->
            <div class="col-2 sidebar bg-primary">
                sidebar
            </div>

            <!-- DASHBOARD-CONTENT -->
            <div class="col-10 bg-danger dashboard-content">
                <h1 class="text-primary text-center">
                    this is your'e the dashboard hello {{ auth()->user()->name }}  {{ auth()->user()->surname }}
                </h1>
            </div>
        <div>
    </div>
</div>
      
@endsection