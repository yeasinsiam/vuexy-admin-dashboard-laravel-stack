@extends('admin.layout.main')
@section('meta-title', 'Settings')


@section('content')
    <x-admin.layout.content.__navbar-pills :items="[
        ['title' => 'Profile', 'icon' => 'ti ti-user-check ti-xs', 'href' => 'javascript:void(0)', 'isActive' => true],
        ['title' => 'Teams', 'icon' => 'ti ti-users ti-xs', 'href' => 'javascript:void(0)', 'isActive' => false],
        [
            'title' => 'Projects',
            'icon' => 'ti ti-layout-grid  ti-xs',
            'href' => 'javascript:void(0)',
            'isActive' => false,
        ],
        [
            'title' => 'Connections',
            'icon' => 'ti ti-user-check ti-xs',
            'href' => 'javascript:void(0)',
            'isActive' => false,
        ],
        ['title' => 'Profile', 'icon' => 'ti ti-link ti-xs', 'href' => 'javascript:void(0)', 'isActive' => false],
    ]" />
@endsection
