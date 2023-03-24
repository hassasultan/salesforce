@extends('admin.layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="progress-container bg-white rounded-30 p-xxl-5 p-xl-3 p-3 mb-3">
                <h2 class="primary_title text-black mb-4">About Page Settings</h2>
                <div class="row row-cols-lg-3 row-cols-sm-1">
                    <div class="col-12 mb-md-0">
                        <form class="needs-validation" method="post" action="{{ route('admin.about.setting') }}" novalidate enctype="multipart/form-data">
                            @csrf
                            <div class="card p-3 mb-3">
                                <h4>Slider Information</h4>
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Slider Heading</label>
                                        <input type="text" class="form-control" name="heading" id="validationTooltip02"
                                            placeholder="Place Heading" required value="{{ old('heading',$setting?->heading) }}">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Slider Image</label>
                                        <input type="file" class="form-control" name="banner" id="validationTooltip02icon"
                                            placeholder="Icon" required value="{{ old('banner') }}">
                                            <img src="{{ asset('storage/'.$setting?->banner) }}" width="150px" height="150px"/>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Slider Description</label>
                                        <textarea class="form-control summernote" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Description">{{ old('description',$setting?->description) }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-3 mb-3">
                                <h4>Content Information</h4>
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Content Heading Two</label>
                                        <input type="text" class="form-control" name="heading_two" id="validationTooltip02"
                                            placeholder="Place Heading" required value="{{ old('heading_two',$setting?->heading_two) }}">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Content Tag Line</label>
                                        <input type="text" class="form-control" name="tagline" id="validationTooltip056"
                                            placeholder="Place Heading" required value="{{ old('tagline',$setting?->tagline) }}">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Our Mission</label>
                                        <textarea class="form-control summernote" name="mission" id="exampleFormControlTextarea1" rows="3" placeholder="Description">{{ old('mission',$setting?->mission) }}</textarea>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Our Vision</label>
                                        <textarea class="form-control summernote" name="vision" id="exampleFormControlTextarea1" rows="3" placeholder="Description">{{ old('vision',$setting?->vision) }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('bottom_script')

@endsection
