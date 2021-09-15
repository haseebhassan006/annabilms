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


            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-address-book"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Meetings</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalAppointments }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-user-clock"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Open Meetings</h4>
                            </div>
                            <div class="card-body">
                                {{ $openAppointments }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Finished Meetings</h4>
                            </div>
                            <div class="card-body">
                                {{ $finishedAppointments }}
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
                                <h4>Total Reservatores</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalConsultants }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-body">
                <section class="card">
                    <div class="card-body">
                        <form method="get" class="mb-0">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="input-label">Search</label>
                                        <input type="text" class="form-control" name="search" value="">
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="input-label">Start Date</label>
                                        <div class="input-group">
                                            <input type="date" id="from" class="text-center form-control" name="from" value="" placeholder="Start Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="input-label">End Date</label>
                                        <div class="input-group">
                                            <input type="date" id="to" class="text-center form-control" name="to" value="" placeholder="End Date">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="input-label">Status</label>
                                        <select name="status" data-plugin-selectTwo class="form-control populate">
                                            <option value="">All Statuses</option>
                                            <option value="open" >Open</option>
                                            <option value="finished" >Finished</option>
                                            <option value="canceled" >Canceled</option>
                                            <option value="pending" >Pending</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="input-label">Filters</label>
                                        <select name="sort" data-plugin-selectTwo class="form-control populate">
                                            <option value="">Filter Type</option>
                                            <option value="has_discount" >Discounted Meetings</option>
                                            <option value="free" >Free Meetings</option>
                                            <option value="amount_asc" >Amount - Ascending</option>
                                            <option value="amount_desc" >Amount - Descending</option>
                                            <option value="date_asc" >Date - Ascending</option>
                                            <option value="date_desc" >Date - Descending</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="input-label">Consultant</label>

                                        <select name="consultant_ids[]" multiple="multiple" data-search-option="consultants" class="form-control search-user-select2"
                                                data-placeholder="Search Consultants">

                                                                                </select>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="input-label">Reservatore</label>

                                        <select name="user_ids[]" multiple="multiple" class="form-control search-user-select2"
                                                data-placeholder="Search Reservatores">

                                                                                </select>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group mt-1">
                                        <label class="input-label mb-4"> </label>
                                        <input type="submit" class="text-center btn btn-primary w-100" value="Show Results">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>

                <section class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped text-center font-14">

                                <tr>
                                    <th class="text-left">Consultant</th>
                                    <th class="text-left">Reservatore</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                @foreach($appointments as $appointment)

                                                                <tr>
                                        <td class="text-left">
                                            <a href="/users/870/profile" target="_blank">{{ $appointment->user->full_name }}</a>
                                        </td>

                                        <td class="text-left">
                                            <a href="/users/995/profile" target="_blank">{{ $appointment->meeting->creator->full_name }}</a>
                                        </td>

                                        <td>
                                            <div class="media-body">
                                                <div class=" mt-0 mb-1 font-weight-bold">${{ $appointment->paid_amount }}</div>
                                            </div>
                                        </td>

                                        <td class="text-center">{{ $appointment->locked_at }}</td>

                                        <td class="text-center">{{ dateTimeFormat($appointment->created_at, 'Y M j | H:i') }}</td>

                                        <td class="text-center">
                                            <span class="text-danger">{{ $appointment->status }}</span>
                                        </td>

                                        <td class="text-center" width="50">
                                            <input type="hidden" class="js-meeting-password" value="">
                                            <input type="hidden" class="js-meeting-link" value="">


                        <button type="button" data-reserve-id="{{ $appointment->id }}" class="js-send-reminder btn-transparent text-primary" data-toggle="tooltip" data-placement="top" title="Send Reminder"><i class="fa fa-bell" aria-hidden="true"></i></button>

                                                                                                                                                                    </td>
                                    </tr>
                                    @endforeach


                            </table>
                        </div>
                    </div>

                    <div class="card-footer text-center">

                    </div>
                </section>
            </div>
        </section>



        <div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="contactMessageLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactMessageLabel">Join Meeting</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                    <label class="input-label">admin/main.url</label>
                                    <input type="text" name="link" class="form-control" disabled/>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label class="input-label">Password</label>
                                    <input type="text" name="password" class="form-control" disabled/>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="" target="_blank" class="js-join-btn btn btn-primary">Join</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="sendReminderModal" tabindex="-1" aria-labelledby="contactMessageLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactMessageLabel">Send Reminder</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <strong>Consultant:</strong>
                            <span class="js-consultant"></span>
                        </div>

                        <div class="mt-2">
                            <strong>Reservatore:</strong>
                            <span class="js-reservatore"></span>
                        </div>

                        <div class="mt-2">
                            <strong>Reminder Title::</strong>
                            <span class="js-title"></span>
                        </div>

                        <div class="mt-2">
                            <strong>Reminder Message::</strong>
                            <span class="js-message"></span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="" class="js-send-reminder-btn btn btn-primary">Send</a>
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





@endsection

@push('scripts_bottom')

@endpush
