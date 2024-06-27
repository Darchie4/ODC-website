@php use Carbon\Carbon; @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.metatags")
    <meta charset="utf-8">
    <title>Odense Danse Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('styles/reusables/global.css') }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">

    <script src="{{ asset('js/admin/lesson/timeSlotSelector.js') }}" data-locations="{{ json_encode($locations) }}"></script>></script>
    <script src="{{ asset('js/admin/lesson/updateMinMaxValues.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script>
        $(document).ready(function () {
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 5,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });
        });
    </script>
    @include('components.head.tinymce-config')
    <script>
        tinymce.init({
            selector: 'textarea#longLessonDescription',
        });
    </script>
</head>
<body>
@include("adminPages.adminPartials.adminHeaderPartial")

<main>
    <h1>Opret Hold</h1>

    @if($errors->any())
        <b class="textRed">Der er fejl!</b>
        <ul>
            @foreach($errors->keys() as $key)
                <li>{{$key}}: {{implode(', ', $errors->get($key))}}</li>
            @endforeach

        </ul>
    @endif

    <form class="row g-3" action="{{route('admin.lesson.doEdit', ['lessonID' => $lesson -> id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="timeslotsToDeleteInput" name="timeslotsToDeleteInput" value="">

        <div class="col form-group">
            <label for="name"><b>Navn</b> <b class="text-danger">*</b></label><br>
            <input value="{{old('name', $lesson->name ?? '')}}" class="form-control @error('name') is-invalid @enderror" id="name"
                   name="name" type="text" required>
            @error('name')
            <span class="invalid-feedback">Dette felt er påkrævet</span>
            @enderror
            <br>

            <label for="shortLessonDescription"><b>Kort beskrivelse</b> <b class="text-danger">*</b></label><br>
            <input value="{{old('short_description', $lesson->short_description ?? '')}}"
                   class="form-control @error('shortLessonDescription') is-invalid @enderror" id="shortLessonDescription"
                   name="shortLessonDescription" type="text" maxlength="65" required>
            @error('shortLessonDescription')
            <span class="invalid-feedback">Dette felt er påkrævet</span>
            @enderror
            <br>

            <label for="danceStyle"><b>Stilart</b> <b
                    class="text-danger">*</b></label><br>
            <input value="{{old('danceStyle', $lesson->danceStyle()->first()->name ?? '')}}" class="form-control @error('dance_Style') is-invalid @enderror"
                   name="danceStyle" list="danceStyles"
                   placeholder="Pardans, Hip hop, osv..." required>
            <datalist id="danceStyles">
                @foreach($danceStyles as $style)
                    <option value="{{$style->name}}">{{$style->name}}</option>
                @endforeach
            </datalist>
            @error('danceStyle')
            <span class="invalid-feedback">Dette felt er påkrævet</span>
            @enderror
            <br>



            <label for="skillLevelty"><b>Dygtighedsgrad</b> <b class="text-danger">*</b></label><br>
            <input value="{{old('skillLevel', $lesson->skillLevel()->first()->name ?? '')}}" class="form-control @error('skillLevel') is-invalid @enderror"
                   name="skillLevel" id="skillLevel" list="$skillLevels"
                   placeholder="Begynder, øvet, osv..." required>
            @error('skillLevel')
            <span class="invalid-feedback">Dette felt er påkrævet</span>
            @enderror
            <br>
            <datalist id="$skillLevels">
                @foreach($skillLevels as $skillLevel)
                    <option value="{{$skillLevel->id}}">{{$skillLevel->name}}</option>
                @endforeach
            </datalist>

            <label for="teachers[]"><b>Underviser</b> <b class="text-danger">*</b></label>  <a
                href="{{route('admin.teacher.create')}}">Mangler underviser?</a><br>
            <select id="choices-multiple-remove-button"
                    placeholder="Vælg underviser" multiple
                    id="teachers"
                    name="teachers[]" required>
                @foreach($teachers as $teacher)
                    <option
                        value={{$teacher -> id}} {{$lesson -> teachers()->where('teachers.id', $teacher->id)->exists() ? 'selected' : '' }}>{{$teacher->name}}</option>
                @endforeach
            </select>
            @error('teachers')
            <span class="invalid-feedback">Dette felt er påkrævet</span>
            @enderror
        </div>

        <div class="vr mx-3 p-0"></div>

        <div class="col form-group">
            <label for="ageFrom"><b>Min. alder</b> <b class="text-danger">*</b></label><br>
            <input value="{{old('ageFrom', $lesson->age_from ?? '')}}" class="form-control @error('ageFrom') is-invalid @enderror" id="ageFrom"
                   name="ageFrom" type="number" required>
            @error('ageFrom')
            <span class="invalid-feedback">Dette felt er påkrævet</span>
            @enderror
            <br>

            <label for="ageTo"><b>Max. alder</b> <b class="text-danger">*</b></label><br>
            <input value="{{old('ageTo', $lesson->age_to ?? '')}}" class="form-control @error('ageTo') is-invalid @enderror"
                   id="ageTo" name="ageTo" type="number" required>
            @error('ageTo')
            <span class="invalid-feedback">Dette felt er påkrævet</span>
            @enderror
            <br>


            {{--            <label for="pricing_structure"><b>{{__('lesson.admin_create_price')}}</b> <b class="text-danger">*</b>--}}
            {{--            </label> <a--}}
            {{--                href="{{route("admin.pricing.create")}}">{{__('lesson.admin_create_link_priceStructure')}}</a><br>--}}
            {{--            <select class="form-control form-select @error('pricing_structure') is-invalid @enderror"--}}
            {{--                    id="pricing_structure" name="pricing_structure" required>--}}
            {{--                <option disabled selected>{{ __('pricing.choose')}}</option>--}}
            {{--                @foreach($pricings as $pricing)--}}
            {{--                    <option--}}
            {{--                        value="{{$pricing->id}}" {{ old('pricing_structure') == $pricing->id ? 'selected' : '' }}>{{$pricing->name .' ('. $pricing->price.' '.__('pricing.currency').' - '}} {{__('pricing.' . $pricing->payment_frequency) . ')'}}</option>--}}
            {{--                @endforeach--}}
            {{--            </select>--}}
            {{--            @error('pricing_structure')--}}
            {{--            <span class="invalid-feedback">Dette felt er påkrævet</span>--}}
            {{--            @enderror--}}
            {{--            <br>--}}


            <div class="form-control">
                <div id="timeslotsContainer">
                    <h3>Tid og sted</h3>
                    @foreach($lesson->lessonTimeLocations as $timeslot)
                        <div>

                        @if(!$loop->first)
                            <hr>
                        @endif

                    <div class="row g-2">
                        <div class="col">
                            <label for="start_time_{{$loop->index}}"><b>Start tidspunkt</b> <b
                                    class="text-danger">*</b></label>
                            <input class="form-control" type="time" id="start_time_{{$loop->index}}" name="start_times[]" value="{{Carbon::parse($timeslot->start_time)->format('H:i')}}" required>
                        </div>
                        <div class="col">
                            <label for="end_time_{{$loop->index}}"><b>Slut tidspunkt</b> <b class="text-danger">*</b></label>
                            <input class="form-control" type="time" id="end_time_{{$loop->index}}" name="end_times[]" value="{{Carbon::parse($timeslot->end_time)->format('H:i')}}" required>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col">
                            <label for="day_{{$loop->index}}"><b>Uge dag</b> <b
                                    class="text-danger">*</b></label>
                            <select class="form-control" id="day_{{$loop->index}}" name="days[]" required>
                                <option value="0" {{ $timeslot->week_day == 0 ? 'selected' : '' }}>Mandag</option>
                                <option value="1" {{ $timeslot->week_day == 1 ? 'selected' : '' }}>Tirsdag</option>
                                <option value="2" {{ $timeslot->week_day == 2 ? 'selected' : '' }}>Onsdag</option>
                                <option value="3" {{ $timeslot->week_day == 3 ? 'selected' : '' }}>Torsdag</option>
                                <option value="4" {{ $timeslot->week_day == 4 ? 'selected' : '' }}>Fredag</option>
                                <option value="5" {{ $timeslot->week_day == 5 ? 'selected' : '' }}>Lørdag</option>
                                <option value="6" {{ $timeslot->week_day == 6 ? 'selected' : '' }}>Søndag</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="location_0"><b>Lokale</b> <b class="text-danger">*</b><a
                                    href="{{route('admin.location.create')}}"> Opret?</a></label>
                            <select class="form-control" id="location_0" name="locations[]" required>
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}" {{$timeslot -> location()->where('locations.id', $location->id)->exists() ? 'selected' : ''}}>{{$location->room_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                            <button type="button" class="btn btn-danger remove-timeslot-btn"
                                    onclick="removeTimeslot(this)">Remove Timeslot
                            </button>
                    </div>

                </div>
                @endforeach

                <div class="mx-auto mt-3 text-center">
                    <button class="mx-auto btn btn-primary" type="button" onclick="addTimeslot()">
                        Tilføj træningstid
                    </button>
                </div>
            </div>
        </div>

        <div class="vr mx-3 p-0"></div>

        <div class="col form-group">
            <label for="seasonStart"><b>Sæson start</b> <b
                    class="text-danger">*</b></label><br>
            <input value="{{old('seasonStart', Carbon::parse($lesson->season_start)->format("Y-m-d") ?? '')}}" class="form-control @error('seasonStart') is-invalid @enderror"
                   id="seasonStart" name="seasonStart" type="date" required>
            @error('seasonStart')
            <span class="invalid-feedback">Dette felt er påkrævet</span>
            @enderror
            <br>

            <label for="seasonEnd"><b>Sæson slut</b> <b
                    class="text-danger">*</b></label><br>
            <input value="{{old('seasonEnd', Carbon::parse($lesson->season_end)->format("Y-m-d") ?? '')}}" class="form-control @error('seasonEnd') is-invalid @enderror"
                   id="seasonEnd" name="seasonEnd" type="date" required>
            @error('seasonEnd')
            <span class="invalid-feedback">Dette felt er påkrævet</span>
            @enderror
            <br>

            <label for="km_id"><b>Klubmodul ID</b> <b class="text-danger">*</b></label><br>
            <input value="{{old('km_id', $lesson->km_id ?? '')}}" class="form-control @error('km_id') is-invalid @enderror" id="km_id"
                   name="km_id" type="number" required>
            @error('km_id')
            <span class="invalid-feedback">Dette felt er påkrævet</span>
            @enderror
            <br>

            <label for="is_visible"><b>Synlig på hjemmeside</b></label>
            <input class="form-check-input" type="checkbox" id="is_visible" name="is_visible" {{old('is_visible', ($lesson->is_visible == null ? '' : 'checked') ?? 'checked')}}><br><br>

            <label for="can_signup"><b>Åben for tilmelding</b></label>
            <input class="form-check-input" type="checkbox" id="can_signup" name="can_signup" {{old('is_available', ($lesson->is_available == null ? '' : 'checked') ?? 'checked')}}><br><br>
        </div>

        <hr class="mx-3 p-0">

        <label for="longLessonDescription"><b>Fuld beskrivelse</b> <b class="text-danger">*</b></label><br>
        <textarea id="longLessonDescription" class="@error('long_description') is-invalid @enderror" name="longLessonDescription"
                  required>{!! $lesson->long_description !!}</textarea>
        @error('long_description')
        <span class="invalid-feedback">Dette felt er påkrævet</span>
        @enderror
        <br>

        <input type="submit" value="Rediger">
    </form>
</main>

@include("partials.footer")
</body>
</html>
