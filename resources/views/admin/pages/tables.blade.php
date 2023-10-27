@extends('admin.layout.main')
@section('meta-title', 'Tables')


@section('content')
    <x-admin.layout.content.__row gap='4'>
        <x-admin.layout.content.__col lg="12">
            <x-admin.layout.content.__card>
                <x-slot:header>
                    <x-admin.__typography component="h4" medium>Besic Table</x-admin.__typography>
                </x-slot:header>

                <x-admin.__basic-table :headings="['#ID', 'Title', 'Slug', 'Tags', 'Action']">
                    <tr>
                        <td>1</td>
                        <td>
                            <x-admin.__typography component="a" href="https://web.whatsapp.com/" medium data-bs-toggle="modal"
                                data-bs-target="#editUser">Lorem ipsum dolor
                                sit
                                amet
                                consectetur adipisicing elit. Asperiores nihil
                                quos rerum omnis
                                laborum ea impedit nobis et nesciunt fugit?</x-admin.__typography>
                            {{-- Edit Modal Start --}}
                            <x-admin.__modal id="editUser">
                                <div class="text-center">
                                    <x-admin.__typography component='h3' class="mb-2">Edit Hotel</x-admin.__typography>
                                    <x-admin.__typography component='p' muted>Updating user details will receive a
                                        privacy
                                        audit.</x-admin.__typography>
                                </div>
                                <form action="" class="mt-2">
                                    <x-admin.layout.content.__row gap='2'>
                                        <x-admin.layout.content.__col lg="6">
                                            <x-admin.forms.__text-field name="title" label="Title"
                                                placeholder="Enter Title" inputType="text" required />
                                        </x-admin.layout.content.__col>
                                        <x-admin.layout.content.__col lg="6">
                                            <x-admin.forms.__text-field name="Age" label="Age"
                                                placeholder="Enter Age" inputType="number" required min="1"
                                                max='5' />
                                        </x-admin.layout.content.__col>
                                        <x-admin.layout.content.__col lg="6">
                                            <x-admin.__button color="primary" type="sumbit">Save</x-admin.__button>
                                        </x-admin.layout.content.__col>
                                    </x-admin.layout.content.__row>
                                </form>
                            </x-admin.__modal>
                            {{-- Edit Modal End --}}
                        </td>
                        <td class="text-nowrap">nice-slug</td>
                        <td><x-admin.layout.content.__stack gap='2'>
                                <x-admin.__badge varient="label" color="success">Success</x-admin.__badge>
                                <x-admin.__badge varient="label" color="warning">Warning</x-admin.__badge>
                            </x-admin.layout.content.__stack>
                        </td>
                        <td>
                            <x-admin.layout.content.__stack gap='0'>
                                <x-admin.__button color="lable" rounded type='link' varient="outline" icon
                                    href="https://getbootstrap.com/docs/5.2/utilities/spacing/#gap"><span
                                        class="ti ti-edit text-primary"></span></x-admin.__button>

                                <x-admin.__button confirmableAciton confirmableTitle='Are you sure?' 2
                                    confirmableDesc="This will delete all previous related recoreds." color="lable" rounded
                                    type='link' href='https://www.google.com/' varient="outline" icon><span
                                        class="ti ti-trash ti-xs text-danger"></span></x-admin.__button>
                            </x-admin.layout.content.__stack>
                        </td>
                    </tr>
                </x-admin.__basic-table>
                <x-admin.__table-pagination class="pt-5 px-4 pb-3" />

            </x-admin.layout.content.__card>
        </x-admin.layout.content.__col>

    </x-admin.layout.content.__row>
@endsection
