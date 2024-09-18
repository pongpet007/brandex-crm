<div wire:ignore.self class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($this->contact_id > 0)
                    <table class="table table-striped table-hover">
                        <tr>
                            <td>Name</td>
                            <td>{{ $contact->contact_name }}</td>
                        </tr>
                        <tr>
                            <td>Nickname</td>
                            <td>{{ $contact->contact_nickname }}</td>
                        </tr>
                        <tr>
                            <td>Birthday</td>
                            <td>{{ $contact->contact_birthday }}</td>
                        </tr>
                        <tr>
                            <td>Position</td>
                            <td>{{ $contact->contact_position }}</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>{{ $contact->contact_email }}</td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>{{ $contact->contact_mobile }}</td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td>{{ $contact->contact_telephone }}</td>
                        </tr>
                        <tr>
                            <td>Line</td>
                            <td>{{ $contact->contact_line }}</td>
                        </tr>
                        <tr>
                            <td>IG</td>
                            <td>{{ $contact->contact_ig }}</td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td>{{ $contact->contact_facebook }}</td>
                        </tr>
                        <tr>
                            <td>Updated at</td>
                            <td>{{ $contact->updated_at }}</td>
                        </tr>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
