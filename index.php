<?php
include 'b.php';
?>

    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h4 class="fw-bolder">Tu IP Pública</h4>
        <div class="badge text-bg-secondary">
            <?php
            // Obtiene la dirección IP del cliente
            $ip_address = $_SERVER['REMOTE_ADDR'];

            // Muestra la dirección IP del cliente
            echo "<h1 id='ip-address' class='fw-bolder'>" . $ip_address . "</h1>";
            ?>
        </div><br>

        <span> Clickea para Copiar : )</span>

        <br>
        <br>
        <a href="https://vhoda.cl" class="nav-link fw-bolder">vhoda</a>
    </div>
    <div class="toast-container">
        <div class="toast text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <div class="d-flex gap-4">
                    <span class="text-light"><i class="fa-solid fa-circle-info fa-lg"></i></span>
                    <div class="d-flex flex-grow-1 align-items-center">
                        <span class="fw-semibold">¡Copiado!</span>
                        <button type="button" class="btn-close btn-close-sm btn-close-black ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function copyToClipboard(elementId) {
            var element = document.getElementById(elementId);
            var tempInput = document.createElement("input");
            tempInput.value = element.textContent;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
        }

        $(document).ready(function() {
            $('#ip-address').click(function() {
                copyToClipboard('ip-address');
                $(this).addClass('text-success');
                $('.badge').removeClass('text-bg-secondary').addClass('text-bg-light');
                $('.badge').addClass('clicked'); // Agregamos la clase "clicked" al badge
                $('.toast').toast('show');
                setTimeout(function() {
                    $('#ip-address').removeClass('text-success');
                    $('.badge').removeClass('clicked'); // Quitamos la clase "clicked" después de 0.3 segundos
                    $('.badge').addClass('text-bg-secondary').removeClass('text-bg-light');
                }, 300);
            });
        });
    </script>

</body>

</html>