<div class="table-responsive">
    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
        <thead>
            <tr class="fw-bolder text-muted">
                <th class="max-w-150px">No</th>
                <th class="max-w-150px">Id Vessel</th>
                <th class="max-w-140px">Vessel Name</th>
                <th class="max-w-130px">ETA</th>
                <th class="max-w-120px">ETD</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $i => $item)
            <tr>
                <td>
                    {{$i+1}}
                </td>
                <td>
                    <span class="fw-bolder text-dark">{{ $item->id_vessel }}</span>
                </td>
                <td class="text pe-0">
                    <span class="fw-bolder text-dark">{{ $item->vessel_name }}</span>
                </td>
                <td class="text pe-0">
                    <span class="fw-bolder text-dark">{{ $item->eta }}</span>
                </td>
                <td class="text pe-0">
                    @if($item->etd == NULL)
                    <span class="fw-bolder text-grey">Null</span>
                    @else
                    <span class="fw-bolder text-dark">{{ $item->etd }}</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $collection->links('theme.web.pagination') }}