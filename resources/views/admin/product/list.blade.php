@extends('admin.main')

@section('content')

<table>
    <thead>
        <tr>
            <th style="width: 50px;">ID</th>
            <th style="width: 150px;">Name</th>
            <th style="width: 150px;">IsActive?</th>
            <th style="width: 150px;">Update date</th>
            <th style="width: 150px;">Category</th>
            <th style="width: 100px;">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        {!!
            \App\BusinessHelper\BusinessMappingHelper::product($products)
        !!}
    </tbody>
    
</table>

    
</select>
@endsection