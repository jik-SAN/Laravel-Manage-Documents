<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-1 text-gray-800">Excel Export</h2>
    </x-slot>
    <div class="card-body">
                <form action="{{ route('import') }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file"
                           class="form-control">
                    <br>
                    <button class="btn btn-success">
                          Import User Data
                       </button>
                    <a class="btn btn-warning"
                       href="{{ route('export') }}">
                              Export User Data
                      </a>
                      <a class="btn btn-warning"
                       href="{{ route('pdf') }}">
                              Download PDF
                      </a>
                </form>
            </div>
    {{-- <div class="d-flex justify-content-end">
        <a href="#" class="btn btn-primary">Download as Excel</a>
    </div> --}}
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>