<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="left_col">
                    <div class="content">
                        <img src="{{ asset('img/logo.png') }}" alt="project logo" class="img-fluid">
                        <h1>Lodha, LBS Road</h1>
                        <h4 class="typo">2 & 3 BHK Apartments</h4>
                        <h4 class="price">Starting Price: Rs. 2.29 Cr* Onwards</h4>
                    </div>
                </div>
                <div class="right_col">
                    <div class="animated_form">
                        <div class="form-head">
                            <h4 class="form_heading">Send Us A Message!</h4>
                        </div>
                        <div class="form-group">
                            <iframe
                                src="https://new.proptiger.com/iframe-v1/?utm_source=gtf_google&utm_medium=cpc&city_id=18&project_id=3444380&utm_campaign=lodha-lbs-road"
                                width="600" height="400" frameborder="0" id="iframeForm">
                            </iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="left_col">
                    <div class="content">
                        <img src="{{ asset('img/logo.png') }}" alt="project logo" class="img-fluid">
                        <h1>Lodha, LBS Road</h1>
                        <h4 class="typo">2 & 3 BHK Apartments</h4>
                        <h4 class="price">Starting Price: Rs. 2.29 Cr* Onwards</h4>
                    </div>
                </div>
                <div class="right_col">
                    <div class="animated_form">
                        <div class="form-head">
                            <h4 class="form_heading">Send Us A Message!</h4>
                        </div>
                        <div class="form-group">
                            <iframe
                                src="https://new.proptiger.com/iframe-v1/?utm_source=gtf_google&utm_medium=cpc&city_id=18&project_id=3444380&utm_campaign=lodha-lbs-road"
                                width="600" height="400" frameborder="0" id="iframeForm"></iframe>
                        </div>
                        <!-- <div class="form-group">
      <input class="form-input" id="qSenderNamemodal3" name="name" type="text" placeholder="Your Name"
        required="">
    </div>
    <div class="form-group">

      <input class="form-input" type="email" name="email" required="" placeholder="Your Email"
        id="qEmailIDmodal3">
    </div>
    <div class="form-group">
      <input id="qMobileNomodal3" class="form-input mobileInput1" type="number" name="Mobile No."
        placeholder="Mobile Number" required="">
    </div>

    <div class="form-group">
      <input id="qMessagemodal3" class="form-input" type="text" name="Comments.." placeholder="Comment"
        required="">
    </div>
    <input type="submit" value="Request A Call" class="btn form-control main_button" id="SubmitQuerymodal3"> -->
                        <p
                            style="text-align: left;font-weight: 400;color: #000;opacity: 1;font-size:10px;letter-spacing: 0.5px;margin:0;line-height:15px;padding: 10px 0 0;height: 100%;">
                            <input type="checkbox" id="checkbox2" checked="" name="subscribe" value="check2"> I
                            authorize company
                            representatives to Call, SMS, Email or WhatsApp me about its products and offers.
                            This consent
                            overrides
                            any registration for DNC/NDNC.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script type="text/javascript" language="javascript">
    var versionUpdate = (new Date()).getTime();
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "https://api2.gtftech.com/scripts/queryform.min.ssl.js?v=" + versionUpdate;
    document.body.appendChild(script);
</script>

<script>
    var AgentInfo = {
        "vAgentID": "****",
        "vProject": "Lodha LBS Road Mumbai",
        "vURL": "https://proptigermumbai.com/lodha-group/lodha-bhandup/",
        "thankspageurl": "https://proptigermumbai.com/lodha-group/lodha-bhandup/thanks.htm",
    };
    //Needs to be duplicate in the case of multiple forms on the same page
    //--------------------------------------------------------------------------------------//
    $('#preferedtime').hide();

    $("#SubmitQuerymodal1").click(function() {
        var FormInfo = {
            "SenderControlID": "qSenderNamemodal1",
            "SenderControlMobileID": "qMobileNomodal1",
            "SenderControlEmailID": "qEmailIDmodal1",
            "SenderControlMsgID": "qMessagemodal1"
        };

        SubmitQueryData(AgentInfo, FormInfo);
    });

    $("#SubmitQuerymodal2").click(function() {
        var FormInfo = {
            "SenderControlID": "qSenderNamemodal2",
            "SenderControlMobileID": "qMobileNomodal2",
            "SenderControlEmailID": "qEmailIDmodal2",
            "SenderControlMsgID": "qMessagemodal2"
        };

        SubmitQueryData(AgentInfo, FormInfo);
    });

    $("#SubmitQuerymodal").click(function() {
        var FormInfo = {
            "SenderControlID": "qSenderNamemodal",
            "SenderControlMobileID": "qMobileNomodal",
            "SenderControlEmailID": "qEmailIDmodal",
            "SenderControlMsgID": "qMessagemodal"
        };

        SubmitQueryData(AgentInfo, FormInfo);
    });
    $("#SubmitQuerymodal3").click(function() {
        var FormInfo = {
            "SenderControlID": "qSenderNamemodal3",
            "SenderControlMobileID": "qMobileNomodal3",
            "SenderControlEmailID": "qEmailIDmodal3",
            "SenderControlMsgID": "qMessagemodal3"
        };

        SubmitQueryData(AgentInfo, FormInfo);
    });
</script>

<script>
    $('.without-caption').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

    $('.with-caption').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el
                    .attr('data-source') + '" target="_blank"></a>';
            }
        },
        zoom: {
            enabled: true
        }
    });
</script>

<script>
    $(".moreless-button").click(function() {
        $(".moretext").slideToggle(10);
        if ($(".moreless-button").text() == "Read more") {
            $(this).text("Read less");
        } else {
            $(this).text("Read more");
        }
    });
</script>
<script>
    setTimeout(function() {
        $('#onload').modal('show')
    }, 10000)
</script>
