<div class="row" id="create" style="display:none">
  <div class="col-md-12">
    <!--begin::Portlet-->
    <div class="kt-portlet">
      {{ Form::open(array('url' => route('sumber.add'))) }}
        <div class="kt-form kt-form--label-right">
          <div class="kt-portlet__body ">
            <div class="row">
              <div class="form-group row col-md-12">
                <label for="c_name" class="col-2 col-form-label">@lang('role.r_field.r_name')</label>
                <div class="col-10">
                  <input class="form-control" name="name" type="text" value="" id="c_name">
                  @error('name')
                    <div class="form-text text-danger">{{$message}}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="text-center">
              <button onclick="$('#create').hide('500');" type="button" class="btn btn-default">@lang('global.app_cancel')</button>
              <button class="btn btn-success" type="submit">@lang('global.app_save')</button>
            </div>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
    <!--end::Portlet-->
  </div>
</div>
