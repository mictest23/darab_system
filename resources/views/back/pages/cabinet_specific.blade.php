@extends('back.layouts.page-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Cabinet Specific | Darab')
@section('pagePart', isset($pagePart) ? $pagePart : 'Cabinet')
@section('content')

<div class="overflow-x-auto">
  <livewire:cabinet-specific :record_specs="$record_specs" />
</div>

@endsection