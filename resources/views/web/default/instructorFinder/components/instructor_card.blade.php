@php
    $price = !empty($instructor->meeting) ? $instructor->meeting->amount : 0;
    $discount = (!empty($price) and !empty($instructor->meeting) and !empty($instructor->meeting->discount) and $instructor->meeting->discount > 0) ? $instructor->meeting->discount : 0;
@endphp

<a>
    <div id="inst_{{ $instructor->id }}"
        class="position-relative d-flex flex-wrap instructor-finder-card border-bottom border-gray300 rounded-sm px-10 py-30 p-md-30 mt-30 mt-md-45 align-items-center">
        <a href="{{$instructor->getProfileUrl()}}" class="col-12 @if ($instructor->video_demo) col-md-8 @else @endif  d-flex flex-column p-2">

            <div class="d-flex flex-column">
                <div class="d-flex align-items-center">

                    <div class="position-relative instructor-avatar rounded-circle">
                        <img src="{{ $instructor->getAvatar(70) }}" class="img-cover rounded-circle"
                            alt="{{ $instructor->full_name }}">
                    </div>

                    <div class="d-flex flex-column mx-2">
                        <h3 class="instructor-name font-weight-bold text-black d-block">{{ $instructor->full_name }}
                        </h3>
                        
                        @if ($instructor->occupations->count() > 0)
                            <div class="d-flex flex-row align-items-center flex-wrap">
                                <div class="font-10"><i
                                        class="fa-solid fa-person-chalkboard mx-2 text-primary"></i>{{ trans('site.teaching') }}
                                </div>
                                @foreach ($instructor->occupations as $occupation)
                                    @if ($occupation->type == 'language')
                                        <span
                                            class="badge rounded-pill badge-primary m-1 font-10">{{ trans('site.' . $occupation->category->title) }}</span>
                                    @endif
                                @endforeach
                            </div>
                            <div class="d-flex flex-row  align-items-center flex-wrap">
                                <div class="font-10"><i
                                        class="fa-solid fa-language mx-2 text-primary"></i>{{ trans('site.also_speaking') }}
                                </div>
                                @foreach ($instructor->occupations as $occupation)
                                    @if ($occupation->type == 'also_speaking')
                                        <span
                                            class="badge rounded-pill badge-primary m-1 font-10">{{ trans('site.' . $occupation->category->title) }}</span>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="mt-20 instructor-about">{{ truncate($instructor->about, 200) }}</div>
        </a>

        @if ($instructor->video_demo)
            <div class="col-12 col-md-4 mt-4 mt-md-0 p-0"
                onclick='Livewire.emit("showVideoModal","{{ $instructor->full_name . ' Instruction Video' }}", "{{ $instructor->video_demo }}")'>
                <span
                    class="play-button-instructor bg-primary rounded-circle ml-1 d-flex align-items-center justify-content-center"><i
                        class="fa-solid fa-play text-white"></i></span>
                <img class="instructor-thumb-img rounded w-100" src="{{'/store/'.$instructor->video_demo_thumb}}" alt="" />
            </div>
        @endif

        <div class="d-flex d-md-block flex-row-reverse w-100 justify-content-between content-evenly">
            @if ($instructor->instructorReviews->pluck('creator_id')->count() > 0)
                <div class="d-flex align-items-center mt-20">
                    @include('web.default.includes.webinar.rate', [
                        'rate' => $instructor->getInstructorRate(),
                    ])
                    <span
                        class="font-10 font-14 text-nowrap">({{ $instructor->instructorReviews->pluck('creator_id')->count() }}
                        {{ trans('public.ratings') }})</span>
                </div>
            @endif
            @if (isset($authUser) && !$authUser->isTeacher() && $authUser->trial_expired)
            <a href="#" class="btn btn-sm btn-primary btn-book text-nowrap">
                {{ trans('navbar.book_lesson') }}
            </a>
            @endif
            @if (isset($authUser) && !$authUser->trial_expired)
            <a href="#" class="btn btn-sm btn-primary btn-book font-12 font-weight-normal">
                {{ trans('navbar.trial') }}
            </a>
            @endif

            @if(!isset($authUser)) 
                <a href="#" class="btn btn-sm btn-primary btn-book font-12 font-weight-normal">
                    {{ trans('navbar.trial') }}
                </a>
            @endif
        </div>
        

       

        {{-- <div onclick='Livewire.emit("showDateCalendar","{{ $key }}")'
            class="d-flex justify-content-end p-2 w-100">
            <div class="px-2 py-1 bg-primary cursor-pointer rounded-circle"><i
                    class="fa-solid fa-caret-down text-white"></i></div>
        </div> --}}
        <div class="front-calendar" style="display: none;">
        <livewire:calendar :instructor="$instructor" :wire:key="$key" :loopkey="$key" />
        </div>
    </div>
</a>

@push('scripts_bottom')
@once
<script>
    (function() {
        $(document).ready(function() {
            $('.instructor-finder-card').on('click', '.btn-book', function(e) {
                e.preventDefault();
                $calendar = $(this).siblings('.front-calendar');

                $calendar.toggle();
            })
        })
    })(jQuery)
</script>
@endonce
@endpush