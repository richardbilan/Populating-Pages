@extends('components.layout')

@section('title')
Dashboard
@endsection



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>  Name</th>
                      <th> Country</th>
                      <th>City</th>
                      <th> Salary </th>
                    </thead>
                    <tbody>   
                    <tr>
                 <td>Richard</td>
                 <td>Phillipines</td>
                 <td>Legaspi City</td>
                 <td> 5million dolars dolars</td>
                </tr>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>       
      </div>
    
@endsection


@section('scripts')

@endsection