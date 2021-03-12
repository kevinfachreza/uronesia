

<form id="form-delete-case" action="{{url('')}}/kasus/delete/{{$kasus->id}}">
    <input type="hidden" name="id" value="{{$kasus->id}}">
    <input type="hidden"  name="jenis_kasus" value="{{$kasus->jenis_kasus}}">
</form>