@extends('layouts.logged')

@section('content')
<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">CARGO MANAGEMENT</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#">History</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Shipment</div>
                <div class="card-body">
                    <form class="form" action="/action_page.php">
                        <div class="col-sm-12">
                            <div class="row">
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                    <label for="email">Recipient</label>
                                                    <input type="email" class="form-control" id="email">
                                            </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                        <div class="form-group">
                                                <label for="email">Source</label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Destination</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                    <label for="email">Source</label>
                                                    <input type="email" class="form-control" id="email">
                                                </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Destination</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
