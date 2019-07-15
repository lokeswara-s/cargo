@extends('layouts.logged')

@section('content')
<nav>
    <div class="nav-wrapper">
      <input type="hidden" value="{{$user_id}}" id="user_id" />
      <a href="/home" class="navbar-brand">CARGO MANAGEMENT</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/history">History</a></li>
        <li><a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>


                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>    
      </ul>
    </div>
  </nav>
  <div class="container">
  <table>
        <thead>
          <tr>
              <th>#ID</th>
              <th>Source</th>
              <th>Destination</th>
              <th>Name</th>
              <th>Material Type</th>
              <th>Weight</th>
              <th>Shipment Type</th>
              <th>Status</th>
          </tr>
        </thead>

        <tbody>
          @foreach($shipments as $key=>$shipment)
            <tr>
                <td>{{$shipment->id}}</td>
                <td>{{$shipment->source}}</td>
                <td>{{$shipment->destination_value_detail_dest}}</td>
                <td>{{$shipment->first_name_detail.$shipment->last_name_detail}}</td>
                <td>{{$shipment->material_type}}</td>
                <td>{{$shipment->weight}}</td>
                <td>{{$shipment->type}}</td>
                <td>Shipped</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@endsection