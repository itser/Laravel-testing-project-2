<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Guard Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guard_name', 'Guard Name:') !!}
    {!! Form::text('guard_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    <strong>Permission:</strong>
    <br/>
    @foreach($permission as $value)
        <label>{{ Form::checkbox('permission[]', $value->id, (isset($rolePermissions) && in_array($value->id, $rolePermissions)) ? true : false, array('class' => 'name')) }}
            {{ $value->name }}</label>
        <br/>
    @endforeach
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('roles.index') !!}" class="btn btn-default">Cancel</a>
</div>
