<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="src/css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<script>
    function startCaptureAfterDelay() {
        setTimeout(function () {
            captureForIdentify();
        }, 1000); // Adjust the delay time as needed
    }
    


</script>

<body onload="beginIdentification()">
    <script src="src/js/jquery-3.5.0.min.js"></script>
    <script src="src/js/es6-shim.js"></script>
    <script src="src/js/websdk.client.bundle.min.js"></script>
    <script src="src/js/fingerprint.sdk.min.js"></script>
    <script src="src/js/auth.js"></script>



    <div class=".container-fluid">
        <div class="row" style="padding: 5rem;">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="#" onsubmit="return false">
                            <div id="verifyIdentityStatusField" class="text-center">
                                <!--verifyIdentity Status will be displayed Here-->
                            </div>
                            <div class="form-row mt-3 invisible">
                                <div class="col mb-3 mb-md-0 text-center">
                                    <label for="verifyReaderSelect">Choose Fingerprint
                                        Reader</label>
                                    <select name="readerSelect" id="verifyReaderSelect" class="form-control" 
                                        >
                                        <option selected>Select Fingerprint Reader</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <div class="col mb-md-0">
                                    <input placeholder="Enter User ID" onchange="captureForIdentify()" type="text" id="userIDVerify" class="form-control mt-1" required>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col text-center">
                                    <p>Capture Verification Finger</p>
                                </div>
                            </div>
                            <div id="verificationFingers" class="form-row justify-content-center">
                                <div id="verificationFinger" class="col mb-md-0 text-center">
                                    <span class="icon icon-indexfinger-not-enrolled" title="not_enrolled"></span>
                                </div>
                            </div>
                            <div class="form-row mt-3" id="userDetails">
                                <!--this is where user details will be displayed-->
                            </div>
                            <div class="form-row m-3 mt-md-5 justify-content-center">
                                <div class="col text-center">
                                    <!-- <button id="startCaptureButton"
                                        class="btn btn-primary btn-block my-sec-bg my-text-button py-1" type="submit"
                                        onclick="captureForIdentify()">Start Capture</button> -->


                                    <!-- <button variant="primary" 
                                        type="submit" onclick="serverIdentify()">Login</button> -->
                                        <button id="loginButton" type="button" class="btn btn-primary" onclick="serverIdentify()">Login</button>


                                    <!-- <button
                                        class="btn btn-secondary btn-outline-warning btn-block my-text-button py-1 border-0"
                                        type="button" onclick="clearCapture()">Clear</button> -->

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
<!-- <script>
    window.onload(validateForm())
</script> -->

</html>