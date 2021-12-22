<section id="coach-booking-form" class="px-4 flex justify-content-center">
    <div class="grid pt-8 justify-content-center align-items-center w-full">
        <div class="col-12">
        <div class="card p-fluid">
    
        <form method="POST" action="{{ route('appointment.store') }}">
            @csrf
            {{ Form::hidden('coach_id', $coach->id, array('id' => 'coach_id')) }}
            {{ Form::hidden('job_seeker_id', Auth::user()->id, array('id' => 'job_seeker_id')) }}
            <div id="coach-booking-form-fields"></div>       
            <div class="grid field pt-4">
                <div class="col-12 md:col-6">
                    <button class="p-button p-component p-button-primary">
                        <span class="p-button-label p-c">{{_('Book Now') }}</span>
                        <span class="p-ink" style="height: 85px; width: 85px; top: -19.1px; left: 15.5px;">
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
        </div>
    </div>

</section>