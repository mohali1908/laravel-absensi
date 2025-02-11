<div>
    <form wire:submit.prevent="savePresences" method="post" novalidate>
        @include('partials.alerts')

        @foreach ($presences as $i => $presence)
        <div class="mb-3">
            <div class="w-100">
                <!-- User ID -->
                <div class="mb-3">
                    <x-form-label id="user_id{{ $i }}" label='User ID ({{ $i + 1 }})' />
                    <x-form-input id="user_id{{ $i }}" name="user_id{{ $i }}" wire:model.defer="presences.{{ $i }}.user_id" />
                    <x-form-error key="presences.{{ $i }}.user_id" />
                </div>

                <!-- Attendance ID -->
                <div class="mb-3">
                    <x-form-label id="attendance_id{{ $i }}" label='Attendance ID ({{ $i + 1 }})' />
                    <x-form-input id="attendance_id{{ $i }}" name="attendance_id{{ $i }}" wire:model.defer="presences.{{ $i }}.attendance_id" />
                    <x-form-error key="presences.{{ $i }}.attendance_id" />
                </div>

                <!-- Presence Date -->
                <div class="mb-3">
                    <x-form-label id="presence_date{{ $i }}" label='Tanggal Kehadiran ({{ $i + 1 }})' />
                    <x-form-input type="date" id="presence_date{{ $i }}" name="presence_date{{ $i }}" wire:model.defer="presences.{{ $i }}.presence_date" />
                    <x-form-error key="presences.{{ $i }}.presence_date" />
                </div>

                <!-- Enter Time -->
                <div class="mb-3">
                    <x-form-label id="presence_enter_time{{ $i }}" label='Jam Masuk ({{ $i + 1 }})' />
                    <x-form-input type="time" id="presence_enter_time{{ $i }}" name="presence_enter_time{{ $i }}" wire:model.defer="presences.{{ $i }}.presence_enter_time" placeholder="HH:MM:SS" />
                    <x-form-error key="presences.{{ $i }}.presence_enter_time" />
                </div>

                <!-- Out Time -->
                <div class="mb-3">
                    <x-form-label id="presence_out_time{{ $i }}" label='Jam Pulang ({{ $i + 1 }})' />
                    <x-form-input type="time" id="presence_out_time{{ $i }}" name="presence_out_time{{ $i }}" wire:model.defer="presences.{{ $i }}.presence_out_time" placeholder="HH:MM:SS" />
                    <x-form-error key="presences.{{ $i }}.presence_out_time" />
                </div>

                <!-- Enter From -->
                <div class="mb-3">
                    <x-form-label id="presence_enter_from{{ $i }}" label='Masuk Dari ({{ $i + 1 }})' />
                    <x-form-input id="presence_enter_from{{ $i }}" name="presence_enter_from{{ $i }}" wire:model.defer="presences.{{ $i }}.presence_enter_from" />
                    <x-form-error key="presences.{{ $i }}.presence_enter_from" />
                </div>

                <!-- Out From -->
                <div class="mb-3">
                    <x-form-label id="presence_out_from{{ $i }}" label='Keluar Dari ({{ $i + 1 }})' />
                    <x-form-input id="presence_out_from{{ $i }}" name="presence_out_from{{ $i }}" wire:model.defer="presences.{{ $i }}.presence_out_from" />
                    <x-form-error key="presences.{{ $i }}.presence_out_from" />
                </div>
            </div>
        </div>
        <hr>
        @endforeach

        <div class="d-flex justify-content-between align-items-center mb-5">
            <button class="btn btn-primary">
                Simpan
            </button>
        </div>
    </form>
</div>


