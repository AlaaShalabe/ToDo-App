@extends('heder.app')
@section('content')
    <section class="section">
        <div class="block ">
            <ul>
                @if (Session::get('massage'))
                    <li>{{ Session::get('massage') }}</li>
                @endif
            </ul>
        </div>
        <div class="mr-6 ml-6">
            <div class="table-container">
                <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Tasks</th>
                            <th>Time to create</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($tasks as $task)
                        <tbody>
                            <tr>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->created_at }}</td>
                                <td>

                                    <form action="{{ route('tasks.destory', $task) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('tasks.edit', $task) }}">
                                            <i class="fa-solid fa-pen-to-square fa-xl"></i></a>
                                        <a href="{{ route('tasks.show', $task) }}"><i
                                                class="fa-sharp fa-solid fa-eye fa-xl"></i></a>
                                        <button class="delete " type="submit">
                                        </button>
                                    </form>


                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection
