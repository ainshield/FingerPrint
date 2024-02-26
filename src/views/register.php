<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/custom.css">
</head>

<iframe id="myFrame" src="http://localhost:5173" style="display: none;"></iframe>

<body onload="beginEnrollment()">
    <script src="src/js/jquery-3.5.0.min.js"></script>
    <script src="src/js/bootstrap.bundle.js"></script>
    <script src="src/js/es6-shim.js"></script>
    <script src="src/js/websdk.client.bundle.min.js"></script>
    <script src="src/js/fingerprint.sdk.min.js"></script>
    <script src="src/js/register.js"></script>

    <div class=".container-fluid">
        <div class="row" style="padding: 5rem;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <form action="#" onsubmit="return false" style="margin: 2rem">
                        <div id="enrollmentStatusField">
                            <!--Enrollment Status will be displayed Here-->
                        </div>
                        <div class="form-row mt-3 invisible">
                            <div class="col mb-3 mb-md-0">
                                <label for="enrollReaderSelect">
                                    Choose Fingerprint Reader
                                </label>
                                <select name="readerSelect" id="enrollReaderSelect" class="form-control">
                                    <option selected>
                                        Select Fingerprint reader
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="col mb-3 mb-md-0  ">
                                <input id="userID" type="text" class="form-control" required placeholder="Enter Student Number" onChange="beginCapture()">
                            </div>
                        </div>
                        <div class="form-row mt-1">
                            <div class="col">
                                <label for="">Capture Index Finger</label>
                            </div>
                        </div>
                        <div id="indexFingers" class="form-row justify-content-center">
                            <div id="indexfinger1" class="col mb-3 mb-md-0  ">
                                <span class="icon icon-indexfinger-not-enrolled" title="not_enrolled"></span>
                            </div>
                            <div id="indexfinger2" class="col mb-3 mb-md-0  ">
                                <span class="icon icon-indexfinger-not-enrolled" title="not_enrolled"></span>
                            </div>
                            <div id="indexfinger3" class="col mb-3 mb-md-0  ">
                                <span class="icon icon-indexfinger-not-enrolled" title="not_enrolled"></span>
                            </div>
                            <div id="indexfinger4" class="col mb-3 mb-md-0  ">
                                <span class="icon icon-indexfinger-not-enrolled" title="not_enrolled"></span>
                            </div>
                        </div>
                        <div class="form-row mt-1">
                            <div class="col  ">
                                <label for="">Capture Middle Finger</label>
                            </div>
                        </div>
                        <div id="middleFingers" class="form-row justify-content-center">
                            <div id="middleFinger1" class="col mb-3 mb-md-0  ">
                                <span class="icon icon-middlefinger-not-enrolled" title="not_enrolled"></span>
                            </div>
                            <div id="middleFinger2" class="col mb-3 mb-md-0  ">
                                <span class="icon icon-middlefinger-not-enrolled" title="not_enrolled"></span>
                            </div>
                            <div id="middleFinger3" class="col mb-3 mb-md-0  ">
                                <span class="icon icon-middlefinger-not-enrolled" title="not_enrolled"></span>
                            </div>
                            <div id="middleFinger4" class="col mb-3 mb-md-0  " value="true">
                                <span class="icon icon-middlefinger-not-enrolled" title="not_enrolled"></span>
                            </div>
                        </div>
                        <div class="form-row m-3 mt-md-5 justify-content-center">
                            <div class="col-4">
                                <!-- <button class="btn btn-primary btn-block my-sec-bg my-text-button py-1" type="submit"
                                    onclick="beginCapture()">Start Capture</button> -->
                            </div>
                            <div class="col-4">
                                <button class="btn btn-primary btn-block py-1" type="button"
                                    onclick="serverEnroll()">Enroll</button>
                            </div>
                            <div class="col-4">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

<!-- <script>
    window.onload(validateForm())
</script> -->

</html>