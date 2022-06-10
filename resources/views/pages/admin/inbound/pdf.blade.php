<!DOCTYPE html>
<html>
<head>
  <title>Manifest Pdf Cargo</title>
</head>
<style>

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="margin-top: 15px ">
        <div class="pull-left">
            <center>
                <h2>Data Manifest Inbound Cargo</h2>
            </center>
        </div>

      </div>
    </div><br>

    <table class="table table-bordered" border="1">
      <thead>
        <tr>
            <th>No</th>
            <th>Id Vessel</th>
            <th>Vessel Name</th>
            <th>ETA</th>
            <th>ETD</th>
            <th>Container Number</th>
            <th>PO</th>
            <th>Description</th>
            <th>Remaks</th>
        </tr>
      </thead>
      @php
      $i = 1;
      @endphp
      <tbody>
      @foreach ($data as $i =>$item)    
      <tr>
        <td>
            {{$i+1}}
        </td>
        <td>
            <span>{{ $item->id_vessel }}</span>
        </td>
        <td class="text pe-0">
            <span>{{ $item->vessel_name }}</span>
        </td>
        <td class="text pe-0">
            <span>{{ $item->eta }}</span>
        </td>
        <td class="text pe-0">
            @if($item->etd == NULL)
            <span>Null</span>
            @else
            <span>{{ $item->etd }}</span>
            @endif
        </td>
        <td class="text pe-0">
            <span>{{ $item->container_number }}</span>
        </td>
        <td class="text pe-0">
            <span>{{ $item->po }}</span>
        </td>
        <td class="text pe-0">
            <span>{{ $item->description }}</span>
        </td>
        <td class="text pe-0">
            <span>{{ $item->remaks }}</span>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</body>
</html>