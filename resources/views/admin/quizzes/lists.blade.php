@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Quizzes</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/admin/">Dashboard</a>
            </div>
            <div class="breadcrumb-item">Quizzes</div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Quizzes</h4>
                    </div>
                    <div class="card-body">
                      {{  $totalQuizzes }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-clipboard-check"></i></div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Active Quizzes</h4>
                    </div>
                    <div class="card-body">
                        {{  $totalActiveQuizzes }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-users"></i></div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Students</h4>
                    </div>
                    <div class="card-body">
                   {{ $totalStudents }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-user-check"></i></div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Passed Students</h4>
                    </div>
                    <div class="card-body">
                     {{ $totalPassedStudents }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-body">

        <section class="card">
            <div class="card-body">
                <form action="/admin/quizzes" method="get" class="row mb-0">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="input-label">Search</label>
                            <input type="text" class="form-control" name="title" value="">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="input-label">Start Date</label>
                            <div class="input-group">
                                <input type="date" id="fsdate" class="text-center form-control" name="from" value="" placeholder="Start Date">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="input-label">End Date</label>
                            <div class="input-group">
                                <input type="date" id="lsdate" class="text-center form-control" name="to" value="" placeholder="End Date">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="input-label">Filters</label>
                            <select name="sort" data-plugin-selectTwo class="form-control populate">
                                <option value="">Filter Type</option>
                                <option value="have_certificate" >Quizzes with Certificate</option>
                                <option value="students_count_asc" >Students - Ascending</option>
                                <option value="students_count_desc" >Students - Descending</option>
                                <option value="passed_count_asc" >Passed Students - Ascending</option>
                                <option value="passed_count_desc" >Passed Students - Descending</option>
                                <option value="grade_avg_asc" >Average Grade - Ascending</option>
                                <option value="grade_avg_desc" >Average Grade - Descending</option>
                                <option value="created_at_asc" >Created Date - Ascending</option>
                                <option value="created_at_desc" >Created Date - Descending</option>
                            </select>
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
                            <label class="input-label">Class</label>
                            <select name="webinar_ids[]" multiple="multiple" class="form-control search-webinar-select2"
                                    data-placeholder="Search classes">

                                                                </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="input-label">Status</label>
                            <select name="statue" data-plugin-selectTwo class="form-control populate">
                                <option value="">All Statuses</option>
                                <option value="active" >Active</option>
                                <option value="inactive" >Inactive</option>
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
                                <a href="/admin/quizzes/excel?" class="btn btn-primary">Export Excel</a>
                            </div>
                                                </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped font-14">
                                <tr>
                                    <th class="text-left">Title</th>
                                    <th class="text-left">Instructor</th>
                                    <th class="text-center">Questions</th>
                                    <th class="text-center">Students</th>
                                    <th class="text-center">Average Grade</th>
                                    <th class="text-center">Certificate</th>
                                    <th class="text-center">Status</th>
                                    <th>Actions</th>
                                </tr>
@foreach($quizzes as $quizz)
                                <tr>
                                <td>
                            <span>{{ $quizz->title }}</span>
                                                                                                <small class="d-block text-left text-primary">Become a Product Manager</small>
                                                                                        </td>

                                        <td class="text-left">Ricardo dave</td>

                                        <td class="text-center">
                                            5
                                        </td>

                                        <td class="text-center">
                                            <span>1</span>
                                            <span class="d-block text-primary font-12">(Passed: 1)</span>
                                        </td>

                                        <td class="text-center">80 </td>

                                        <td class="text-center">
                                                                                                <a class="text-success fas fa-check"></a>
                                                                                        </td>

                                        <td class="text-center">
                                                                                                <span class="text-success">Active</span>
                                                                                        </td>

                                        <td>
                                                                                                <a href="/admin/quizzes/28/results" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" title="Results">
                                                    <i class="fa fa-poll fa-1x"></i>
                                                </a>

                                                                                                <a href="/admin/quizzes/28/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                                                                <button class=" btn-transparent text-primary  btn-sm"
    data-confirm="Are you sure? | Do you want to continue?"
    data-confirm-href="/admin/quizzes/28/delete"
    data-confirm-text-yes="Yes"
    data-confirm-text-cancel="Cancel"
            data-toggle="tooltip" data-placement="top" title="Delete"
>
        <i class="fa fa-times" aria-hidden="true"></i>
</button>
                                                                                        </td>
                                    </tr>
@endforeach




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





@endsection

@push('scripts_bottom')

@endpush
