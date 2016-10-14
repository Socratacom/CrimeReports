<footer>
    <section class="download-apps section-padding background-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title text-center margin-bottom-15">Download CrimeReports™</h2>
                    <p class="text-center">CrimeReports™ is available in the App Store and on Google Play.</p>
                    <a class="appstore-link" href="https://itunes.apple.com/us/app/crimereports-by-motorola-powered/id1100061196?mt=8" target="_blank"><img src="https://socrata-crimereports-herokuapp-com.global.ssl.fastly.net/assets/download_appstore-25178aeef6eb6b83b96f5f2d004eda3bffbb37122de64afbaef7107b384a4132.svg" alt="Download on App Store"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.socrata.crimereports" target="_blank"><img src="https://socrata-crimereports-herokuapp-com.global.ssl.fastly.net/assets/google_playstore-0a91f9b9843197d75c650d34e84944fd6240d6f9c70219f1ec503d92077441dd.svg" alt="Download on Google Play"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><a href="https://www.motorolasolutions.com/" target="_blank" class="motorola-solutions-logo"></a></li>
                        <li><a href="https://socrata.com/" target="_blank" class="powered-by-logo"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
<script>
    var menuRight = document.getElementById( 'side-panel' ),
        body = document.body;           
    showRight.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRight' );
    };
    function disableOther( button ) {
        if( button !== 'showRight' ) {
            classie.toggle( showRight, 'disabled' );
        }
    }
</script>

