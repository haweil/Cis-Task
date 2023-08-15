<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <style>
    .app-container {
        height: 100vh;
        width: 100%;
    }

    .complete {
        text-decoration: line-through;
    }
    </style>
</head>

<body>
    <div class="app-container d-flex align-items-center justify-content-center flex-column" ng-app="myApp"
        ng-controller="myController">
        {{ task_name }}
        <h3>Todo App</h3>
        <div class="d-flex align-items-center mb-3">
            <div class="form-group mr-3 mb-0">
                <input ng-model="yourTask" type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="Enter a task here" />
            </div>
            <button type="button" class="btn btn-primary mr-3" ng-click="saveTask()">
                Save
            </button>
            <button type="button" class="btn btn-warning" ng-click="getTask()">
                Get Tasks
            </button>
        </div>
        {{ yourName }}
        <div class="table-wrapper">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Todo item</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="task in tasks" class="{{ task.status ? 'table-success' : 'table-light' }}">
                        <td>{{ $index + 1 }}</td>
                        <td class="{{ task.status ? 'complete' : 'task' }}">
                            {{ task.task_name }}
                        </td>
                        <td>{{ task.status ? "Completed" : "In progress" }}</td>
                        <td>
                            <button class="btn btn-danger" ng-click="delete($index)">
                                Delete
                            </button>
                            <button class="btn btn-success" ng-click="finished($index)">
                                Finished
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>