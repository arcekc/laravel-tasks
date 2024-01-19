@extends('layouts.app')

@section('content')
    <div class="container dark-mode">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                    <span id="theme-toggle" class="theme-toggle" onclick="toggleTheme()">
                        <i class="fa fa-sun-o"></i>
                        <i class="fa fa-moon-o"></i>
                    </span>
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="/task" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default dark-mode">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{'/task/' . $task->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
            <!-- Elapsed time -->
            <div class="panel panel-default">
                <div class="panel-body">
                    Response time: {{ $elapsed * 1000 }} milliseconds.
                </div>
            </div>
        </div>
    </div>

    <!-- Include Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-4o5+DEhRU9L6eg4KBE5Gg/YtsJHvzMy0dFN2skx7T+K9GSaTy96Hzc8YHlpRbb+8SR5YW7fwkRhmqRLAtHGo/g==" crossorigin="anonymous" />

    <!-- Theme toggle styles and script -->
    <style>
        .theme-toggle {
            cursor: pointer;
            float: right;
        }

        body.dark-mode, div.dark-mode {
            background-color: #171923;
            color: #fff;
        }
    </style>

    <script>
        function toggleTheme() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
@endsection
