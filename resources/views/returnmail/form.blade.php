<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Descrision') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $returnmail?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="specifications" class="form-label">{{ __('Especificasion') }}</label>
            <input type="text" name="specifications" class="form-control @error('specifications') is-invalid @enderror" value="{{ old('specifications', $returnmail?->specifications) }}" id="specifications" placeholder="Specifications">
            {!! $errors->first('specifications', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="site" class="form-label">{{ __('Lugar adonde se realiso servicio') }}</label>
            <input type="text" name="site" class="form-control @error('site') is-invalid @enderror" value="{{ old('site', $returnmail?->site) }}" id="site" placeholder="Site">
            {!! $errors->first('site', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
                <label for="id_employ" class="form-label">{{ __('Empleado que atendio el reporte') }}</label>
            <select name="id_employ" id="id_employ" class="form-select" >
            @foreach($employ as $pro)
                <option id="id_employ" value="{{$pro->id}}"> {{$pro->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group mb-2 mb20">
                <label for="id_rpt" class="form-label">{{ __('Reporte de la repuesta') }}</label>
            <select name="id_rpt" id="id_rpt" class="form-select" >
            @foreach($rpt as $pror)
                <option id="id_rpt" value="{{$pror->id}}"> {{$pror->description}}</option>
            @endforeach
            </select>
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
