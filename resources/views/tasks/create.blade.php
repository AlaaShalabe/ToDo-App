@extends('heder.app')
@section('content')
    <section class="section">
        <div class="block">
            <h1 class="title">Creata New Task</h1>
        </div>
        <div class="block">
            <ul>
                @foreach ($errors->all() as $error)
                @endforeach
            </ul>
        </div>
        <div class="block ">
            <div class="box">
                <form method="POST" action="{{ route('tasks.store') }}">
                    @csrf
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" name="name" placeholder="Text input">
                            @error('name')
                                <div class="help is-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea @error('description')is-danger @enderror" name="description" placeholder="Textarea"
                                id="editor">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="help is-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Status</label>
                        <div class="control">
                            <div class="select">
                                <select name="status">
                                    <option value="complated">Complated</option>
                                    <option value="dismiss">Dismiss</option>
                                    <option value="snooze">Snooze</option>
                                </select>
                            </div>
                            @error('status')
                                <div class="help is-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-info">Create</button>
                        </div>
                        <div class="control">
                            <button class="button is-info is-light">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
