@extends('admin.layout.main')
@section('meta-title', 'Forms')


@section('content')
    <x-admin.layout.content.__row gap='4'>
        <x-admin.layout.content.__col lg="6">
            <x-admin.layout.content.__card>
                <x-slot:header class="border-bottom">Text Fields</x-slot:header>
                <x-slot:body class="pt-2">


                    <x-admin.forms.__text-field name="error" label="Error" placeholder="Error" inputType="text" error
                        helpText="Error field is required" class="mb-2" />

                    <x-admin.forms.__text-field name="name" label="Password" placeholder="············"
                        inputType="password" helpText="Strong password is recomended." class="mb-2" />

                    <x-admin.forms.__text-field name="search" placeholder="Search" inputType="text" class="mb-2"
                        inputPrefix="<i class='ti ti-search'></i>" class="mt-3" />




                </x-slot:body>
            </x-admin.layout.content.__card>
        </x-admin.layout.content.__col>
        <x-admin.layout.content.__col lg="6">
            <x-admin.layout.content.__card>
                <x-slot:header class="border-bottom">Select Fields</x-slot:header>
                <x-slot:body class="pt-2">


                    <x-admin.forms.__select-field label="Select Field" name="select2" class="mt-3" :options="[
                        'h' => 'Hawaii',
                        'c' => 'California',
                        'n' => 'Nevada',
                        'o' => 'Oregon',
                        'w' => 'Washington',
                    ]"
                        value="o" />

                    <x-admin.forms.__select-field multiple label="Multiple Select Field" name="select2Multiple"
                        class="mt-3" :options="[
                            'h' => 'Hawaii',
                            'c' => 'California',
                            'n' => 'Nevada',
                            'o' => 'Oregon',
                            'w' => 'Washington',
                        ]" :value="['w', 'n']" />



                    <x-admin.forms.__select-field tagify label="Tagify Select Field" name="tagify-select"
                        placeholder="Select tags" class="mt-3" :options="['Hawaii', 'California', 'Nevada', 'Oregon', 'Washington']" :value="['Nevada', 'Hawaii']" />




                </x-slot:body>
            </x-admin.layout.content.__card>
        </x-admin.layout.content.__col>
        <x-admin.layout.content.__col lg="6">
            <x-admin.layout.content.__card>
                <x-slot:header class="border-bottom">Switch Box</x-slot:header>
                <x-slot:body class="pt-2">


                    <x-admin.forms.__switch-field label="Is Post Read?" name="switch" class="mt-3" helpText="sadf" />


                </x-slot:body>
            </x-admin.layout.content.__card>
        </x-admin.layout.content.__col>
        <x-admin.layout.content.__col lg="6">
            <x-admin.layout.content.__card>
                <x-slot:header class="border-bottom">File Field</x-slot:header>
                <x-slot:body class="pt-2">


                    <x-admin.forms.__file-field label="Besic File" name="basic-file" class="mt-3" multiple
                        helpText="Only jpg and png file allowed." />



                </x-slot:body>
            </x-admin.layout.content.__card>
        </x-admin.layout.content.__col>
        <x-admin.layout.content.__col lg="12">
            <x-admin.layout.content.__card>
                <x-slot:header class="border-bottom">DatePickers</x-slot:header>
                <x-slot:body class="pt-2">



                    <x-admin.layout.content.__row>
                        <x-admin.layout.content.__col sm='3'>
                            <x-admin.image src="https://i.ytimg.com/vi/RL6tLbeMt2A/maxresdefault.jpg" alt="mewa" />
                        </x-admin.layout.content.__col>
                    </x-admin.layout.content.__row>

                    <x-admin.forms.__datepicker-field label="Bootstrap Datepicker" name="b-datepicker" class="mt-3"
                        placeholder="Select date" />
                    <x-admin.forms.__datepicker-field label="Bootstrap Datepicker" horizontal name="bs-datepicker"
                        class="mt-3" helpText="Default date sate here" placeholder="Select date"
                        value="{{ now()->format('d/m/Y') }}" />


                </x-slot:body>
            </x-admin.layout.content.__card>
        </x-admin.layout.content.__col>
    </x-admin.layout.content.__row>
@endsection
