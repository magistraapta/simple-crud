<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach ($mhs as $m )
        <tr>
            <th scope="row">1</th>
            <td>{{ $m["nama"] }}</td>
            <td>{{ $m["NIM"] }}</td>
            <td>{{ $m["email"] }}</td>
      </tr>
    @endforeach
      
      
    </tbody>
  </table>