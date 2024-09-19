<div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast text-bg-{{ $this->msg_type }}" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="d-flex justify-content-between">
                <div class="toast-body">
                    <div class="text-white my-2">{{ $this->msg_toast }}</div>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>

        </div>
    </div>


    <div x-data x-init="@this.on('updated', event => {
        var element = document.getElementById('liveToast');
        setTimeout(function() {
            const myToast = new bootstrap.Toast(element);
            myToast.show();
        }, 100);
    })"></div>
</div>
