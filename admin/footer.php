</div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0">
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="<?php echo $full_path;?>/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="Layouts-1">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="<?php echo $full_path;?>/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="Layouts-2">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="<?php echo $full_path;?>/assets/css/bootstrap-dark.min.css" data-appStyle="<?php echo $full_path;?>/assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <!-- Footer start from here-->		
        <div class="rightbar-overlay"></div>
        <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Taleb
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Taleb
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
        
        <!-- JAVASCRIPT -->
        <script src="<?php echo $full_path;?>/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/node-waves/waves.min.js"></script>
        
        
        <!-- Peity chart-->
        <script src="<?php echo $full_path;?>/assets/libs/peity/jquery.peity.min.js"></script>
        


        <!-- Required datatable js -->
        <script src="<?php echo $full_path;?>/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo $full_path;?>/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/jszip/jszip.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo $full_path;?>/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?php echo $full_path;?>/assets/js/pages/datatables.init.js"></script> 

        <!--C3 Chart-->
        <script src="<?php echo $full_path;?>/assets/libs/d3/d3.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/c3/c3.min.js"></script>
        
        <script src="<?php echo $full_path;?>/assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="<?php echo $full_path;?>/assets/libs/parsleyjs/parsley.min.js"></script>
        
        <script src="<?php echo $full_path;?>/assets/js/pages/dashboard.init.js"></script>
		
		<!-- select2 jquery plugin -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		
	<script>	
		$(document).ready(function() {
		$('.select22').select2();
		});
		tinymce.init({
        selector: '#mytextarea'
      });
	</script>
        <!--<script src="assets/js/app.js"></script>-->
		<script>
			!function(t){"use strict";function s(){for(var e=document.getElementById("topnav-menu-content").getElementsByTagName("a"),t=0,n=e.length;t<n;t++)"nav-item dropdown active"===e[t].parentElement.getAttribute("class")&&(e[t].parentElement.classList.remove("active"),e[t].nextElementSibling.classList.remove("show"))}function n(e){1==t("#light-mode-switch").prop("checked")&&"light-mode-switch"===e?(t("html").removeAttr("dir"),t("#dark-mode-switch").prop("checked",!1),t("#rtl-mode-switch").prop("checked",!1),t("#bootstrap-style").attr("href","<?php echo $full_path;?>/assets/css/bootstrap.min.css"),t("#app-style").attr("href","<?php echo $full_path;?>/assets/css/app.min.css"),sessionStorage.setItem("is_visited","light-mode-switch")):1==t("#dark-mode-switch").prop("checked")&&"dark-mode-switch"===e?(t("html").removeAttr("dir"),t("#light-mode-switch").prop("checked",!1),t("#rtl-mode-switch").prop("checked",!1),t("#bootstrap-style").attr("href","<?php echo $full_path;?>/assets/css/bootstrap-dark.min.css"),t("#app-style").attr("href","<?php echo $full_path;?>/assets/css/app-dark.min.css"),sessionStorage.setItem("is_visited","dark-mode-switch")):1==t("#rtl-mode-switch").prop("checked")&&"rtl-mode-switch"===e&&(t("#light-mode-switch").prop("checked",!1),t("#dark-mode-switch").prop("checked",!1),t("#bootstrap-style").attr("href","<?php echo $full_path;?>/assets/css/bootstrap-rtl.min.css"),t("#app-style").attr("href","<?php echo $full_path;?>/assets/css/app-rtl.min.css"),t("html").attr("dir","rtl"),sessionStorage.setItem("is_visited","rtl-mode-switch"))}function e(){document.webkitIsFullScreen||document.mozFullScreen||document.msFullscreenElement||(console.log("pressed"),t("body").removeClass("fullscreen-enable"))}var a;t("#side-menu").metisMenu(),t("#vertical-menu-btn").on("click",function(e){e.preventDefault(),t("body").toggleClass("sidebar-enable"),992<=t(window).width()?t("body").toggleClass("vertical-collpsed"):t("body").removeClass("vertical-collpsed")}),t("#sidebar-menu a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&(t(this).addClass("active"),t(this).parent().addClass("mm-active"),t(this).parent().parent().addClass("mm-show"),t(this).parent().parent().prev().addClass("mm-active"),t(this).parent().parent().parent().addClass("mm-active"),t(this).parent().parent().parent().parent().addClass("mm-show"),t(this).parent().parent().parent().parent().parent().addClass("mm-active"))}),t(document).ready(function(){var e;0<t("#sidebar-menu").length&&0<t("#sidebar-menu .mm-active .active").length&&(300<(e=t("#sidebar-menu .mm-active .active").offset().top)&&(e-=300,t(".vertical-menu .simplebar-content-wrapper").animate({scrollTop:e},"slow")))}),t(".navbar-nav a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&(t(this).addClass("active"),t(this).parent().addClass("active"),t(this).parent().parent().addClass("active"),t(this).parent().parent().parent().addClass("active"),t(this).parent().parent().parent().parent().addClass("active"),t(this).parent().parent().parent().parent().parent().addClass("active"))}),t('[data-bs-toggle="fullscreen"]').on("click",function(e){e.preventDefault(),t("body").toggleClass("fullscreen-enable"),document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement?document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen():document.documentElement.requestFullscreen?document.documentElement.requestFullscreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullscreen&&document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)}),document.addEventListener("fullscreenchange",e),document.addEventListener("webkitfullscreenchange",e),document.addEventListener("mozfullscreenchange",e),t(".right-bar-toggle").on("click",function(e){t("body").toggleClass("right-bar-enabled")}),t(document).on("click","body",function(e){0<t(e.target).closest(".right-bar-toggle, .right-bar").length||t("body").removeClass("right-bar-enabled")}),function(){if(document.getElementById("topnav-menu-content")){for(var e=document.getElementById("topnav-menu-content").getElementsByTagName("a"),t=0,n=e.length;t<n;t++)e[t].onclick=function(e){"#"===e.target.getAttribute("href")&&(e.target.parentElement.classList.toggle("active"),e.target.nextElementSibling.classList.toggle("show"))};window.addEventListener("resize",s)}}(),[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function(e){return new bootstrap.Tooltip(e)}),[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e){return new bootstrap.Popover(e)}),window.sessionStorage&&((a=sessionStorage.getItem("is_visited"))?(t(".right-bar input:checkbox").prop("checked",!1),t("#"+a).prop("checked",!0),n(a)):sessionStorage.setItem("is_visited","light-mode-switch")),t("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change",function(e){n(e.target.id)}),t(".toggle-search").on("click",function(){var e=t(this).data("target");e&&t(e).toggleClass("open")}),t(window).on("load",function(){t("#status").fadeOut(),t("#preloader").delay(350).fadeOut("slow")}),Waves.init()}(jQuery);
		</script>
    </body>

<!-- Mirrored from themesbrand.com/admiria/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Oct 2021 15:23:41 GMT -->
</html>
