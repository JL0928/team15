<div class="form-group">
    {!! Form::label('id', '編號：') !!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name', '動畫名稱：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('type', '類型：') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('orign', '原作：') !!}
    {!! Form::text('orign', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('dir', '導演：') !!}
    {!! Form::text('dir', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('ep_num', '集數：') !!}
    {!! Form::text('ep_num', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cp_id', '動畫製作：') !!}
    {!! Form::text('cp_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('play_time', '播出時間：') !!}
    {!! Form::date('play_time', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>