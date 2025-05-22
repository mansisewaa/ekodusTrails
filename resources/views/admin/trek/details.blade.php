@extends('layouts.admin.master')

@section('content')
    <div class="container">
    <div class="page-inner">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Details - {{$trek_details->trek->name}}</h3>
                        <a href="{{route('trek.index')}}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            @if (session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                            @endif
                            @if (session('error'))
                            <div class="alert alert-danger mt-3">
                                {{ session('error') }}
                            </div>
                            @endif
                            @if (session('warning'))
                            <div class="alert alert-warning mt-3">
                                {{ session('warning') }}
                            </div>
                            @endif
                            <form action="{{ route('trek.details.store',$trek_details->trek_id)}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="overview">Overview</label>
                                    <textarea name="overview" id="overview" class="form-control" rows="3" placeholder="Enter overview">  {!! $trek_details->overview !!} </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="highlights">Highlights</label>
                                    <textarea name="highlights" id="highlights" class="form-control" rows="3" placeholder="Enter highlights">  {!! $trek_details->highlights !!} </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="itinerary">Itinerary</label>
                                    <textarea name="itinerary" id="itinerary" class="form-control" rows="3" placeholder="Enter itinerary">  {!! $trek_details->itinerary !!} </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="includes">Includes</label>
                                    <textarea name="includes" id="includes" class="form-control" rows="3" placeholder="Enter included items"> {!! $trek_details->includes !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="excludes">Excludes</label>
                                    <textarea name="excludes" id="excludes" class="form-control" rows="3" placeholder="Enter excluded items">  {!! $trek_details->excludes !!} </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="reviews">Reviews</label>
                                    <textarea name="reviews" id="reviews" class="form-control" rows="3" placeholder="Enter reviews"> {!! $trek_details->reviews !!}</textarea>
                                </div>
                                
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('script')
<script src={{asset('ckeditor/ckeditor.js')}}></script>
<script>
    const fields = ['overview', 'highlights', 'itinerary', 'includes', 'excludes', 'reviews'];

    fields.forEach(field => {
        CKEDITOR.replace(field, {
            filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token() ]) }}",
            customConfig: "{{ asset('ckeditor/config.js') }}",
            filebrowserUploadMethod: 'form',
            allowedContent: true,
            height: '200px',
            width: '100%',
            // removePlugins: 'sourcearea'
        });
    });
</script>
@endsection