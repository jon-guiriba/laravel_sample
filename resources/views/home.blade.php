@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row margin-top-25" style="height: 100px;">
          <div class="col-md-12">
            <h1 class="text-center">Most Influencial People 2018</h1>
          </div>
        </div>
            
        <div class="row" >
          <div class="col-md-12" >
            <div id="candid-carousel" class="carousel slide col-md-8 col-md-offset-2" data-ride="carousel" style="height:600px;">

              <div class="carousel-inner" role="listbox">
                  @if ($candidates)
                    @foreach($candidates as $candidate)
                      @if ($loop->first)
                        <div class="item active">
                          <img class="first-slide" src="data:{{$candidate->mimeType}};charset=utf-8;base64,{{$candidate->image}}">
                            <div class="text-center">
                              <span class="center-block">{{$candidate->name}}</span>
                              <span class="center-block">{{$candidate->description}}</span>
                            </div>
                        </div>
                      @else
                        <div class="item">
                          <img class="first-slide" src="data:{{$candidate->mimeType}};charset=utf-8;base64,{{$candidate->image}}">
                            <div class="text-center">
                              <span class="center-block">{{$candidate->name}}</span>
                              <span class="center-block">{{$candidate->description}}</span>
                            </div>
                        </div>
                      @endif

                    @endforeach
                  @endif
                </div>
                <a class="left carousel-control" href="#candid-carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#candid-carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
          </div>
        </div>

    <div class="row margin-top-40 text-center">
      <div class="col-md-3 col-centered">
          <form action="{{ route('addCandidate') }}" enctype="multipart/form-data" method="POST">
          {{ csrf_field() }}
            
            <input class="center-block form-control" type="text" name="name" placeholder="Name"/>
            <textarea class="center-block margin-top-25 form-control" name="description" rows="5" cols="30" placeholder="Description" style="resize: none;"></textarea>
            <input class="margin-left-40 margin-top-25 " type="file" name="image" />
            <button class="btn btn-success center-block margin-top-25" type="submit">Upload</button>
          </form>
        </div>
      </div>
    </div>
@endsection
