
<div class="card">
    <div class="card-body">
        <h6 class="card-title">Job Form</h6>
        <x-input-text label="Title" placeholder="title" name="title" value="{{old('title')}}"  />
        {{-- Attributes start --}}
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                {{-- <div class="card"> --}}
                <div class="card-body p-0">
                    <h6 class="card-title">Description</h6>

                    <textarea class="form-control" name="description"  id="tinymceExample" rows="10">{{old('description')}}</textarea>
                </div>
                {{-- </div> --}}
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="js-example-basic-single form-select" data-width="100%">
                <option value="" selected>Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="time" class="form-label">Start From</label>
                <input type="date" class="form-control" id="start_date" name="start_date">
            </div>
            <div class="mb-3 col-md-6">
                <label for="time" class="form-label">End From</label>
                <input type="date" class="form-control" id="end_date" name="end_date">
            </div>
            <div class="mb-3 col-md-6">
                <label for="time" class="form-label">Minimum salary</label>
                <input type="number" class="form-control" id="min_salary" name="min_salary">
            </div>
            <div class="mb-3 col-md-6">
                <label for="time" class="form-label">Maximum salary</label>
                <input type="number" class="form-control" id="max_salary" name="max_salary">
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Organization Information
            </div>

            <div class="card-body">
                <div class="mb-3 ">
                    <label class="form-label">Company</label>
                    <select name="company_id" class="js-example-basic-single form-select" data-width="100%">
                        <option value="" selected>Select Company</option>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- <x-input-text label="Organization Website" placeholder="Website" name="organization_website"  /> --}}
                <x-input-text label="Apply Link" placeholder="link" name="apply_link"  />
                <x-input-text label="Vacancy" placeholder="vacancy" name="vacancy"  />
            </div>
        </div>
    </div>
</div>
