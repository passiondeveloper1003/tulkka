@extends(getTemplate() .'.panel.layouts.panel_layout')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
@endpush

@section('content')
    <div role="tabpanel">
        @if(empty($new_user))
            @include('web.default.panel.setting.setting_includes.progress')
        @endif

        @if (!($user->isTeacher()))
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab2">
                    <form method="post" id="userSettingForm" class="mt-30" action="{{ (!empty($new_user)) ? '/panel/manage/'. $user_type .'/new' : '/panel/setting' }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="step" value="{{ !empty($currentStep) ? $currentStep : 1 }}">
                        <input type="hidden" name="next_step" value="0">

                        @if(!empty($organization_id))
                            <input type="hidden" name="organization_id" value="{{ $organization_id }}">
                            <input type="hidden" id="userId" name="user_id" value="{{ $user->id }}">
                        @endif

                        @if(!empty($new_user) or (!empty($currentStep) and $currentStep == 1))
                            @include('web.default.panel.setting.setting_includes.basic_information')
                        @endif

                        @if(empty($new_user) and !empty($currentStep))
                            @switch($currentStep)
                                @case(2)
                                @include('web.default.panel.setting.setting_includes.image')
                                @break

                                @case(3)
                                @include('web.default.panel.setting.setting_includes.about')
                                @break

                                @case(4)
                                @include('web.default.panel.setting.setting_includes.education')
                                @break

                                @case(5)
                                @include('web.default.panel.setting.setting_includes.experiences')
                                @break

                                @case(6)
                                @include('web.default.panel.setting.setting_includes.occupations')
                                @break

                                @case(7)

                                @include('web.default.panel.setting.setting_includes.identity_and_financial')

                                @break

                                @case(8)
                                @if(!$user->isUser())
                                    @include('web.default.panel.setting.setting_includes.zoom_api')
                                @endif
                                @break

                                @case(9)
                                @if(!$user->isUser())
                                    @include('web.default.panel.setting.setting_includes.settings')
                                @endif
                                @break
                            @endswitch
                        @endif
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab3">biography</div>
            </div>
        @else
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">
                <form method="post" id="userSettingForm" class="mt-30" action="{{ (!empty($new_user)) ? '/panel/manage/'. $user_type .'/new' : '/panel/setting' }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="step" value="{{ !empty($currentStep) ? $currentStep : 1 }}">
                    <input type="hidden" name="next_step" value="0">

                    @if(!empty($organization_id))
                        <input type="hidden" name="organization_id" value="{{ $organization_id }}">
                        <input type="hidden" id="userId" name="user_id" value="{{ $user->id }}">
                    @endif

                    @if(!empty($new_user) or (!empty($currentStep) and $currentStep == 1))
                        @include('web.default.panel.setting.setting_includes.basic_information')
                    @endif

                    @if(empty($new_user) and !empty($currentStep))
                        @switch($currentStep)
                            @case(2)
                            @include('web.default.panel.setting.setting_includes.image')
                            @break

                            @case(3)
                            @include('web.default.panel.setting.setting_includes.about')
                            @break

                            @case(4)
                            @include('web.default.panel.setting.setting_includes.education')
                            @break

                            @case(5)
                            @include('web.default.panel.setting.setting_includes.experiences')
                            @break

                            @case(6)
                            @include('web.default.panel.setting.setting_includes.occupations')
                            @break

                            @case(7)

                            @include('web.default.panel.setting.setting_includes.identity_and_financial')

                            @break

                            @case(8)
                            @if(!$user->isUser())
                                @include('web.default.panel.setting.setting_includes.zoom_api')
                            @endif
                            @break

                            @case(9)
                            @if(!$user->isUser())
                                @include('web.default.panel.setting.setting_includes.settings')
                            @endif
                            @break
                        @endswitch
                    @endif
                </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab2">
                <form method="post" class="mt-30" id="userSkillSetting" enctype="multipart/form-data">
                {{ csrf_field() }}
                <section class="bg-white br-5 settings-user-profile">
                <div class="row h-100">
                    <div class="col-md-3 text-center d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ $authUser->getAvatar(100) }}" class="settings-user-avatar" alt="{{ $authUser->full_name }}">
                        <h5 class="settings-user-name text-center">{{ $authUser->full_name }}</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="input-label">What they speak</label>
                            <select name="speaklang" class="form-control select2" data-allow-clear="false">
                                <option value="" {{ empty($user->timezone) ? 'selected' : '' }} disabled>{{ trans('public.select') }}</option>
                                @foreach(getListOfTimezones() as $timezone)
                                    <option value="{{ $timezone }}" @if(!empty($user) and $user->timezone == $timezone) selected @endif>{{ $timezone }}</option>
                                @endforeach
                            </select>   
                        </div>

                        <div class="form-group">
                            <label class="input-label">What kind of classes they teach</label>
                            <select name="speaklang" class="form-control select2" data-allow-clear="false">
                                <option value="" {{ empty($user->timezone) ? 'selected' : '' }} disabled>{{ trans('public.select') }}</option>
                                @foreach(getListOfTimezones() as $timezone)
                                    <option value="{{ $timezone }}" @if(!empty($user) and $user->timezone == $timezone) selected @endif>{{ $timezone }}</option>
                                @endforeach
                            </select>   
                        </div>
                    </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="input-label">What kind of classes they teach</label>
                        <select name="speaklang" class="form-control select2" data-allow-clear="false">
                            <option value="" {{ empty($user->timezone) ? 'selected' : '' }} disabled>{{ trans('public.select') }}</option>
                            @foreach(getListOfTimezones() as $timezone)
                                <option value="{{ $timezone }}" @if(!empty($user) and $user->timezone == $timezone) selected @endif>{{ $timezone }}</option>
                            @endforeach
                        </select>   
                    </div>

                    <div class="form-group">
                        <label class="input-label">What kind of classes they teach</label>
                        <select name="speaklang" class="form-control select2" data-allow-clear="false">
                            <option value="" {{ empty($user->timezone) ? 'selected' : '' }} disabled>{{ trans('public.select') }}</option>
                            @foreach(getListOfTimezones() as $timezone)
                                <option value="{{ $timezone }}" @if(!empty($user) and $user->timezone == $timezone) selected @endif>{{ $timezone }}</option>
                            @endforeach
                        </select>   
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="input-label">What kind of classes they teach</label>
                        <select name="speaklang" class="form-control select2" data-allow-clear="false">
                            <option value="" {{ empty($user->timezone) ? 'selected' : '' }} disabled>{{ trans('public.select') }}</option>
                            @foreach(getListOfTimezones() as $timezone)
                                <option value="{{ $timezone }}" @if(!empty($user) and $user->timezone == $timezone) selected @endif>{{ $timezone }}</option>
                            @endforeach
                        </select>   
                    </div>

                    <div class="d-flex justify-content-between pt-25">
                        <button class="btn btn-sm btn-outline-primary settings-btn">{{ trans('update.cancel') }}</button>
                        <button class="btn btn-sm btn-primary settings-btn">{{ trans('update.save_change') }}</button>
                    </div>
                </div>
            </div>

                </section>
                </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab3">
                <form class="br-5 pt-40 pb-50 px-50 settings-biography bg-white rounded mt-20">
                    <label class="font-16 font-weight-semibold d-block mb-10">About Me</label>
                    <textarea name="aboutus" rows="5" min="5" cols="50" class="py-15 px-25 br-10 w-100">
                    The EPI team deals with matters concerning teachers swiftly, effectively and with noteworthy professionalism. I have always been impressed by the level of proficiency each member of the EPI team gives to teachers from the initial contact through to placement. I am very impressed with the service received from EPI and I would have no hesitation in recommending the organization, Educational Partners International.
                    </textarea>
                    <label class="font-16 font-weight-semibold d-block mt-20 mb-10">Education</label>
                    <input type="text" name="education" class="py-10 px-20 br-10 w-100" placeholder="The EPI team deals with" />
                    <label class="font-16 font-weight-semibold d-block mt-20 mb-10">Experience</label>
                    <input type="text" name="education" class="py-10 px-20 br-10 w-100" placeholder="The EPI team deals with" />
                    <label class="font-16 font-weight-semibold d-block mt-20 mb-10">Subject</label>
                    <input type="text" name="education" class="py-10 px-20 br-10 w-100" placeholder="English, Spanish" />
                    <button type='submit' class="btn btn-outline-primary btn-sm mt-40 br-5" >Save changes</button>
                </form>
            </div>
        </div>
        @endif
        
    </div>

    <!-- <div class="create-webinar-footer d-flex align-items-center justify-content-between mt-20 pt-15 border-top">
        <div class="d-flex align-items-center">
            @if(!empty($user) and empty($new_user))
                @if(!empty($currentStep) and $currentStep > 1)
                    <a href="/panel/setting/step/{{ ($currentStep - 1) }}" class="btn btn-sm btn-primary">{{ trans('webinars.previous') }}</a>
                @else
                    <a href="" class="btn btn-sm btn-primary disabled">{{ trans('webinars.previous') }}</a>
                @endif

                <button type="button" id="getNextStep" class="btn btn-sm btn-primary ml-15" @if(!empty($currentStep) and (($user->isUser() and $currentStep == 7) or (!$user->isUser() and $currentStep == 9))) disabled @endif>{{ trans('webinars.next') }}</button>
            @endif
        </div>

        <div class="d-flex align-items-center">
            @if(empty($new_user) and empty($edit_new_user))
                <a href="/panel/setting/deleteAccount" class="delete-action btn btn-sm btn-danger" data-confirm="{{ trans('update.delete_account_modal_confirm_btn_text') }}" data-title="{{ trans('update.delete_account_modal_hint') }}">{{ trans('update.delete_account') }}</a>
            @endif

            <button type="button" id="saveData" class="btn btn-sm btn-primary ml-15">{{ trans('public.save') }}</button>
        </div>
    </div> -->
@endsection

@push('scripts_bottom')
    <script src="/assets/vendors/cropit/jquery.cropit.js"></script>
    <script src="/assets/default/js/parts/img_cropit.min.js"></script>
    <script src="/assets/default/vendors/select2/select2.min.js"></script>

    <script>
        var editEducationLang = '{{ trans('site.edit_education') }}';
        var editExperienceLang = '{{ trans('site.edit_experience') }}';
        var saveSuccessLang = '{{ trans('webinars.success_store') }}';
        var saveErrorLang = '{{ trans('site.store_error_try_again') }}';
        var notAccessToLang = '{{ trans('public.not_access_to_this_content') }}';
    </script>

    <script src="/assets/default/js/panel/user_setting.min.js"></script>
@endpush
