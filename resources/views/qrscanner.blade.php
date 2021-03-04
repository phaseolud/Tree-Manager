<x-custom-layout>
    <div class="mt-2 px-2"><p class="text-xl">Scan een boom QR code</p>
        <div class="w-full flex justify-center">
            <video id="qr-video" style="display: none"></video>
        </div>
        <b>Gedetecteerde QR code: </b>
        <span id="cam-qr-result">None</span>
        <br></div>
    <script type="module">
        import QrScanner from '/js/qr-scanner.min.js';
        QrScanner.WORKER_PATH = '/js/qr-scanner-worker.min.js';
        const video = document.getElementById('qr-video');
        const camQrResult = document.getElementById('cam-qr-result');
        const base_url = window.location.origin;

        function setResult(label, result) {
            let tree_id = null;
            let result_array = result.split('/');
            let result_url = result_array[0] + '//' + result_array[2];
            if (base_url === result_url && result_array[3] === 'trees') {
                scanner.stop();
                let tree_id = result_array[4];

                window.location.href = '/trees/' + tree_id;
            }
        }

        // ####### Web Cam Scanning #######

        const scanner = new QrScanner(video, result => setResult(camQrResult, result), error => {
            camQrResult.textContent = error;
            camQrResult.style.color = 'inherit';
        });
        scanner.start().then(() => {});
        video.parentNode.insertBefore(scanner.$canvas,video.nextSibling);

    </script>
</x-custom-layout>
