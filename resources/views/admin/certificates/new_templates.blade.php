@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $pageTitle }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ $pageTitle}}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <div class="form-group row">
                        <p class="col">Student : [student] </p>

                        <p class="col">Course : [course] </p>

                        <p class="col">Grade : [grade] </p>

                        <p class="col">Certificate ID : [certificate_id] </p>
                    </div>

                    <hr class="my-4">

                    <form method="post" action="" id="templateForm" class="form-horizontal form-bordered">
                        <input type="hidden" name="_token" value="NdRbM99qsTg5cSWSGmI5deISWyyLlnsaR3u6zWoS">

                        <div class="form-group">
                            <label class="control-label" for="inputDefault">Title</label>
                            <input type="text" name="title" class="form-control " value="">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="input-label">Background Image</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="input-group-text admin-file-manager " data-input="image" data-preview="holder">
                                        <i class="fa fa-upload"></i>
                                    </button>
                                </div>
                                <input type="text" name="image" id="image" value="" class="form-control "/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="row">
                            <dov class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="inputDefault">Position X</label>
                                    <input type="text" name="position_x" class="form-control " value="">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </dov>
                            <dov class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="inputDefault">Position Y</label>
                                    <input type="text" name="position_y" class="form-control " value="">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </dov>

                            <dov class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="inputDefault">Font Size</label>
                                    <input type="text" name="font_size" class="form-control " value="">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </dov>
                            <dov class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="inputDefault">Text Color</label>
                                    <input type="text" name="text_color" class="form-control " value="">
                                    <div class="invalid-feedback"></div>
                                    <div>Example: #e1e1e1</div>
                                </div>
                            </dov>
                        </div>


                        <div class="form-group ">
                            <label class="control-label" for="inputDefault">Text</label>
                            <textarea class="form-control text-left h-auto " dir="ltr" rows="6" name="body"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group custom-switches-stacked">
                            <label class="custom-switch">
                                <input type="hidden" name="status" value="draft">
                                <input type="checkbox" id="status" name="status" value="publish"  class="custom-switch-input"/>
                                <span class="custom-switch-indicator"></span>
                                <label class="custom-switch-description mb-0 cursor-pointer" for="status">Active</label>
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-success pull-left" id="submiter" type="button" data-action="/admin/certificates/templates/store">Save</button>
                                <button class="btn btn-info pull-left" id="preview" type="button" data-action="/admin/certificates/templates/preview">Preview</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

        </div>
    </div>

    <div class="modal fade" id="fileViewModal" tabindex="-1" aria-labelledby="fileViewModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <img src="" class="w-100" height="350px" alt="">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>
    </section>





@endsection

@push('scripts_bottom')

@endpush
