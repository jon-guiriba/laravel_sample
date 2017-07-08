@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div class="row">
        <div class="col-md-12">
            <div class="row margin-top-25" style="height: 100px;">
                 <h1 class="text-center">Most Influencial People 2018</h1>
            </div>
            
            <div id="candid-carousel" class="carousel slide col-md-8 col-md-offset-2" data-ride="carousel">
              <!-- Indicators -->

              <div class="carousel-inner" role="listbox">
                @if ($candidates)
                  @foreach($candidates as $candidate)
                    @if ($loop->first)
                      <div class="item active">
                        <img class="first-slide" src="data:{{$candidate->mimeType}};charset=utf-8;base64,{{$candidate->image}}">
                      </div>
                    @else
                      <div class="item">
                        <img class="first-slide" src="data:{{$candidate->mimeType}};charset=utf-8;base64,{{$candidate->image}}">
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
            </div><!-- /.carousel -->
        </div>
    </div>
    <div class="row">
        <span></span>
    </div>
    <div class="row">
      <form action="{{ route('addCandidate') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-12">
            <input type="file" name="image" />
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-success">Upload</button>
          </div>
        </div>
      </form>
    </div>
</div>
@endsection
