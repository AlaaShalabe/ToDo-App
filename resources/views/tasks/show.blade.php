@extends('heder.app')
@section('content')
    <section class="section">
        <div class="block">
            <ul>
                @if (Session::get('massage'))
                    <li>{{ Session::get('massage') }}</li>
                @endif
            </ul>
        </div>
        <div class="block">
            <h1 class="title">{{ $task->name }}</h1>
        </div>
        <div class="box">


            <div class="columns">
                <div class="column">
                    <p class="bd-notification is-info">
                        <Strong> Name : </Strong> {{ $task->name }}
                    </p>
                    <p>

                        <Strong> Description :</Strong> {{ $task->description }}
                    </p>
                    <p>
                        <Strong> Status :</Strong>
                        {{ $task->status }}
                    </p>
                    <p>
                        <Strong> Created at :</Strong>
                        {{ $task->created_at }}
                    </p>
                </div>
            </div>
            <div class="field is-grouped">
                <p class="control">
                    <a class=" button is-success is-outlined" href="{{ route('tasks.edit', $task) }}">
                        <i class="fas fa-edit"></i>
                        <span>Ediat tasks</span>
                    </a>
                </p>
                <form action="{{ route('tasks.destory', $task) }}" method="POST">
                    @csrf
                    @method('delete')
                    <p class="control">
                        <button class="button is-danger is-outlined" type="submit">
                            <span class="icon is-small">
                                <i class="fas fa-times"></i>
                            </span>
                            <span>Delete task</span>
                        </button>
                </form>
                </p>
            </div>
        </div>
    </section>
@endsection
