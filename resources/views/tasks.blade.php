<!-- tasks.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        New Task
                    </div>
                    <div class="col-md-6 text-right">
                        <!-- Dark Mode Toggle Button -->
                        <button type="button" class="btn btn-purple text-light" id="toggleDarkModeBtn">
                            <i id="darkModeIcon" class="fa fa-btn"></i>Dark Mode
                        </button>
                    </div>
                </div>
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
                            <input type="text" name="name" id="task-name" class="form-control"
                                value="{{ old('task') }}">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-purple text-light">
                                <i class="fa fa-btn fa-plus"></i>Add Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Current Tasks -->
        @if (count($tasks) > 0)
        <div class="panel panel-default">
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
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

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

<!-- JavaScript to toggle dark mode -->
<script>
    var isDarkMode = document.body.classList.contains('dark-mode');
    var toggleDarkModeBtn = document.getElementById('toggleDarkModeBtn');
    var darkModeIcon = document.getElementById('darkModeIcon');

    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
        isDarkMode = !isDarkMode;

        // Update button and icon based on mode
        if (isDarkMode) {
            toggleDarkModeBtn.classList.remove('btn-light');
            toggleDarkModeBtn.classList.add('btn-dark');
            darkModeIcon.className = 'fa fa-moon';
            toggleDarkModeBtn.textContent = 'Light Mode';
        } else {
            toggleDarkModeBtn.classList.remove('btn-dark');
            toggleDarkModeBtn.classList.add('btn-light');
            darkModeIcon.className = 'fa fa-sun';
            toggleDarkModeBtn.textContent = 'Dark Mode';
        }
    }

    // Set initial state on page load
    if (isDarkMode) {
        toggleDarkMode();
    }

    // Add event listener to the button
    toggleDarkModeBtn.addEventListener('click', toggleDarkMode);
</script>
@endsection