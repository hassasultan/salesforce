@extends('admin.layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="progress-container bg-white rounded-30 p-xxl-5 p-xl-3 p-3 mb-3">
                <h2 class="primary_title text-black mb-4">Home Page Settings</h2>
                <div class="row row-cols-lg-3 row-cols-sm-1">
                    <div class="col-12 mb-md-0">

                        <form class="needs-validation" method="post" action="{{ route('admin.home.setting') }}" novalidate enctype="multipart/form-data">
                            @csrf
                            <div class="card p-3 mb-3">
                                <h4>Slider Information</h4>
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Slider Heading</label>
                                        <input type="text" class="form-control" name="slider_heading" id="validationTooltip02"
                                            placeholder="Place Heading" required value="{{ old('slider_heading',$setting?->slider_heading) }}">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Slider Image</label>
                                        <input type="file" class="form-control" name="slider_image" id="validationTooltip02icon"
                                            placeholder="Icon" required value="{{ old('slider_image') }}">
                                            <img src="{{ asset('storage/'.$setting?->slider_image) }}" width="150px" height="150px"/>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Slider Description</label>
                                        <textarea class="form-control " name="slider_description" id="exampleFormControlTextarea1" rows="3" placeholder="Description">{{ old('slider_description',$setting?->slider_description) }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-3 mb-3">
                                <h4>Content Information</h4>
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Content Left Heading</label>
                                        <input type="text" class="form-control" name="content_left_heading" id="validationTooltip02"
                                            placeholder="Place Heading" required value="{{ old('content_left_heading',$setting?->content_left_heading) }}">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Content Left Image</label>
                                        <input type="file" class="form-control" name="content_left_image" id="validationTooltip02icon"
                                            placeholder="Icon" required value="{{ old('content_left_image') }}">
                                            <img src="{{ asset('storage/'.$setting?->content_left_image) }}" width="150px" height="150px"/>

                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Content Left Description</label>
                                        <textarea class="form-control " name="content_left_description" id="exampleFormControlTextarea1" rows="3" placeholder="Description">{{ old('content_left_description',$setting?->content_left_description) }}</textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Content Right Heading</label>
                                        <input type="text" class="form-control" name="content_right_heading" id="validationTooltip02"
                                            placeholder="Place Heading" required value="{{ old('content_right_heading',$setting?->content_right_heading) }}">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Content Right Image</label>
                                        <input type="file" class="form-control" name="content_right_image" id="validationTooltip02icon"
                                            placeholder="Icon" required value="{{ old('content_right_image') }}">
                                            <img src="{{ asset('storage/'.$setting?->content_right_image) }}" width="150px" height="150px"/>

                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationTooltip02">Content Right Description</label>
                                        <textarea class="form-control " name="content_right_description" id="exampleFormControlTextarea1" rows="3" placeholder="Description">{{ old('content_right_description',$setting?->content_right_description) }}</textarea>
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
