@extends('layouts.user')
@section('content')<layout 
    _user-name="{{ $userName }}" 
    _user-email="{{ $userEmail }}" 
    _user-uuid="{{ $userUuid }}" 
    :_user-count="{{ $userCount }}" 
    :_is-admin="{{ json_encode($isAdmin) }}" 
    :theme-settings="{{ json_encode($themeSettings) }}"
    _selected-language="{{ $language }}"
></layout>@endsection
