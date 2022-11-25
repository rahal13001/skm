@extends('layouts.back')


@section('content')
<h2>Detail Hasil Survei</h2>
@livewireStyles
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:detailsurvei></livewire:detailsurvei>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts

@endsection
