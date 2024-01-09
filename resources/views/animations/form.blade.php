<div class="form-group">
    {!! Form::label('name', '動畫名稱：', ['style' => 'font-size: 22px;']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'style' => 'font-size: 22px;']) !!}
</div>

<div class="form-group">
    {!! Form::label('type', '類型：', ['style' => 'font-size: 22px;']) !!}
    {!! Form::text('type', null, ['class' => 'form-control', 'style' => 'font-size: 22px;']) !!}
</div>

<div class="form-group">
    {!! Form::label('orign', '原作：', ['style' => 'font-size: 22px;']) !!}
    {!! Form::text('orign', null, ['class' => 'form-control', 'style' => 'font-size: 22px;']) !!}
</div>

<div class="form-group">
    {!! Form::label('dir', '導演：', ['style' => 'font-size: 22px;']) !!}
    {!! Form::text('dir', null, ['class' => 'form-control', 'style' => 'font-size: 22px;']) !!}
</div>

<div class="form-group">
    {!! Form::label('ep_num', '集數：', ['style' => 'font-size: 22px;']) !!}
    {!! Form::text('ep_num', null, ['class' => 'form-control', 'style' => 'font-size: 22px;']) !!}
</div>

<div class="form-group">
    {!! Form::label('cp_id', '動畫製作：', ['style' => 'font-size: 22px;']) !!}
    {!! Form::select('cp_id', $companies, $companySelected, ['class' => 'form-control', 'style' => 'font-size: 22px;']) !!}
</div>

<div class="form-group">
    {!! Form::label('play_time', '播出時間：', ['style' => 'font-size: 22px;']) !!}
    {!! Form::date('play_time', null, ['class' => 'form-control', 'style' => 'font-size: 22px;']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control', 'style' => 'font-size: 22px;']) !!}
</div>
