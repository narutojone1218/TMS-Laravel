@extends('layouts.app')

@section('title', 'Edit FAQ category')

@section('heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Edit FAQ category</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ action('FaqCategoryController@index') }}">FAQ Categories</a>
                </li>
                <li class="active">
                    <strong>Edit</strong>
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Edit FAQ category</h5>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal" role="form" method="POST" action="{{ action('FaqCategoryController@update', $faqCategory) }}">
                            {{ csrf_field() }}

                            {{-- Name --}}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label" for="name">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $faqCategory->name }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block m-b-none">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{-- Visible --}}
                            <div class="form-group{{ $errors->has('visible') ? ' has-error' : '' }}">
                                <label class="col-sm-2 control-label" for="visible">Visible</label>

                                <div class="col-sm-10">
                                    <input type="hidden" name="visible" value="0" />
                                    <input type="checkbox" class="js-switch" id="visible" value="1" name="visible" {{ ($faqCategory->visible) ? ' checked' : '' }}>

                                    @if ($errors->has('visible'))
                                        <span class="help-block m-b-none">
                                        <strong>{{ $errors->first('visible') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group m-b-none">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a class="btn btn-white" href="{{ action('FaqCategoryController@index') }}">Cancel</a>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- Delete faq category form --}}
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Danger Zone</h5>
                    </div>
                    <div class="ibox-content">
                        <form role="form" method="POST" action="{{ action('FaqCategoryController@destroy', $faqCategory) }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="active" value="{{ $faqCategory->active }}">

                            <button class="btn btn-danger btn-outline" type="submit">{{ $faqCategory->active ? 'Deactivate FAQ category' : 'Activate FAQ category' }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection