<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include("admin.css")
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include("admin.sidebar")
      <!-- partial -->
      @include("admin.header")
        <!-- partial:partials/_navbar.html -->
        
        <!-- partial -->
        @include("admin.body")
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include("admin.footer")
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include("admin.script")
    <!-- End custom js for this page -->
  </body>
</html>