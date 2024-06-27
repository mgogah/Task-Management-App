<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <select wire:model.live="searchTasks" class="border p-1 text-slate-600 text-lg rounded mb-2"> 
            <option value="3">كل المهام</option>
                <option value="1">منجزة</option>
                <option value="0">غير منجزة</option>
        </select>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">العنوان</th>
                        <th scope="col">الوصف</th>
                        <th scope="col">منجزة</th>
                        <th scope="col">إعدادات</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($tasks as $task)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td><p class="{{ ($task->completed) ? "text-decoration-line-through" : "" }}">{{ $task->title }}</p></td>
                            <td><p class="{{ ($task->completed) ? "text-decoration-line-through" : "" }}">{{ $task->description }}</p></td>
                            <td>{{ ($task->completed) ? "نعم" : "لا" }}</td>
                            <td>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-warning btn-sm m-2"><i class="bi bi-eye"></i> عرض</a>

                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm m-2"><i class="bi bi-pencil-square"></i> تعديل</a>   

                                    <button type="submit" class="btn btn-danger btn-sm m-2" onclick="return confirm('هل تريد حذف المهمة؟');"><i class="bi bi-trash"></i> حذف</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>لم يتم العثور على أي مهمة</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>
                  {{ $tasks->links() }}
            </div>
        </div>
