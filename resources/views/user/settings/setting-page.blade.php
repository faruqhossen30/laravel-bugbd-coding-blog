@extends('userend.layout.master')

@push('plugin-styles')
  <!-- Plugin css import here -->
@endpush

@section('content')
  <!-- Page content here -->
  <div class="card">
    <div class="card-body">
        <div class="example">
            <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" data-bs-target="#line-home" role="tab" aria-controls="line-home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" data-bs-target="#line-profile" role="tab" aria-controls="line-profile" aria-selected="false">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" data-bs-target="#line-contact" role="tab" aria-controls="line-contact" aria-selected="false">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" id="disabled-line-tab" data-bs-toggle="tab" data-bs-target="#line-disabled" role="tab" aria-controls="line-disabled" aria-selected="false">Disabled</a>
              </li>
            </ul>
            <div class="tab-content mt-3" id="lineTabContent">
              <div class="tab-pane fade show active" id="line-home" role="tabpanel" aria-labelledby="home-line-tab">
                <h6 class="mb-1">Home</h6>
                <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing
                exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
                consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
              </div>
              <div class="tab-pane fade" id="line-profile" role="tabpanel" aria-labelledby="profile-line-tab">
                <h6 class="mb-1">Profile</h6>
                <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing
                exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
                consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
              </div>
              <div class="tab-pane fade" id="line-contact" role="tabpanel" aria-labelledby="contact-line-tab">
                <h6 class="mb-1">Contact</h6>
                <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing
                exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
                consequat voluptate minim amet aliquip ipsum aute laboris nisi.</p>
              </div>
              <div class="tab-pane fade" id="line-disabled" role="tabpanel" aria-labelledby="disabled-line-tab">
                <h6 class="mb-1">disabled</h6>
              </div>
            </div>
          </div>
    </div>
  </div>
@endsection

@push('plugin-scripts')
  <!-- Plugin js import here -->
@endpush

@push('custom-scripts')
  <!-- Custom js here -->
@endpush
