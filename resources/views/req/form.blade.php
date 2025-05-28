<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="id" class="form-label">{{ __('Numero de requecision') }}</label>
            <input type="text" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ old('id', $req?->id) }}" id="id" placeholder="Number Reqs">
            {!! $errors->first('id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="all_reqs" class="form-label">{{ __('Costo total') }}</label>
            <input type="text" name="all_reqs" class="form-control @error('all_reqs') is-invalid @enderror" value="{{ old('all_reqs', $req?->all_reqs) }}" id="all_reqs" placeholder="All Reqs">
            {!! $errors->first('all_reqs', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="numeber_material" class="form-label">{{ __('Cantidad de material') }}</label>
            <input type="text" name="numeber_material" class="form-control @error('numeber_material') is-invalid @enderror" value="{{ old('numeber_material', $req?->numeber_material) }}" id="numeber_material" placeholder="Numeber Material">
            {!! $errors->first('numeber_material', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
