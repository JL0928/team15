<div class="form-group">
    {!! Form::label('name', '名稱：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('create','成立:') !!}
    {!! Form::date('create',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('founder','創辦人:') !!}
    {!! Form::text('founder',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('head', '總部地址：') !!}
    {!! Form::text('head', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('address', '網址：') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
