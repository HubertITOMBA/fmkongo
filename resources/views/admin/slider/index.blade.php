@extends('admin.layouts.master')

@section('content')
 <!-- Main Content -->
<section class="section">
    <div class="section-header">
        <h1>Diaporama</h1>
    </div>

    <div class="section-body">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tous les diapo</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">+ Ajouter un nouveau</a>
                    </div>
                </div>
                <div class="card-body">
                    {{  $dataTable->table() }}
                </div>
            </div>
        </div>
    </div>

    </div>
</section>


@endsection

    @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush