@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
    <nav class="navbar bg-body-tertiary  ">
      <div class="container-fluid">
        <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">Dashboard</span>
      </div>
    </nav>
    <div class="w-100">
        <div class="row w-100">
            <div class="col-sm-3 p-2">
                {{-- Phone --}}
                <div class="w-100 rounded" style="height: 160px; background-color:#8B96A5">
                    <div class="bg-secondary w-100 p-4 rounded text-white" style="height: 120px">
                        <p class="h4">
                            Phone
                        </p>
                        <p class="h3">
                           98
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-2">
                <div class="w-100 rounded" style="height: 160px; background-color:#8B96A5">
                    <div class="bg-secondary w-100 p-4 rounded text-white" style="height: 120px">
                        <p class="h4">
                            Laptop
                        </p>
                        <p class="h3">
                            78
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-2">
                <div class="w-100 rounded" style="height: 160px; background-color:#8B96A5">
                    <div class="bg-secondary w-100 p-4 rounded text-white" style="height: 120px">
                        <p class="h4">
                            Employee
                        </p>
                        <p class="h3">
                            12
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-2">
                <div class="w-100 rounded" style="height: 160px; background-color:#8B96A5">
                    <div class="bg-secondary w-100 p-4 rounded text-white" style="height: 120px">
                        <p class="h4">
                            About
                        </p>
                        <p class="h3">
                            1
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
