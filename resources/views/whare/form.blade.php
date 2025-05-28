<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Descrision') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $whare?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="specifications" class="form-label">{{ __('Especoficasiones') }}</label>
            <input type="text" name="specifications" class="form-control @error('specifications') is-invalid @enderror" value="{{ old('specifications', $whare?->specifications) }}" id="specifications" placeholder="Specifications">
            {!! $errors->first('specifications', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
            <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror" value="{{ old('tipo', $whare?->tipo) }}" id="tipo" placeholder="Tipo">
            {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="quantity" class="form-label">{{ __('Cantidad') }}</label>
            <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $whare?->quantity) }}" id="quantity" placeholder="Quantity">
            {!! $errors->first('quantity', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cost_reqs" class="form-label">{{ __('Costo de requecision') }}</label>
            <input type="numbre" name="cost_reqs" class="form-control @error('cost_reqs') is-invalid @enderror" value="{{ old('cost_reqs', $whare?->cost_reqs) }}" id="cost_reqs" placeholder="Cost Reqs">
            {!! $errors->first('cost_reqs', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
                <label for="number_reqs" class="form-label">{{ __('Numero de requecision') }}</label>
            <select name="number_reqs" id="number_reqs" class="form-select" >
            @foreach($lista as $pro)
                <option id="number_reqs" value="{{$pro->id}}"> {{$pro->id}}</option>
            @endforeach
            </select>
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
