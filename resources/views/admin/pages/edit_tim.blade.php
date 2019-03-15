@extends('admin.layouts.base')

{{--Page Title--}}

@section('title', 'Test TItle')

{{--Custom CSS--}}

@section('css')

@endsection

{{--App Title--}}

@section('app-title', 'Edit tim')
@section('app-description', '')

{{--Content--}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit Tim</h3>
                <form method="post" action="{{ route('admin.tim.update', ['tim' => $tim->id]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="titlePost">Nama Tim</label>
                        <input class="form-control" id="titlePost" type="text" aria-describedby="titleHelp" name="nama_tim"
                               placeholder="Enter Title" value="{{ $tim->nama_tim }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleSelect1">Ketua Tim</label>
                        <select class="form-control" id="" name="ketua">
                            <option value="{{ $tim->mahasiswa->nim }}">{{ $tim->mahasiswa->nama }}</option>
                            @foreach($pesertas as $peserta)
                                <option value="{{ $peserta->mahasiswa->nim }}">{{ $peserta->mahasiswa->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

{{--Custom Javascript--}}

@section('js')

@endsection