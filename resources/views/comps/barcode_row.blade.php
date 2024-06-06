<tr>
    <th>
        <input type="text" value="{{ $product->id }}">
    </th>
    <td>
        <input type="text" value="{{ $product->batch_status }}">
    </td>
    <td>
        <input type="text" value="{{ $product->item_code }}">
    </td>
    <td>
        <input type="text" value="{{ $product->item_name}}">
    </td>
    <td>
        <input type="text" value="{{ $product->location_code }}">
    </td>
    <td>
        <input type="text" value="{{ $product->store }}">
    </td>

     <td>
        <input type="text" value="{{ $product->grn_batch_id }}">
    </td>
    <td>
        <input type="text" value="{{ $product->arn_id }}">
    </td>
    <td>
        <input type="text" value="{{ $product->container_no}}">
    </td>
     {{--  <td>
        <input type="text" value="{{ $product->container_status }}">
    </td>    --}}
     <td>
        <input type="text" value="{{ $product->brand_name }}">
    </td>
    <td>
        <input type="text" value="{{ $product->unit }}">
    </td>
    <td>
        <input type="text" value="{{ $product->quantity_of_product }}">
    </td>
    <td>
        <input type="text" value="{{ $product->weightPerPackage }}">
    </td>

    <td>
        <input type="text" value="{{ $product->totalWeight }}">
    </td>

     <td>
        <input type="text" value="{{ $product->item_description }}">
    </td>
    <td>
        <input type="text" value="{{ $product->batch_no }}">
    </td>
    <td>
        <input type="text" value="{{ $product->uom_branch }}">
    </td>
    <td>
        <input type="text" value="{{ $product->mfg_dt }}">
    </td>

     <td>
        <input type="text" value="{{ $product->exp_dt }}">
    </td>
    {{-- <td>
         <input type="text" value="{{ $product->no_of_cont }}"> 
    </td> --}}
    <td>
        <input type="text" value="{{ $product->pack_size }}">
    </td>
    <td>
        <input type="text" value="{{ $product->count_no }}">
    </td>

    <td>
        <input type="text" value="{{ $product->rec_qty }}">
    </td>
    <td>
        <input type="text" value="{{ $product->manufacturer }}">
    </td>

     <td>
        <input type="text" value="{{ $product->supplier }}">
    </td>
    <td>
        <input type="text" value="{{ $product->grn_no }}">
    </td>
    <td>
        <input type="text" value="{{ $product->grn_date }}">
    </td>
    <td>
        <input type="text" value="{{ $product->format_no }}">
    </td>
   
    {{-- <td>
        <input type="text" value="{{ $product->printed_by }}">
    </td> --}}
    <td> 
    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($product->bar_code, 'C39') }}" alt="barcode"/>
    </td>
    <td>
        {{--  <button>Test</button>  --}}
        <form action="{{ route('print', ['id' => $product->id]) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Show Label</button>
        </form>
    </td>
   
</tr>