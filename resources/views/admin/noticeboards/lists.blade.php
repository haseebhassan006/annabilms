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

        <div class="card-body">
            <form class="mb-0">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="input-label">Search</label>
                            <input type="text" class="form-control" name="search" value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="input-label">Start Date</label>
                            <div class="input-group">
                                <input type="date" id="fsdate" class="text-center form-control" name="from" value="" placeholder="Start Date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="input-label">End Date</label>
                            <div class="input-group">
                                <input type="date" id="lsdate" class="text-center form-control" name="to" value="" placeholder="End Date">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="input-label">Sender</label>
                            <select name="sender" data-plugin-selectTwo class="form-control populate">
                                <option value="">Select Sender</option>
                                <option value="admin" >Admin</option>
                                <option value="organizations" >Organizations</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="input-label">Type</label>
                            <select name="type" data-plugin-selectTwo class="form-control populate">
                                <option value="">All Types</option>

                                                                            <option value="organizations" >public.organizations</option>
                                                                            <option value="students" >Students</option>
                                                                            <option value="instructors" >Instructors</option>
                                                                            <option value="students_and_instructors" >Students and Instructors</option>
                                                                    </select>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group mt-1">
                            <label class="input-label mb-4"> </label>
                            <input type="submit" class="text-center btn btn-primary w-100" value="Show Results">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <div class="card">
        <div class="card-header">
                                    <div class="text-right">
                    <a href="/admin/noticeboards/send" class="btn btn-primary">Send a notice</a>
                </div>
                            </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped font-14" id="datatable-basic">

                    <tr>
                        <th class="text-left">Title</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Message</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Created Date</th>
                        <th>Actions</th>
                    </tr>
                            @foreach($noticeboards as $noticeboard)
                                                    <tr>
                            <td class="text-left">{{ $noticeboard->title }}</td>
                            <td class="text-center">{{ $noticeboard->sender }}</td>

                            <td class="text-center">
                                <button type="button" data-item-id="{{ $noticeboard->id }}" class="js-show-description btn btn-outline-primary">Show</button>
                                <input type="hidden" value="{{ $noticeboard->message }}">
                            </td>
                            <td class="text-center">{{ $noticeboard->type }}</td>

                            <td class="text-center">{{ $noticeboard->created_at }}</td>

                            <td width="100">
                            <a href="/admin/noticeboards/{{ $noticeboard->id }}/edit" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="fa fa-edit"></i>
                            </a>

                <button class="btn-transparent text-primary " data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/noticeboards/{{ $noticeboard->id }}/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="Delete">
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
</section>

<!-- Modal -->
<div class="modal fade" id="notificationMessageModal" tabindex="-1" aria-labelledby="notificationMessageLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="notificationMessageLabel">Contact Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>

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
