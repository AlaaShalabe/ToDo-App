@extends('heder.app')
@section('content')
    <section class="section">
        <div class="block">
            <h1 class="title">Edit the {{ $task->name }} task</h1>
        </div>
        <div class="block ">
            <div class="box">
                <form method="POST" action="{{ route('tasks.update', $task) }}">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" name="name" value="{{ old('name', $task->name) }}"
                                placeholder="Text input">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea @error('description')is-danger @enderror" name="description" placeholder="Textarea"
                                id="editor">{{ old('description', $task->description) }}</textarea>
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
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-info">Edit</button>
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
