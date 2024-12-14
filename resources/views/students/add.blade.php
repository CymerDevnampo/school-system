@extends('layouts.app')

@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add Students</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Student</a></li>
                            <li class="breadcrumb-item active">Add Students</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form method="post" action="/student-add" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Student Information <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>First Name <span class="login-danger">*</span></label>
                                        <input id="name" name="name" value="{{ old('name') }}" autocomplete="name"
                                            autofocus class="form-control @error('name') is-invalid @enderror"
                                            type="text">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Last Name <span class="login-danger">*</span></label>
                                        <input id="lastname" name="lastname" value="{{ old('lastname') }}"
                                            autocomplete="name" autofocus
                                            class="form-control @error('lastname') is-invalid @enderror" type="text">
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Address </label>
                                        <input id="address" name="address" value="{{ old('address') }}"
                                            autocomplete="name" autofocus
                                            class="form-control @error('address') is-invalid @enderror" type="text">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>E-Mail <span class="login-danger">*</span></label>
                                        <input id="email" name="email" value="{{ old('email') }}" autocomplete="name"
                                            autofocus class="form-control @error('email') is-invalid @enderror"
                                            type="text">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Gender <span class="login-danger">*</span></label>
                                        <select id="gender" name="gender" autocomplete="name" autofocus
                                            class="form-control select @error('gender') is-invalid @enderror">
                                            <option value="" selected> </option>
                                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female
                                            </option>
                                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="Others" {{ old('gender') == 'Others' ? 'selected' : '' }}>Others
                                            </option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    {{-- <div class="form-group local-forms calendar-icon"> --}}
                                    <div class="form-group local-forms">
                                        <label>Date Of Birth <span class="login-danger">*</span></label>
                                        <input id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}"
                                            autocomplete="name" autofocus
                                            class="form-control datetimepicker @error('date_of_birth') is-invalid @enderror"
                                            type="text">
                                        @error('date_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Age </label>
                                        <input id="age" name="age" value="{{ old('age') }}"
                                            autocomplete="name" autofocus
                                            class="form-control @error('age') is-invalid @enderror" type="text">
                                        @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone </label>
                                        <input id="phone" name="phone" value="{{ old('phone') }}"
                                            autocomplete="name" autofocus
                                            class="form-control @error('phone') is-invalid @enderror" type="text">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Religion <span class="login-danger">*</span></label>
                                        <select id="religion" name="religion" autocomplete="name" autofocus
                                            class="form-control select @error('religion') is-invalid @enderror">
                                            <option value="" selected> </option>
                                            <option value="Hindu" {{ old('religion') == 'Hindu' ? 'selected' : '' }}>
                                                Hindu</option>
                                            <option value="Christian"
                                                {{ old('religion') == 'Christian' ? 'selected' : '' }}>Christian</option>
                                            <option value="Others" {{ old('religion') == 'Others' ? 'selected' : '' }}>
                                                Others</option>
                                        </select>
                                        @error('religion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Course <span class="login-danger">*</span></label>
                                        <select id="course" name="course" autocomplete="name" autofocus
                                            class="form-control select @error('course') is-invalid @enderror">
                                            <option value="" selected> </option>
                                            <option value="SHS" {{ old('course') == 'SHS' ? 'selected' : '' }}>SHS
                                            </option>
                                            <option value="BSIT" {{ old('course') == 'BSIT' ? 'selected' : '' }}>BSIT
                                            </option>
                                            <option value="BSED" {{ old('course') == 'BSED' ? 'selected' : '' }}>BSED
                                            </option>
                                            <option value="BSTM" {{ old('course') == 'BSTM' ? 'selected' : '' }}>BSTM
                                            </option>
                                            <option value="BSHM" {{ old('course') == 'BSHM' ? 'selected' : '' }}>BSHM
                                            </option>
                                            <option value="BSCRIM - FB"
                                                {{ old('course') == 'BSCRIM - FB' ? 'selected' : '' }}>BSCRIM - FB</option>
                                            <option value="BSCRIM - FI"
                                                {{ old('course') == 'BSCRIM - FI' ? 'selected' : '' }}>BSCRIM - FI</option>
                                            <option value="BSCRIM - LD"
                                                {{ old('course') == 'BSCRIM - LD' ? 'selected' : '' }}>BSCRIM - LD</option>
                                            <option value="BSCRIM - QD"
                                                {{ old('course') == 'BSCRIM - QD' ? 'selected' : '' }}>BSCRIM - QD</option>
                                        </select>
                                        @error('course')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Year <span class="login-danger">*</span></label>
                                        <select id="year" name="year" autocomplete="name" autofocus
                                            class="form-control select @error('year') is-invalid @enderror">
                                            <option value="" selected> </option>
                                            <option value="1st Year" {{ old('year') == '1st Year' ? 'selected' : '' }}>1st
                                                Year</option>
                                            <option value="2nd Year" {{ old('year') == '2nd Year' ? 'selected' : '' }}>2nd
                                                Year</option>
                                            <option value="3rd Year" {{ old('year') == '3rd Year' ? 'selected' : '' }}>3rd
                                                Year</option>
                                            <option value="4th Year" {{ old('year') == '4th Year' ? 'selected' : '' }}>4th
                                                Year</option>
                                            <option value="Grade 11" {{ old('year') == 'Grade 11' ? 'selected' : '' }}>
                                                Grade 11</option>
                                            <option value="Grade 12" {{ old('year') == 'Grade 12' ? 'selected' : '' }}>
                                                Grade 12</option>
                                        </select>
                                        @error('year')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Section <span class="login-danger">*</span></label>
                                        <select id="section" name="section" value="{{ old('section') }}"
                                            autocomplete="name" autofocus
                                            class="form-control select @error('section') is-invalid @enderror">
                                            <option value="" selected> </option>
                                            <option value="A" {{ old('section') == 'A' ? 'selected' : '' }}>A
                                            </option>
                                            <option value="B" {{ old('section') == 'B' ? 'selected' : '' }}>B
                                            </option>
                                            <option value="C" {{ old('section') == 'C' ? 'selected' : '' }}>C
                                            </option>
                                        </select>
                                        @error('section')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group students-up-files">
                                        <label>Upload Student Photo (150px X 150px)</label>
                                        <div class="uplod">
                                            <label class="file-upload image-upbtn mb-0">
                                                Choose File <input type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary"
                                            onclick="submitForm()">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function submitForm() {
            // Add your form submission logic here

            // Assuming the form submission is successful, display a SweetAlert
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Added Successfully.',
            });
        }
    </script>
@endpush
