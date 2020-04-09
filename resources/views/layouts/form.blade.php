{{csrf_field()}}
<div class="form-group">
    <label for="name">Name Animal</label>
    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name"
        value="{{$animal->name??''}}">
    <div class="invalid-feedback">
        {{ $errors->first('name') }}
    </div>
</div>
<div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="location" name="location"
        value="{{$animal->location??''}}">
    <div class="invalid-feedback">
        {{ $errors->first('location') }}
    </div>
</div>
<div class="form-group">
    <label for="eat">Eat </label>
    <select class="form-control" id="eat" name="eat">
        <option value="{{$animal->eat??''}}" selected disabled hidden>{{$animal->eat??'Pilih Eat'}}
        </option>
        <option value="Dedaunan">Dedaunan</option>
        <option value="Daging">Daging</option>
        <option value="Kanibal">Kanibal</option>
    </select>
</div>
<div class="form-group">
    <label for="foot">Foot</label>
    <select class="form-control" name="foot" id="foot">
        <option value="{{$animal->eat ?? ''}}" selected disabled hidden>
            {{$animal->foot??'Pilih Foot'}}</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">6</option>
    </select>
    <div class="invalid-feedback">
        {{ $errors->first('foot') }}
    </div>
</div>