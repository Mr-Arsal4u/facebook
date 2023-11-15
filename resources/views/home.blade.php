@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <h2>Users Table</h2>
    <table id="example" class="display" style="width:100%">
  <thead>
    <tr>
    <th class="th-sm">ID  
      </th>
   
      <th class="th-sm">Email  
      </th>
      <th class="th-sm">Password
      </th>
      <th class="th-sm">created 
      </th>
      <!-- <th class="th-sm">Salary
      </th> -->
    </tr>
  </thead>
  <tbody>
  @foreach ($people as $person)
  <tr>
  <td>{{$person->id}}</td>
  <td>{{$person->name}}</td>
    <td>{{$person->password}}</td>
    <td>{{ date('d F Y H:i A', strtotime($person->created_at)) }}</td>
  </tr>
  @endforeach</tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

