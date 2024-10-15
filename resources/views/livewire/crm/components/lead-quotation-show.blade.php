<div>
    <table class="table">
        <tr class="bg-secondary">
            <td class="text-white">Created Date</td>
            <td class="text-white">Items</td>
            <td class="text-white">Amount</td>
            <td class="text-white">Status</td>
            <td class="text-white">Action</td>
        </tr>
        @foreach ($quotations as $quotation)
            <tr class="{{ $quotation->is_active == 1 ? 'bg-success bg-opacity-10' : '' }}">
                <td class="">{{ $quotation->created_at }}</td>
                <td class="">{{ $quotation->code }} </td>
                <td class="">{{ number_format($quotation->items->sum('price'), 0) }}</td>
                <td class="">{{ $quotation->is_active == 1 ? 'active' : 'inactive' }}</td>
                <td class="">
                    <a href="#" wire:click="$dispatch('edit-quotation', { quote_id: {{ $quotation->quote_id }} })"
                        data-bs-toggle="modal" data-bs-target="#leads-invoice-create-modal"
                        class="btn btn-sm btn-info">Detail</a>
                    <a href="{{ url("/quotationPdf/$quotation->quote_id") }}" target="pdf{{ $quotation->quote_id }}"
                        class="btn btn-sm btn-warning">PDF</a>
                    @if ($quotation->is_active == 1)
                        <button type="button" wire:confirm=' set to inactive ?'
                            wire:click='setinactive({{ $quotation->quote_id }})' class="btn btn-sm btn-success">set
                            inactive</button>
                    @else
                        <button type="button" wire:confirm=' set to active ?'
                            wire:click='setactive({{ $quotation->quote_id }})' class="btn btn-sm btn-danger">set
                            cctive</button>
                    @endif

                </td>
            </tr>
        @endforeach

    </table>
</div>
