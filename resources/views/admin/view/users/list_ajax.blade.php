@if(isset($users) && $users->isNotEmpty())
    @foreach($users AS $row)
        <tr>
            <td>{{ $row->name ?? '' }}</td>
            <td>{{ $row->mobile_no ?? '' }}</td>
            <td>{{ $row->email ?? '' }}</td>
            <td>{{ $row->birth_date ?? '' }}</td>
            <td>{{ $row->city_name ?? '' }}</td>
            <td>
                <div class="td-actions">
                    <a href="#" data-id="{{ base64_encode($row->id) ?? '' }}" class="icon red edit" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="icon-edit"></i>
                    </a>
                    <a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="De-Activate">
                        <i class="icon-sync_problem"></i>
                    </a>
                    <a href="#" class="icon red delete" data-toggle="tooltip" data-placement="top" title="Change Password">
                        <i class="icon-vpn_key"></i>
                    </a>
                </div>
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="7"><h5 class="text-center">No Data Found...!!!</h5></td>
    </tr>
@endif
