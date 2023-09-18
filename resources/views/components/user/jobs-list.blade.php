annonces
<tbody>
    @foreach ($annonces as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td><a href="#" style="color: black">{{ $item->title }}</a></td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->categorie->name }}</td>
            <td>
                <i class='bx bx-heart'></i>
            </td>
        </tr>
    @endforeach
</tbody>
