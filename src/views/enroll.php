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
    <script src="src/js/enroll.js"></script>

    <div class=".container-fluid">
        <div class="row" style="padding: 5rem;">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="#" onsubmit="return false">
                            <div id="enrollmentStatusField" class="text-center">
                                <!--Enrollment Status will be displayed Here-->
                            </div>
                            <div class="form-row mt-3">
                                <div class="col mb-3 mb-md-0 text-center">
                                    <label for="enrollReaderSelect" class="my-text7 my-pri-color">Choose Fingerprint
                                        Reader</label>
                                    <select name="readerSelect" id="enrollReaderSelect" class="form-control"
                                        onclick="beginEnrollment()">
                                        <option selected>Select Fingerprint Reader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <div class="col mb-3 mb-md-0 text-center">
                                    <label for="userID" class="my-text7 my-pri-color">Specify UserID</label>
                                    <input id="userID" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row mt-1">
                                <div class="col text-center">
                                    <p class="my-text7 my-pri-color mt-3">Capture Index Finger</p>
                                </div>
                            </div>
                            <div id="indexFingers" class="form-row justify-content-center">
                                <div id="indexfinger1" class="col-3 mb-3 mb-md-0 text-center">
                                    <span class="icon icon-indexfinger-not-enrolled" title="not_enrolled"></span>
                                </div>
                                <div id="indexfinger2" class="col-3 mb-3 mb-md-0 text-center">
                                    <span class="icon icon-indexfinger-not-enrolled" title="not_enrolled"></span>
                                </div>
                                <div id="indexfinger3" class="col-3 mb-3 mb-md-0 text-center">
                                    <span class="icon icon-indexfinger-not-enrolled" title="not_enrolled"></span>
                                </div>
                                <div id="indexfinger4" class="col-3 mb-3 mb-md-0 text-center">
                                    <span class="icon icon-indexfinger-not-enrolled" title="not_enrolled"></span>
                                </div>
                            </div>
                            <div class="form-row mt-1">
                                <div class="col text-center">
                                    <p class="my-text7 my-pri-color mt-5">Capture Middle Finger</p>
                                </div>
                            </div>
                            <div id="middleFingers" class="form-row justify-content-center">
                                <div id="middleFinger1" class="col-3 mb-3 mb-md-0 text-center">
                                    <span class="icon icon-middlefinger-not-enrolled" title="not_enrolled"></span>
                                </div>
                                <div id="middleFinger2" class="col-3 mb-3 mb-md-0 text-center">
                                    <span class="icon icon-middlefinger-not-enrolled" title="not_enrolled"></span>
                                </div>
                                <div id="middleFinger3" class="col-3 mb-3 mb-md-0 text-center">
                                    <span class="icon icon-middlefinger-not-enrolled" title="not_enrolled"></span>
                                </div>
                                <div id="middleFinger4" class="col-3 mb-3 mb-md-0 text-center" value="true">
                                    <span class="icon icon-middlefinger-not-enrolled" title="not_enrolled"></span>
                                </div>
                            </div>
                            <div class="form-row m-3 mt-md-5 justify-content-center">
                                <div class="col-4">
                                    <button class="btn btn-primary btn-block my-sec-bg my-text-button py-1"
                                        type="submit" onclick="beginCapture()">Start Capture</button>
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-primary btn-block my-sec-bg my-text-button py-1"
                                        type="submit" onclick="serverEnroll()">Enroll</button>
                                </div>
                                <div class="col-4">
                                    <button
                                        class="btn btn-secondary btn-outline-warning btn-block my-text-button py-1 border-0"
                                        type="button" onclick="clearCapture()">Clear</button>
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

</html>
