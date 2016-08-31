<footer class="section-padding">
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