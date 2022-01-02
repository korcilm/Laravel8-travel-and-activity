<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Yer</th>
        <th>Yorum</th>
        <th>Yıldız</th>
        <th>Durum</th>
        <th>Tarih</th>
        <th>Sil</th>
    </tr>
    </thead>
    <tbody>
    @include('home.message')
    @foreach($datalist as $rs)
        <tr>
            <td>{{$rs->id}}</td>
            <td><a href="{{route('place',['id'=>$rs->product->id])}}" target="_blank">{{$rs->place->title}}</a></td>
            <td>{{$rs->comment}}</td>
            <td>{{$rs->rate}}</td>
            <td>{{$rs->status}}</td>
            <td>{{$rs->created_at}}</td>
            <td>
                <a href="{{route('admin_comment_delete',['id'=>$rs->id])}}" onclick="return confirm('delete Are you sure')"></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
