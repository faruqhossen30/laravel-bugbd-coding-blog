{{-- filter item start --}}
<div class="position-fixed mt-2 	 d-md-block d-lg-none" style="z-index: 5;">
    <a class="btn btn-primary" style="border-radius: 0" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <i class="uil uil-filter"></i>
    </a>
    <div class="offcanvas offcanvas-start mt-5" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter Jobs</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            {{-- @include('frontend.inc.circular.sidebar') --}}
        </div>
    </div>
</div>
{{-- filter item end --}}
