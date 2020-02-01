@extends('admin.app')
@section('maincontect')
    <div class="row">

        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Website Details</h3>
                        </div>
                        <div class="col-4 text-right control">
                            @if(empty($details))
                                <button  class="btn btn-sm btn-primary" id="btnAddDetails">Add Details</button>
                            @elseif($details->count() == 1)
                                <button  class="btn btn-sm btn-primary" id="editDetails">Edit Details</button>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">

                        <h6 class="heading-small text-muted mb-4">Website Information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Full Name</label>
                                        <input type="text" id="fullName" class="form-control form-control-alternative"  @if(empty($details))) placeholder="Full Name"  @elseif($details->count() == 1) value="{{$details->name}}" @endif disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Designation</label>
                                        <input type="text" id="Designation" class="form-control form-control-alternative" @if(empty($details))) placeholder="Designation" @elseif($details->count() == 1) value="{{$details->post}}" @endif disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">First name</label>
                                        <input type="text" id="firstName" class="form-control form-control-alternative" @if(empty($details))) placeholder="First name" @elseif($details->count() == 1) value="{{$details->firstname}}" @endif disabled >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Last name</label>
                                        <input type="text" id="lastName" class="form-control form-control-alternative" @if(empty($details))) placeholder="Last name"  @elseif($details->count() == 1) value="{{$details->lastname}}" @endif disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Nationality </label>
                                        <input type="text" id="Nationality" class="form-control form-control-alternative" @if(empty($details))) placeholder="Nationality"  @elseif($details->count() == 1) value="{{$details->nationality}}" @endif disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Experience</label>
                                        <input type="text" id="Experience" class="form-control form-control-alternative" @if(empty($details))) placeholder="Experience (ex: 2 years)"  @elseif($details->count() == 1) value="{{$details->experience}}" @endif   disabled>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Phone</label>
                                        <input type="text" id="Phone" class="form-control form-control-alternative" @if(empty($details))) placeholder="Phone(ex: +8801521458894)" @elseif($details->count() == 1) value="{{$details->phone}}" @endif disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Language</label>
                                        <input type="text" id="Language" class="form-control form-control-alternative" @if(empty($details))) placeholder="Language" @elseif($details->count() == 1) value="{{$details->experience}}" @endif disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Date Of Birth</label>
                                        <input type="date" id="dob" class="form-control form-control-alternative" @if(empty($details))) placeholder="Date Of Birth"  @elseif($details->count() == 1) value="{{$details->dob}}" @endif   disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Status</label>
                                        <select class="form-control form-control-alternative" id="status" disabled @if(empty($details)))  @elseif($details->count() == 1) value="{{$details->status}}" @endif>
                                            <option value="available">Available</option>
                                            <option value="Vacation">Vacation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Address</label>
                                        <input type="text" id="Address" class="form-control form-control-alternative" disabled @if(empty($details))) placeholder="Address" @elseif($details->count() == 1) value="{{$details->address}} @endif">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">About me</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea rows="4" class="form-control form-control-alternative" id="aboutMe" disabled @if(empty($details))  placeholder="A few words about you ..." >@elseif($details->count() == 1)>{{$details->description}} @endif</textarea>
                            </div>
                        </div>

                        <hr class="my-4" />
                        <div style="text-align: center" class="addElement">

                        </div>
                    {{csrf_field()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
{{--    <script src="{{asset('admin/assets/js/details.js')}}"></script>--}}
    <script>
        function inputTableFalse() {
            $('#fullName').prop('disabled',false);
            $('#Designation').prop('disabled',false);
            $('#firstName').prop('disabled',false);
            $('#lastName').prop('disabled',false);
            $('#Nationality').prop('disabled',false);
            $('#Experience').prop('disabled',false);
            $('#Phone').prop('disabled',false);
            $('#dob').prop('disabled',false);
            $('#status').prop('disabled',false);
            $('#Address').prop('disabled',false);
            $('#aboutMe').prop('disabled',false);
            $('#Language').prop('disabled',false);
        }
        function inputDisableTrue(){
            $('#fullName').prop('disabled',true);
            $('#Designation').prop('disabled',true);
            $('#firstName').prop('disabled',true);
            $('#lastName').prop('disabled',true);
            $('#Nationality').prop('disabled',true);
            $('#Experience').prop('disabled',true);
            $('#Phone').prop('disabled',true);
            $('#dob').prop('disabled',true);
            $('#status').prop('disabled',true);
            $('#Address').prop('disabled',true);
            $('#aboutMe').prop('disabled',true);
            $('#Language').prop('disabled',true);
        }

        $(document).ready(function () {
            $(document).on('click','#btnAddDetails',function () {
                inputTableFalse();
                $('.addElement').append('<button type="button" class="btn btn-sm btn-primary" id="btnSave">Save</button>');
                $('#btnAddDetails').remove();

            });
            $(document).on('click','#btnSave',function () {
                var fullName = $('#fullName').val();
                var Designation = $('#Designation').val();
                var firstName =  $('#firstName').val();
                var lastName=  $('#lastName').val();
                var Nationality=  $('#Nationality').val();
                var Experience=  $('#Experience').val();
                var Phone  = $('#Phone').val();
                var dob=   $('#dob').val();
                var status=  $('#status').val();
                var Address=  $('#Address').val();
                var aboutMe=  $('#aboutMe').val();
                var Language=  $('#Language').val();
                var data = {
                    'fullName':fullName,
                    'Designation': Designation,
                    'firstName': firstName,
                    'lastName': lastName,
                    'Nationality': Nationality,
                    'Experience': Experience,
                    'Phone': Phone,
                    'dob': dob,
                    'status': status,
                    'Address': Address,
                    'aboutMe': aboutMe,
                    'Language': Language,

                };

                $.ajax({
                    url: '{{route('admin.details.add')}}',
                    method: 'POST',
                    data: {'data': data, '_token': $('input[name=_token]').val()},
                    success:function (data) {
                        $('.shadow').load(location.href + '.shadow');
                        inputDisableTrue();
                        $('#btnSave').remove();

                    }
                });
            })
        });
        $(document).on('click','#editDetails',function (event) {
            $('#fullName').prop('disabled',false);
            $('#Designation').prop('disabled',false);
            $('#firstName').prop('disabled',false);
            $('#lastName').prop('disabled',false);
            $('#Nationality').prop('disabled',false);
            $('#Experience').prop('disabled',false);
            $('#Phone').prop('disabled',false);
            $('#dob').prop('disabled',false);
            $('#status').prop('disabled',false);
            $('#Address').prop('disabled',false);
            $('#aboutMe').prop('disabled',false);
            $('#Language').prop('disabled',false);
            $('.addElement').append('<button type="button" class="btn btn-sm btn-primary" id="btnUpdate">Update</button>');
            $('#editDetails').remove();
        });
        $(document).on('click','#btnUpdate',function (event) {

        });
    </script>
@endsection
