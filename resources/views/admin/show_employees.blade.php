<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <style type="text/css">
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #800080;
        }
    </style>
    @include("admin.css")
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include("admin.sidebar")
    <!-- partial -->
    @include("admin.header")
    <!-- partial:partials/_navbar.html -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding-top: 100px;">
            <table>
                <thead>
                    <tr>
                        <th>Employee Name</th>
                        <th>Phone Number</th>
                        <th>Designation</th>
                        <th>Employee Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($parking_attendants as $parking_attendant)
                    <tr>
                        <td>{{$parking_attendant->name}}</td>
                        <td>{{$parking_attendant->phone}}</td>
                        <td>{{$parking_attendant->Designation}}</td>
                        <td>{{$parking_attendant->Image}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- partial -->
<!--@include("admin.body")-->
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
