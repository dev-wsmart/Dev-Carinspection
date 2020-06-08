@extends('layouts.admin_layout')
@section('title', 'Page Admin')
@section('content')

<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:3%;">

<div class="alert alert-danger" role="alert">
<h4> Dashboard </h4>
</div>

<div class="row">

<div class="col-md-3">
<div class="alert alert-danger" role="alert">
 
  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
     Profile Views</p>
</div> 
</div>

<div class="col-md-3">
<div class="alert alert-primary" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
    Facebook Likes</p>
</div>
</div>

<div class="col-md-3">
<div class="alert alert-success" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
    Facebook Likes</p>
</div>
</div>

<div class="col-md-3">
<div class="alert alert-warning" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
    Facebook Likes</p>
</div>
</div>
 </div>

<div class="row">

<div class="col-md-4">
  <div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>Product sales</strong> <br>
     You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>

<div class="col-md-4">
  <div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>Product sales history</strong> <br>
     You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>

<div class="col-md-4">
  <div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>Access history</strong> <br>
     You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>

</div>
<div class="col-md-9">
<div class="alert alert-secondary alert-dismissible fade show" role="alert">สิถิติ</div>

<br><br>

                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>

</div>



</div>


@endsection
