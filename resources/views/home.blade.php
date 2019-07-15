@extends('layouts.logged')

@section('content')
<nav>
    <div class="nav-wrapper">
      <input type="hidden" value="{{$user_id}}" id="user_id" />
      <a href="#" class="navbar-brand">CARGO MANAGEMENT</a>
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
<!-- <nav class="navbar navbar-default">
        <div class="nav-wrapper">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">CARGO MANAGEMENT</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#">History</a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
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
      </nav> -->
<div class="container">
<form>
    <ul class="stepper horizontal" style="height:550px">
      <li class="step active">
        <div class="step-title waves-effect waves-dark">Recipient Details</div>
        <div class="step-content">
          <div class="row">
            <div class='form-field col s12'>
            <div class="row">
            <div class="col s6">
                    <select id="source_value">
                        <option value="" disabled selected>Select</option>
                        @foreach($locations as $key=>$location)
                          <option value="{{$location->location_name}}">{{$location->location_name}}</option>
                        @endforeach
                    </select>
                    <label>Origin</label>
                <p style="margin:0px;font-size:10px">Source location of the cargo shipment</p>
              
            </div>
            </div>
            <div class="row">

                <div class="input-field col s6">
                    <input  id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
            <div class="input-field col s6">
                <input id="city" type="text" class="validate">
                <label for="city">City</label>
                </div>
                <div class="input-field col s6">
                    <input id="state" type="text" class="validate">
                <label for="state">State</label>
                </div>
                <div class="input-field col s6">
                    <input id="country" type="text" class="validate" >
                <label for="country">Country</label>
                </div>

            </div>
            </div>
          </div>
          <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step" data-validator="validateStepOne" id="submit1">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
          </div>
        </div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Destination</div>
        <div class="step-content">
          <div class="row">
            <div class='form-field col s12'>
              <p style="padding-left:15px">Provide Information Where you are sending to</p>
              <div class="col s6">
                    <select id="destination_value">
                        <option value="" disabled selected>Select</option>
                        @foreach($locations as $key=>$location)
                          <option value="{{$location->location_name}}" cost="{{$location->cost}}">{{$location->location_name}}</option>
                        @endforeach
                    </select>
                    <label>Origin</label>
                <p style="margin:0px;font-size:10px">Destination location of the cargo shipment</p>
            </div>
            </div>
          </div>
          <div class="row">
                <div class="form-field col s12">
                    <div class="input-field col 6">
                        <input id="first_name_dest" type="text" class="validate" >
                        <label for="country">First name</label>
                    </div>
                    <div class="input-field col 6">
                        <input id="last_name_dest" type="text" class="validate" >
                        <label for="country">Last name</label>
                    </div>
                </div>
                <div class="form-field col s12">
                    <div class="input-field col s12">
                        <textarea id="cont_info" class="materialize-textarea"></textarea>
                        <label for="country">Contact Information</label>
                    </div>
                </div>
            </div>
          <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step" id="submit2">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
          </div>
        </div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Shipment Details</div>
        <div class="step-content">
          <div class="row">
            <div class='form-field'>
              <p>Select Delivery type</p>
              <p>
                <input name='type_delivery' type="radio" class="filled-in"
                       id="type_delivery" value='regular'/>
                <label for="type_delivery">Regular</label>
              </p>
              <p>
                <input name='type_delivery' type="radio" class="filled-in"
                       id="type_delivery2" value='express'/>
                <label for="type_delivery2">Express</label>
              </p>
            </div>
            <div class="input-field col s4" style="padding-left:0px">
              <input type="number" id="shipment_weight" name="textfield2" class="required validate" min="1"/>
              <label for="textfield2">Shipment Weight(In Kilograms)</label>
            </div>
          </div>
          <div class="row">
            <div class="col s6"  style="padding-left:0px">
                        <select class="browser-default" id="material_type">
                            <option value="" disabled selected>--Material Type--</option>
                            <option value="plastic" cost="12">Plastic</option>
                            <option value="metal parts" cost="65">Metal Parts</option>
                            <option value="electronics" cost="56">Electornics</option>
                            <option value="glass" cost="44">Glass</option>
                            <option value="house" cost="24">House holds</option>

                        </select>
                    <p style="margin:0px;font-size:10px">Shipment cost may vary based on material</p>
                </div>
          </div>
          <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step" data-feedback="nextStepThreeHandler" data-validator="validateStepThree" id="submit3">REVIEW</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
          </div>
        </div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Review and Place</div>
        <div class="step-content detail-section">
          <div class="row" style="height:300px; overflow-y: auto">
            <div class='form-field'>
              <h5>Recipient Details</h5>
              <div id="recipient_details_section"></div>
            </div>
            <div class='form-field'>
              <h5>Destination</h5>
              <div id="destination_details_section"></div>
            </div>
            <div class='form-field'>
              <h5>Shipment</h5>
              <div id="shipment_details_section"></div>
            </div>
          </div>
          <div>
            Total: Material Cost $<span id="cost_summary"></span> + Delivery Cost $<span id="delivery_cost_summary"></span>  = Total Cost $<span id="total"></span> 
          </div>
          <div id="target_success"></div>
          <div class="step-actions">
            <input type="submit" class="waves-effect waves-dark btn next-step" value="SUBMIT" id="submit_everything"/>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
          </div>
        </div>
      </li>
    </ul>
  </form>
</div>
<style>
  #recipient_details_section p,#destination_details_section p,#shipment_details_section p{
    margin: 0px;
  }
  .detail-section .form-field{
     width:200px;
  }
</style>
@endsection


