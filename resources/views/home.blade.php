@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row margin-top-25" style="height: 100px;">
          <div class="col-md-12">
            <h1 class="text-center">Most Influencial People 2018</h1>
          </div>
        </div>
            
        <div class="row text-center" >
          <div class="col-md-6 col-centered" style="margin-left: 4%;">
            <div id="candid-carousel" class="carousel slide col-md-8" data-ride="carousel" style="height:600px; width:680px;">

              <div class="carousel-inner" role="listbox">
                  @if ($candidates)
                    @foreach($candidates as $candidate)
                      @if ($loop->first)
                        <div class="item active">
                          <img class="first-slide" src="data:{{$candidate->mimeType}};charset=utf-8;base64,{{$candidate->image}}">
                            <div class="text-center">
                              <span class="center-block fs-35">{{$candidate->name}}</span>
                              <span class="center-block wordwrap fs-25 margin-top-25" style="width:500px;">{{$candidate->description}}</span>
                            </div>
                        </div>
                      @else
                        <div class="item">
                          <img class="first-slide" src="data:{{$candidate->mimeType}};charset=utf-8;base64,{{$candidate->image}}">
                            <div class="text-center">
                              <span class="center-block fs-35">{{$candidate->name}}</span>
                              <span class="center-block wordwrap fs-25 margin-top-25" style="width:500px;">{{$candidate->description}}</span>
                            </div>
                        </div>
                      @endif

                    @endforeach
                  @endif
                </div>
                <a class="left carousel-control" href="#candid-carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left black" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#candid-carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right black" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
          </div>
        </div>

    <div class="row padding-top-40 padding-bottom-40 text-center bg-info">
      <div class="col-md-3 col-centered border-1">
            <h1 class="text-center "> Submit a candidate! </h1>
          <form action="{{ route('addCandidate') }}" enctype="multipart/form-data" method="POST">
          {{ csrf_field() }}
            <input class="center-block form-control" type="text" name="name" placeholder="Name"/>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <textarea class="center-block margin-top-25 form-control" name="description" rows="5" cols="30" placeholder="Description" style="resize: none;"></textarea>
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
            <input class="margin-left-40 margin-top-25 " type="file" name="image" />
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
            <button class="btn btn-success center-block margin-top-25" type="submit">Upload</button>
          </form>
        </div>
      </div>
    </div>
@endsection
