<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <select wire:model.live="searchTasks" class=""> 
            <option value="2">All Tasks</option>
                <option value="1">Completed</option>
                <option value="0">Uncompleted</option>
        </select>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Completed</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($tasks as $task)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><p class="{{ ($task->completed) ? "text-decoration-line-through" : "" }}">{{ $task->title }}</p></td>
                            <td><p class="{{ ($task->completed) ? "text-decoration-line-through" : "" }}">{{ $task->description }}</p></td>
                            <td>{{ ($task->completed) ? "Yes" : "No" }}</td>
                            <td>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this task?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Task Found yet!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>
                  {{ $tasks->links() }}
            </div>
        </div>
