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

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="/admin/noticeboards/store" class="form-horizontal form-bordered mt-4">
                             {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label" for="inputDefault">Title</label>
                                            <input type="text" name="title" class="form-control " value="">
                                            <div class="invalid-feedback"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Type</label>
                                            <select name="type" id="typeSelect" class="form-control ">
                                                <option value="" selected disabled></option>

                                                <option value="all" >All</option>
                                                                                            <option value="organizations" >All Organizations</option>
                                                                                            <option value="students" >All Students</option>
                                                                                            <option value="instructors" >All Instructors</option>
                                                                                            <option value="students_and_instructors" >Students &amp; Instructors</option>
                                                                                    </select>
                                            <div class="invalid-feedback"></div>
                                         <div class="text-muted text-small mt-1">The notice will be displayed on the noticeboard of these user types.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Message</label>
                                    <textarea name="message" class="summernote form-control text-left  "></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>


                                <div class="form-group">
                                    <div>
                                        <button class="btn btn-primary" type="submit">Send a notice</button>
                                    </div>
                                </div>

                            </form>






                        </div>



                    </div>
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





@endsection

@push('scripts_bottom')

@endpush
