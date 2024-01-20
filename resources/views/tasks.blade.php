@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <!-- New Task Panel on the left side -->
            <div class="panel panel-default">
                <div class="panel-heading nav-new d-flex justify-content-between">
                    <span class="title">New Task</span>
                    <span id="theme-toggle" class="btn-purple" onclick="toggleTheme()">
                        <i id="sun-icon" class="fa fa-sun-o"></i>
                        <i id="moon-icon" class="fa fa-moon-o"></i>
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
                                <input type="text" name="name" id="task-name" class="form-control"
                                    value="{{ old('task') }}" />
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

            <!-- Current Tasks Panel on the left side -->
            @if (count($tasks) > 0)
            <div class="panel panel-default dark-mode">
                <div class="panel-heading">
                    <span class="title"> Current Tasks</span>
                </div>
                <div class="panel-body">
                    <table class="table task-table">
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
                                        {{ csrf_field() }} {{ method_field('DELETE') }}

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

            <!-- Elapsed time Panel on the left side -->
            <div class="panel panel-default">
                <div class="panel-body">
                    Response time: {{ $elapsed * 1000 }} milliseconds.
                </div>
            </div>
        </div>

        <!-- Chatbot container on the right side -->
        <div class="col-sm-4">
            <div id="chatbot-container">
                <iframe
                    src="https://webchat.botframework.com/embed/task-trackr-language-ict723-bot?s=KYBps-JgV8o.ODplUsoQp0W0oKnZ63wL8JyUObrAlmp-3F4Nl3nt1e8"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Include Font Awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-4o5+DEhRU9L6eg4KBE5Gg/YtsJHvzMy0dFN2skx7T+K9GSaTy96Hzc8YHlpRbb+8SR5YW7fwkRhmqRLAtHGo/g=="
    crossorigin="anonymous" />

<!-- Theme toggle styles and script -->
<style>
    .theme-toggle {
        cursor: pointer;
        float: right;
    }

    body.dark-mode {
        background-color: #252525;
        color: #fff;
    }

    body {
        background-color: inherit;
        color: inherit;
    }

    .panel.panel-default,
    .panel-heading,
    .panel-body,
    .form-control,
    .table,
    .title,
    .webchat--css-birrx-1egyv3b,
    .webchat--css-birrx-1bfjcn2.webchat__send-box .webchat__send-box__main,
    #chatbot-container,
    iframe {
        background-color: inherit;
        color: inherit;
    }

    .panel-heading {
        color: #fff;
    }

    .icon-btn {
        background-color: #6c63ff;
        padding: 10px;
        border-radius: 5px;
        margin-left: 5px;
    }

    #sun-icon {
        display: none;
    }

    body.dark-mode #sun-icon {
        display: inline;
    }

    #moon-icon {
        display: inline;
    }

    body.dark-mode #moon-icon {
        display: none;
    }

    #chatbot-container {
        /* min-width: 400px; */
        /* width: 100%; */
        /* min-height: 500px; */
        border: 1px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
        /* margin-bottom: 20px; */
    }

    #chatbot-container iframe {
        width: 100%;
        min-height: 500px;
        border: none;
        background-color: inherit;
        /* Set background color */
        font-family: 'Lato';
    }


    body.dark-mode #chatbot-container {
        background-color: #252525;
    }

    .webchat--css,
    .webchawebchat__send-box__main {
        background-color: inherit;
        color: white;
    }
</style>

<script>
    function toggleTheme() {
        document.body.classList.toggle("dark-mode");
        document.querySelector('#chatbot-container').classList.toggle("dark-mode");
    }

    function setIframeStyles() {
        const iframe = document.querySelector('#chatbot-container iframe');
        if (iframe) {
            const iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
            if (iframeDocument) {
                iframeDocument.body.style.backgroundColor = 'inherit';
                iframeDocument.body.style.color = 'inherit';
            }
        }
    }
</script>
@endsection