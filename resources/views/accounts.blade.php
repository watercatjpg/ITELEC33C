<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">I.D</th>
      <th scope="col">First</th>
      <th scope="col">Email</th>
      <th scope="col">Time created</th>
      <th scope="col">Minutes</th>
    </tr>
  </thead>
  <tbody>

     @foreach ( $users as $user )
    <tr>       
      <th scope="row">1</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>


    </tr>
    @endforeach
  </tbody>
</table>
            </div>
        </div>
    </div>
</x-app-layout>

<tr>       
      <th scope="row">1</th>
      <td>{{$user["name"]}}</td>
      <td>{{$user["id"]}}</td>
      <td>{{$user["age"]}}</td>
    </tr>