<div>
    <form wire:submit="save">
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name of company') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('companyname') is-invalid @enderror" wire:model="companyname"
                       autofocus>

                @error('companyname')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>


            <button type="submit">Save</button>
        </div>
    </form>
</div>
