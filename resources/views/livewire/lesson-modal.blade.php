<div>
    <div>
        <div class="lesson-modal modal fade @if ($show === true) show @endif"
            style="display: @if ($show === true) block
                @else
           none @endif;" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable mx-auto" role="document">
                <div class="modal-content animate__bounceIn h-100">
                    <div class="modal-header br-none">
                        <button class="close" type="button" aria-label="Close" wire:click.prevent="doClose()">
                            <img class="" src="{{ url('/assets/default/img/close.png') }}">
                        </button>
                    </div>
                    <div class="modal-body d-flex flex-column px-sm-70 pt-0 pb-40 pb-sm-80 h-100">
                    <form class="d-flex flex-column h-100">
                    @if ($current_step == 1) 
                        <div class="lesson-links w-100">
                            <div class="text-right">
                                <a class="d-flex align-items-center justify-content-end btn-continue">
                                    Next
                                    <img src="{{url('/assets/default/img/modal/lesson/arrow-right.png')}}" class="ml-1" />
                                </a>
                            </div>
                        </div>

                        <div class="lesson-content mt-25 h-100 d-flex flex-column">
                            <h3>{{trans('update.ls_age_title')}}</h3>
                            <div id="inputTypes" class="mt-20 max-h-100">
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="5-10" id="age1" {{ (!empty($specification->input_type) and $specification->input_type == '5-10') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="age1">{{ trans('update.ls_age_1') }}</label>
                                </div>  
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="11-15" id="age2" {{ (!empty($specification->input_type) and $specification->input_type == '11-15') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="age2">{{ trans('update.ls_age_2') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="15-20" id="age3" {{ (!empty($specification->input_type) and $specification->input_type == '11-15') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="age3">{{ trans('update.ls_age_3') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="21-30" id="age4" {{ (!empty($specification->input_type) and $specification->input_type == '11-15') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="age4">{{ trans('update.ls_age_4') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="30+" id="age5" {{ (!empty($specification->input_type) and $specification->input_type == '11-15') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="age5">{{ trans('update.ls_age_5') }}</label>
                                </div>
                            </div>
                        </div>
                    
                    @elseif($current_step == 2) 
                        <div class="lesson-links w-100 d-flex align-items-center justify-content-between">
                            <div class="text-left">
                                    <a class="d-flex align-items-center" wire:click="previousStep()">
                                        <img src="{{url('/assets/default/img/modal/lesson/arrow-left.png')}}" class='mr-1' />
                                        Back
                                    </a>
                                </div>
                            <div class="text-right">
                                <a class="d-flex align-items-center justify-content-end btn-continue">
                                    Next
                                    <img src="{{url('/assets/default/img/modal/lesson/arrow-right.png')}}" class="ml-1" />
                                </a>
                            </div>
                        </div>

                        <div class="lesson-content mt-25 h-100 d-flex flex-column">
                            <h3>{{trans('update.ed_title')}}</h3>
                            <div id="inputTypes" class="mt-20">
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Pre School" id="ed_1" {{ (!empty($specification->input_type) and $specification->input_type == 'ed_1') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ed_1">{{trans('update.ed_1')}}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Primary Education" id="ed_2" {{ (!empty($specification->input_type) and $specification->input_type == 'ed_2') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ed_2">{{trans('update.ed_2')}}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Middle School" id="ed_3" {{ (!empty($specification->input_type) and $specification->input_type == 'ed_3') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ed_3">{{trans('update.ed_3')}}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="High School" id="ed_4" {{ (!empty($specification->input_type) and $specification->input_type == 'ed_4') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ed_4">{{trans('update.ed_4')}}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="College" id="ed_5" {{ (!empty($specification->input_type) and $specification->input_type == 'ed_5') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ed_5">{{trans('update.ed_5')}}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Postgraduate" id="ed_6" {{ (!empty($specification->input_type) and $specification->input_type == 'ed_6') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ed_6">{{trans('update.ed_6')}}</label>
                                </div>
                            </div>
                        </div>
                    @elseif($current_step == 3)
                        <div class="lesson-links w-100 d-flex align-items-center justify-content-between">
                            <div class="text-left">
                                    <a class="d-flex align-items-center" wire:click="previousStep()">
                                        <img src="{{url('/assets/default/img/modal/lesson/arrow-left.png')}}" class='mr-1' />
                                        Back
                                    </a>
                                </div>
                            <div class="text-right">
                                <a class="d-flex align-items-center justify-content-end btn-continue">
                                    Next
                                    <img src="{{url('/assets/default/img/modal/lesson/arrow-right.png')}}" class="ml-1" />
                                </a>
                            </div>
                        </div>

                        <div class="lesson-content mt-25 h-100 d-flex flex-column">
                            <h3>{{ trans('update.lv_title') }}</h3>
                            <div id="inputTypes" class="mt-20">
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="A0" {{ (!empty($specification->input_type) and $specification->input_type == 'lv_1') ? 'checked="checked"' : ''}} id="lv_1" class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="lv_1">{{ trans('update.lv_1') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="A1" {{ (!empty($specification->input_type) and $specification->input_type == 'lv_2') ? 'checked="checked"' : ''}} id="lv_2" class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="lv_2">{{ trans('update.lv_2') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="A2" {{ (!empty($specification->input_type) and $specification->input_type == 'lv_3') ? 'checked="checked"' : ''}} id="lv_3" class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="lv_3">{{ trans('update.lv_3') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="B1" {{ (!empty($specification->input_type) and $specification->input_type == 'lv_4') ? 'checked="checked"' : ''}} id="lv_4" class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="lv_4">{{ trans('update.lv_4') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="B2" {{ (!empty($specification->input_type) and $specification->input_type == 'lv_5') ? 'checked="checked"' : ''}} id="lv_5" class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="lv_5">{{ trans('update.lv_5') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="C1" {{ (!empty($specification->input_type) and $specification->input_type == 'lv_6') ? 'checked="checked"' : ''}} id="lv_6" class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="lv_6">{{ trans('update.lv_6') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="C2" {{ (!empty($specification->input_type) and $specification->input_type == 'lv_7') ? 'checked="checked"' : ''}} id="lv_7" class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="lv_7">{{ trans('update.lv_7') }}</label>
                                </div>
                            </div>
                        </div>
                    @elseif($current_step == 4)
                        <div class="lesson-links w-100 d-flex align-items-center justify-content-between">
                            <div class="text-left">
                                <a class="d-flex align-items-center" wire:click="previousStep()">
                                    <img src="{{url('/assets/default/img/modal/lesson/arrow-left.png')}}" class='mr-1' />
                                    Back
                                </a>
                            </div>
                            <div class="text-right">
                                <a class="d-flex align-items-center justify-content-end btn-continue">
                                    Next
                                    <img src="{{url('/assets/default/img/modal/lesson/arrow-right.png')}}" class="ml-1" />
                                </a>
                            </div>
                        </div>

                        <div class="lesson-content mt-25 h-100 d-flex flex-column">
                            <h3>{{ trans('update.study_title') }}</h3>
                            <div id="inputTypes" class="mt-20">
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="For School" {{ (!empty($specification->input_type) and $specification->input_type == 'study_1') ? 'checked="checked"' : ''}} id="study_1" class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="study_1">{{ trans('update.study_1') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="For Exams" id="study_2" {{ (!empty($specification->input_type) and $specification->input_type == 'study_2') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="study_2">{{ trans('update.study_2') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="For Traveling" id="study_3" {{ (!empty($specification->input_type) and $specification->input_type == 'study_3') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="study_3">{{ trans('update.study_3') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="For Work/Business" id="study_4" {{ (!empty($specification->input_type) and $specification->input_type == 'study_4') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="study_4">{{ trans('update.study_4') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="To not forget the language" id="study_5" {{ (!empty($specification->input_type) and $specification->input_type == 'study_5') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="study_5">{{ trans('update.study_5') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="For self-improvement" id="study_6" {{ (!empty($specification->input_type) and $specification->input_type == 'study_6') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="study_6">{{ trans('update.study_6') }}</label>
                                </div>
                            </div>
                        </div>
                    @elseif($current_step == 5)
                        <div class="lesson-links w-100 d-flex align-items-center justify-content-between">
                            <div class="text-left">
                                <a class="d-flex align-items-center" wire:click="previousStep()">
                                    <img src="{{url('/assets/default/img/modal/lesson/arrow-left.png')}}" class='mr-1' />
                                    Back
                                </a>
                            </div>
                            <div class="text-right">
                                <a class="d-flex align-items-center justify-content-end btn-continue">
                                    Next
                                    <img src="{{url('/assets/default/img/modal/lesson/arrow-right.png')}}" class="ml-1" />
                                </a>
                            </div>
                        </div>

                        <div class="lesson-content mt-25 h-100 d-flex flex-column">
                            <h3>{{ trans('update.learn_title') }}</h3>
                            <div id="inputTypes" class="mt-20">
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Grammar" {{ (!empty($specification->input_type) and $specification->input_type == 'learn_1') ? 'checked="checked"' : ''}} id="learn_1" class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="learn_1">{{ trans('update.learn_1') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Pronunciation" id="learn_2" {{ (!empty($specification->input_type) and $specification->input_type == 'learn_2') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="learn_2">{{ trans('update.learn_2') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Daily Conversation" id="learn_3" {{ (!empty($specification->input_type) and $specification->input_type == 'learn_3') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="learn_3">{{ trans('update.learn_3') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Vocabulary" id="learn_4" {{ (!empty($specification->input_type) and $specification->input_type == 'learn_4') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="learn_4">{{ trans('update.learn_4') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Phonics" id="learn_5" {{ (!empty($specification->input_type) and $specification->input_type == 'learn_5') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="learn_5">{{ trans('update.learn_5') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Reading" id="learn_6" {{ (!empty($specification->input_type) and $specification->input_type == 'learn_6') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="learn_6">{{ trans('update.learn_6') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Listening" id="learn_7" {{ (!empty($specification->input_type) and $specification->input_type == 'learn_7') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="learn_7">{{ trans('update.learn_7') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Travel Expressions" id="learn_8" {{ (!empty($specification->input_type) and $specification->input_type == 'learn_8') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="learn_8">{{ trans('update.learn_8') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="Business Expressions" id="learn_9" {{ (!empty($specification->input_type) and $specification->input_type == 'learn_9') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="learn_9">{{ trans('update.learn_9') }}</label>
                                </div>
                            </div>
                        </div>
                    @elseif($current_step == 6)
                        <div class="lesson-links w-100 d-flex align-items-center justify-content-between">
                            <div class="text-left">
                                <a class="d-flex align-items-center" wire:click="previousStep()">
                                    <img src="{{url('/assets/default/img/modal/lesson/arrow-left.png')}}" class='mr-1' />
                                    Back
                                </a>
                            </div>
                            <div class="text-right">
                                <a class="d-flex align-items-center justify-content-end btn-continue">
                                    Next
                                    <img src="{{url('/assets/default/img/modal/lesson/arrow-right.png')}}" class="ml-1" />
                                </a>
                            </div>
                        </div>
                        <div class="lesson-content mt-25 h-100 d-flex flex-column">
                            <h3>{{ trans('update.ta_title') }}</h3>
                            <div id="inputTypes" class="mt-20">
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="6-9" {{ (!empty($specification->input_type) and $specification->input_type == 'ta_1') ? 'checked="checked"' : ''}} id="ta_1" class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ta_1">{{ trans('update.ta_1') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="10-12" id="ta_2" {{ (!empty($specification->input_type) and $specification->input_type == 'ta_2') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ta_2">{{ trans('update.ta_2') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="15-18" id="ta_3" {{ (!empty($specification->input_type) and $specification->input_type == 'ta_3') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ta_3">{{ trans('update.ta_3') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="18-21" id="ta_4" {{ (!empty($specification->input_type) and $specification->input_type == 'ta_4') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ta_4">{{ trans('update.ta_4') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="21-24" id="ta_5" {{ (!empty($specification->input_type) and $specification->input_type == 'ta_5') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ta_5">{{ trans('update.ta_5') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="0-3" id="ta_6" {{ (!empty($specification->input_type) and $specification->input_type == 'ta_6') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ta_6">{{ trans('update.ta_6') }}</label>
                                </div>
                                <div class="custom-control custom-radio p-0 m-0">
                                    <input type="radio" name="input_type" value="3-6" id="ta_7" {{ (!empty($specification->input_type) and $specification->input_type == 'ta_7') ? 'checked="checked"' : ''}} class="custom-control-input">
                                    <label class="custom-control-label cursor-pointer" for="ta_7">{{ trans('update.ta_7') }}</label>
                                </div>
                            </div>
                        </div>
                    @elseif($current_step == 7)
                        <div class="lesson-links w-100 d-flex align-items-center justify-content-between">
                            <div class="text-left">
                                <a class="d-flex align-items-center" wire:click="previousStep()">
                                    <img src="{{url('/assets/default/img/modal/lesson/arrow-left.png')}}" class='mr-1'/>
                                    Back
                                </a>
                            </div>
                        </div>
                        <div class="lesson-content mt-25 h-100 d-flex flex-column">
                            <img src="{{url('/assets/default/img/modal/lesson/prize.png')}}" class="mx-auto" width="143" height="143"/>
                        </div>
                    @endif

                    
                    @if($current_step == 7)
                        <button class="btn btn-primary mt-auto font-18 btn-lesson-submit" wire:click="save" type="button" style="height: 57px;" >
                            Submit
                        </button>
                    @else
                        <button class="btn btn-primary mt-auto font-18 btn-continue" style="height: 57px;" >
                            Continue
                        </button>
                    @endif
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- Let's also add the backdrop / overlay here -->
        <div class="modal-backdrop fade show" id="backdrop"
            style="display: @if ($show === true) block
   @else
           none @endif;"></div>
    </div>

</div>

<script>
    (function() {
        $(document).ready(function() {
            $('.lesson-modal').on('click','.btn-continue', function(e) {
                e.preventDefault();
                var $form = $(this).closest('form'),
                    $item_value = $form.find('input[name="input_type"]:checked').val();

                if($item_value) {
                    Livewire.emit('lessonContinue', $item_value);
                } else {
                   window.alert('You have to select one.'); 
                }
            })
        })
    })(jQuery)
</script>
