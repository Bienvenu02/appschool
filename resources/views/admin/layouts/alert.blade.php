@if (session('success') || session('error') || session('warning'))
    <script>
        $(function() {
            @if (session('success') || session('error'))
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 6000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });

                Toast.fire({
                    icon: "{{ session('success') ? 'success' : 'error' }}",
                    title: "{{ session('success') ?? session('error') }}"
                });
            @elseif (session('warning'))
                Swal.fire({
                    icon: "warning",
                    title: "Attention",
                    text: "{!! html_entity_decode(session('warning')) !!}"
                });
            @endif
        });
    </script>
@endif
