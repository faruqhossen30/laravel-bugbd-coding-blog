@extends('userend.layout.master')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Company</a></li>
        <li class="breadcrumb-item active" aria-current="page">Show</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('company.index')}}" type="button" class="btn btn-inverse-primary btn-icon-text">
                    <i class="btn-icon-prepend" data-feather="list"></i>
                    Company List
                  </a>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Description
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    {{$company->name}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Photo
                                </td>
                                {{-- <td>
                                    {{$jobindustry->photo}}
                                </td> --}}
                                <td><img src="{{ asset('storage/companylogo/' . $company->logo) }}" alt=""></td>

                            </tr>
                            <tr>
                                <td>
                                    Author
                                </td>
                                <td>
                                    {{$company->user_id}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="my-4">
                    <a href="{{route('company.edit', $company->id)}}" type="button" class="btn btn-inverse-success btn-icon-text">
                        <i class="btn-icon-prepend" data-feather="check-square"></i>
                       Edit
                      </a>
                      <form action="{{route('company.destroy', $company->id)}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Sure ! Delete company ?')"class="btn btn-inverse-danger btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('plugin-styles')
<!-- Plugin css import here -->
@endpush

@push('plugin-scripts')
<!-- Plugin js import here -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@push('custom-scripts')
<!-- Custom js here -->
@if (Session::has('create'))
<script>
    const Toast = Swal.mixin({
        toast: true
        , position: 'top-end'
        , showConfirmButton: false
        , timer: 3000
        , timerProgressBar: true
        , didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success'
        , title: 'Company has been created Successfully!'
    })

</script>
@endif
@endpush
