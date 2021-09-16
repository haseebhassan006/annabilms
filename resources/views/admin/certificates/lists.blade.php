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

        <section class="card">
            <div class="card-body">
                <form action="/admin/certificates" method="get" class="row mb-0">

                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label class="input-label">Quiz title</label>
                            <input type="text" name="quiz_title" class="form-control" value=""/>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="input-label">Instructor</label>
                            <select name="teacher_ids[]" multiple="multiple" data-search-option="just_teacher_role" class="form-control search-user-select2"
                                    data-placeholder="Search teachers">

                                                                </select>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="input-label">Student</label>
                            <select name="student_ids[]" multiple="multiple" data-search-option="just_student_role" class="form-control search-user-select2"
                                    data-placeholder="Search students">

                                                                </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 d-flex align-items-center justify-content-end">
                        <button type="submit" class="btn btn-primary w-100">Show Results</button>
                    </div>
                </form>
            </div>
        </section>

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                                                        <div class="text-right">
                                <a href="/admin/certificates/excel?" class="btn btn-primary">Export Excel</a>
                            </div>
                                                </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped font-14">
                                <tr>
                                    <th>#</th>
                                    <th class="text-left">Title</th>
                                    <th class="text-left">Student</th>
                                    <th class="text-left">Instructor</th>
                                    <th class="text-center">Grade</th>
                                    <th class="text-center">Date/Time</th>
                                    <th>Action</th>
                                </tr>

                                                                        <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-left">
                                            <span>Elementary Quiz</span>
                                            <small class="d-block text-left">Become a Product Manager)</small>
                                        </td>
                                        <td class="text-left">Cameron Schofield</td>
                                        <td class="text-left">Ricardo dave</td>
                                        <td class="text-center">80</td>
                                        <td class="text-center">14 July 2021</td>
                                        <td>
                                            <a href="/admin/certificates/3/download" class="btn-transparent text-primary" data-toggle="tooltip" title="Download certificate">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-left">
                                            <span>Final Quiz</span>
                                            <small class="d-block text-left">Learn Linux in 5 Days)</small>
                                        </td>
                                        <td class="text-left">Morgan Sullivan</td>
                                        <td class="text-left">Robert Ransdell</td>
                                        <td class="text-center">90</td>
                                        <td class="text-center">14 July 2021</td>
                                        <td>
                                            <a href="/admin/certificates/5/download" class="btn-transparent text-primary" data-toggle="tooltip" title="Download certificate">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-left">
                                            <span>Midterm Quiz</span>
                                            <small class="d-block text-left">Excel from Beginner to Advanced)</small>
                                        </td>
                                        <td class="text-left">Robert B. Gray</td>
                                        <td class="text-left">Robert Ransdell</td>
                                        <td class="text-center">80</td>
                                        <td class="text-center">14 July 2021</td>
                                        <td>
                                            <a href="/admin/certificates/4/download" class="btn-transparent text-primary" data-toggle="tooltip" title="Download certificate">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>

                            </table>
                        </div>
                    </div>

                    <div class="card-footer text-center">

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
