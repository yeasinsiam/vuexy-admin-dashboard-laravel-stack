@extends('admin.layout.main')
@section('meta-title', 'Forms')


@section('content')
    <x-admin.layout.content.__row gap='4'>
        <x-admin.layout.content.__col lg="12">
            <x-admin.layout.content.__card>
                <x-slot:header class="border-bottom">Buttons</x-slot:header>
                <x-slot:body class="pt-2">
                    <div class="d-flex gap-2 flex-wrap">
                        <x-admin.__button color="primary" type="sumbit">Primary</x-admin.__button>
                        <x-admin.__button color="secondary">Secondary</x-admin.__button>
                        <x-admin.__button color="success">Success</x-admin.__button>
                        <x-admin.__button color="warning">Warning</x-admin.__button>
                        <x-admin.__button color="danger" varient='outline'>Danger</x-admin.__button>
                        <x-admin.__button color="info" varient='label'>Info</x-admin.__button>
                        <x-admin.__button color="dark" rounded>Dark</x-admin.__button>
                    </div>
                    <div class="d-flex gap-2 flex-wrap pt-5">
                        <x-admin.__button color="primary" type='link'
                            href="https://getbootstrap.com/docs/5.2/utilities/spacing/#gap">Link</x-admin.__button>

                    </div>
                    <div class="d-flex gap-2 flex-wrap pt-5">
                        <x-admin.__button color="lable" rounded type='link' varient="outline" icon
                            href="https://getbootstrap.com/docs/5.2/utilities/spacing/#gap"><span
                                class="ti ti-edit"></span></x-admin.__button>


                        <x-admin.__button confirmableAciton confirmableTitle='Are you sure?'
                            confirmableDesc="This will delete all previous related recoreds." color="danger" rounded
                            type='link' href='https://www.google.com/' varient="outline" icon><span
                                class="ti ti-trash"></span></x-admin.__button>
                    </div>
                </x-slot:body>
            </x-admin.layout.content.__card>
        </x-admin.layout.content.__col>

    </x-admin.layout.content.__row>
@endsection
