<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        <th scope="col">Password</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach ($mhs as $m )
        <tr>
          <a href="/detail">
            <th scope="row"><a href="/detail/{{ $m["id"] }}">{{ $m["id"] }}</a></th>
            <td>{{ $m["nama"] }}</td>
            <td>{{ $m["NIM"] }}</td>
            <td>{{ $m["password"] }}</td>
          </a>
      </tr>
    @endforeach
      
      
    </tbody>
  </table>