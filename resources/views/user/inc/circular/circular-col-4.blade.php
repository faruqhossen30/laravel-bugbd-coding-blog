<div class="card">
    <div class="card-body">
        {{-- Thumbnail --}}
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Image</h6>
                <input type="file" id="myDropify" name="thumbnail">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">Education</div>
                @foreach ($educatios as $education)
                    <div class="form-check mb-2">
                        <input name="education[]" value="{{ $education->id }}" type="checkbox"
                            class="form-check-input" id="education{{ $education->id }}">
                        <label class="form-check-label" for="education{{ $education->id }}">
                            {{ $education->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Skill --}}
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">Skills</h4>
                <div class="mb-3">
                    <select name="skill[]" class="js-example-basic-multiple form-select"
                        multiple="multiple" data-width="100%">
                        @foreach ($skills as $skill)
                            <option value="{{$skill->id}}">{{$skill->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        {{-- Job Industry --}}
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">Job Industry</h4>
                <div class="mb-3">
                    <select name="job_industry[]" class="js-example-basic-multiple form-select" multiple="multiple"
                        data-width="100%">
                       @foreach ($jobindustries as $jobindustry)
                          <option value="{{$jobindustry->id}}">{{$jobindustry->name}}</option>
                       @endforeach

                    </select>
                </div>
            </div>
        </div>
        {{-- Job Career Label --}}
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">Career Label</h4>
                <div class="mb-3">
                    <select name="career_label[]" class="js-example-basic-multiple form-select" multiple="multiple"
                        data-width="100%" >
                        @foreach ($careerlabels as $careerlabel)
                        <option value="{{$careerlabel->id}}">{{$careerlabel->name}}</option>
                     @endforeach

                    </select>
                </div>
            </div>
        </div>
        {{-- Salary Preiod --}}
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">Salary Preiod</h4>
                <div class="mb-3">
                    <select name="salary_period[]" class="js-example-basic-multiple form-select" multiple="multiple"
                        data-width="100%" >
                        @foreach ($salarypreiods as $salarypreiod)
                        <option value="{{$salarypreiod->id}}">{{$salarypreiod->name}}</option>
                     @endforeach



                    </select>
                </div>
            </div>
        </div>
        {{-- Job Type --}}
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">Job Type</h4>
                <div class="mb-3">
                    <select name="job_type[]" class="js-example-basic-multiple form-select" multiple="multiple"
                        data-width="100%" >
                        @foreach ($jobtypes as $jobtype)
                        <option value="{{$jobtype->id}}">{{$jobtype->name}}</option>
                     @endforeach

                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
