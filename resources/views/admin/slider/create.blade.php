@extends('admin.layouts.master')

@section('content')
 <!-- Main Content -->
<section class="section">
    <div class="section-header">
        <h1>Diaporama</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Table</div>
        </div>
    </div>

    <div class="section-body">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Créer un nouveau diapo</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Bannière</label>
                            <input type="file" class="form-control" name="banner">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" name="type" value="{{old('type')}}">
                        </div>
                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <label>Participation</label>
                            <input type="text" class="form-control" name="starting_price" value="{{old('starting_price')}}">
                        </div>
                        <div class="form-group">
                            <label>Button Url</label>
                            <input type="text" class="form-control" name="btn_url" value="{{old('btn_url')}}">
                        </div>
                        <div class="form-group">
                            <label>Serial</label>
                            <input type="text" class="form-control" name="serial" value="{{old('serial')}}">
                        </div>
                        <div class="form-group">
                            <label for="inputState">Statut</label>
                            <select id="inputState" class="form-control"  name="status">
                                <option value="1">Actif</option>
                                <option value="0">Inactif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Créer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
@endsection
