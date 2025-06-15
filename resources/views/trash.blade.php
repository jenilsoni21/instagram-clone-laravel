@include('header')

<title>Instagram</title>


<div>
    <h1 class="text-white text-center">Recycle Bin</h1>
</div>
<div class="container">
    <div class="table-responsive">
        <table class="table table-primary text-white">
            <thead>
                <tr>
                    <th scope="col">Mobile</th>
                    <th scope="col">Name</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <pre>
                @foreach ($users as $user)
                    <tr class="text-white">
                        <td>{{ $user->mobile_number }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->password }}</td>
                        <td class="text-center">
                            <a href="{{route('destroyUser', ['id' => $user->id])}}" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="{{route('restoreUser', ['id' => $user->id])}}" class="btn btn-primary">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@include('footer')
