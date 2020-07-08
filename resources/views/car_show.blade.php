@extends('layouts.admin_layout')
@section('title', 'Inspection Report')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">

<script>
        // search ***************
        // $(document).ready(function(){
        // $("#search_car").on("keyup", function() {
        //     var value = $(this).val().toLowerCase();
        //     $("#search a").filter(function() {
        //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //      });
        // });
        // });

</script>

    <div class="row">
        {{-- @if (session('status'))
            {{ session('status') }}
        @endif --}}
        <div class="col-12">
            <h1 class="title">Car Show</h1>
        </div>
        <hr noshade>
    </div>
    <div class="contenner" style="margin-left:3%;">
        <div class="row">
            <div class="col-md-4" ></div>
            <div class="col-md-4 indent">
                <button class="minimal-indent" class="img-thumbnail">
                    รูปด้านหน้ารถยนต์
                </button>
            </div>
        </div>
        <div class="rew"><br></div>
        <a href="">
        <div class="row">
            <div class="col-md-1" ></div>
            <div class="col-md-9">
                <img src="{{ url('images/car1.jpg') }}" height="auto" width="100%" class="img-thumbnail" style="border: 20px inset #a38175;">
            </div>
        </div>
        </a>
    </div><br><br>
    {{-- <div class="row">
        <div class="col-4"></div>
        <div class="col-4">{{ $data->onEachSide(1)->links() }}</div>
        <div class="col-4"></div>
    </div> --}}

</div>

@endsection
