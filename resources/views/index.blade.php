@extends('layouts/tareas')

@section('content')
    <div class="container w-25 border p-4 mt-4">

        <form>
            <div class="mb-3">
              <label for="title" class="form-label">nombre de la tarea</label>
              <input type="text" class="form-control" name="title">
            </div>
            <button type="submit" class="btn btn-primary">crear nueva tarea</button>
          </form>

    </div>
@endsection
