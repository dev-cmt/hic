@if(!Route::currentRouteNamed('event.reg') && !Route::currentRouteNamed('page.congratulation'))
<div class="popup-modal modal fade" tabindex="-1" id="sg-modal-add">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <!-- Close Button -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; top: -2px; right: 2px; color: #222; z-index:999;"> 
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
                <img src="{{ asset('public/frontend/images/pop-add-banner.jpg') }}" style="width:100%" alt="">
                <div class="text-center">
                    <a href="{{ route('event.reg') }}" class="btn btn-sm btn-primary mt-2">Register</a>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endif


<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Show the modal when the page loads (Bootstrap 4 version)
        $('#sg-modal-add').modal('show');
    });
</script>


<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Check if the modal has been shown before using sessionStorage
        if (!sessionStorage.getItem('modalShown')) {
            // Show the modal
            var myModal = new bootstrap.Modal(document.getElementById('sg-modal-add'), {
                backdrop: 'static',
                keyboard: false
            });
            myModal.show();

            // Store the flag in sessionStorage so that it doesn't show again
            sessionStorage.setItem('modalShown', 'true');
        }

        // Handle the "Don't show this popup again" checkbox
        document.getElementById('tnc').addEventListener('change', function () {
            if (this.checked) {
                sessionStorage.setItem('modalShown', 'true');
                myModal.hide();
            }
        });
    });
</script> -->