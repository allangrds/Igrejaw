@extends('panel.base')

@section('panel_content')
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li class="is-active"><a href="#">Membros da igreja</a></li>
            <li class="is-active"><a href="#">Criar</a></li>
        </ul>
    </nav>

    <section class="hero is-small">
        <div class="hero-body">
            <h1 class="title">
                Criação
            </h1>
            <h2 class="subtitle">
                de membros da igreja
            </h2>
        </div>
    </section>

    <div class="columns">
        <div class="column">
            @if (session('message'))
                <div class="notification is-success">
                    {{ session('message') }}
                </div>
            @endif

            @if ($errors->has('page'))
                <div class="notification is-danger">
                    {{ $errors->first('page') }}
                </div>
            @endif
        </div>
    </div>

    <div class="box">
        <form method="POST" action="{{ route('panel_church_members_update', ['id' => $member->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label" for="name">Nome</label>
                        <div class="control">
                            <input
                                autofocus
                                class="input"
                                id="name"
                                name="name"
                                placeholder="Nome"
                                required
                                type="text"
                                value="{{ old('name') ? old('name') : $member->name }}"
                            />
                            @if ($errors->has('name'))
                                <span class="has-text-danger" role="alert">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="born_at">Data de nascimento</label>
                        <div class="control">
                            <input
                                class="input"
                                id="born_at"
                                name="born_at"
                                placeholder="Data de nascimento"
                                required
                                type="date"
                                value="{{ old('born_at') ? old('born_at') : $member->born_at->format('Y-m-d') }}"
                            />
                            @if ($errors->has('born_at'))
                                <span class="has-text-danger" role="alert">
                                    {{ $errors->first('born_at') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="file-input">Foto</label>
                        <img
                            src="/storage/images/photos/{{ $member->image }}"
                            alt="{{ $member->name }}"
                        />
                        <div class="control">
                            <div class="file">
                                <label class="file-label">
                                    <input id="file-input" class="file-input" type="file" name="photo" />
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Escolha um arquivo...
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <p class="filename"></p>
                            @if ($errors->has('photo'))
                                <span class="has-text-danger" role="alert">
                                    {{ $errors->first('photo') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <button class="button is-primary">Criar</button>
                </div>
            </div>
        </form>
    </div>
@endsection