@extends('backend.includes.main')
@section('content')

<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        @if ($errors->any())
        <div id="alert" class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('success'))
        <div id="alert" class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div id="alert" class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Dashboard</a>
            </li>
            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>

    </div>
    <!--== DASHBOARD INFO ==-->
    <div class="sb2-2-1">
        <h2>Admin Dashboard</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5>All Courses</h5>
                        <h4>948</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5>Admission</h5>
                        <h4>672</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5>Students</h5>
                        <h4>689</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-4">
                        <h5>Enquiry</h5>
                        <h4>24</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Student Details</h4>
                        <p>All about students like name, student id, phone, email, country, city and more</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Id</th>
                                        <th>Date of birth</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>united states</td>
                                        <td>ST17241</td>
                                        <td>03 Jun 1990</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lucas Caden</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>lucas@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST10231</td>
                                        <td>16 Feb 1987</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>united states</td>
                                        <td>ST17241</td>
                                        <td>03 Jun 1990</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lucas Caden</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>lucas@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST10231</td>
                                        <td>16 Feb 1987</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Course Details</h4>
                        <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Course Name</th>
                                        <th>Category</th>
                                        <th>Durations</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Total Seats</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Aerospace Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>Engineering</td>
                                        <td>60 Days(420hrs)</td>
                                        <td>03 Jun 2018</td>
                                        <td>12 Aug 2018</td>
                                        <td>74</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Fashion Technology</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>Fashion</td>
                                        <td>30 Days(420hrs)</td>
                                        <td>01 Nov 2018</td>
                                        <td>01 Dec 2018</td>
                                        <td>30</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-2.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Agriculture Courses</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>Agriculture</td>
                                        <td>25 Days(420hrs)</td>
                                        <td>05 Jan 2018</td>
                                        <td>25 Jan 2018</td>
                                        <td>25</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-3.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Marine Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>Ocean / Marine</td>
                                        <td>06 Months</td>
                                        <td>12 Feb 2018</td>
                                        <td>14 Aug 2018</td>
                                        <td>68</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-4.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Building, Construction Management</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>Construction</td>
                                        <td>1 Year</td>
                                        <td>05 Mar 2018</td>
                                        <td>16 Mar 2018</td>
                                        <td>72</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Aerospace Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>Engineering</td>
                                        <td>60 Days(420hrs)</td>
                                        <td>03 Jun 2018</td>
                                        <td>12 Aug 2018</td>
                                        <td>74</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Fashion Technology</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>Fashion</td>
                                        <td>30 Days(420hrs)</td>
                                        <td>01 Nov 2018</td>
                                        <td>01 Dec 2018</td>
                                        <td>30</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-2.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Agriculture Courses</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>Agriculture</td>
                                        <td>25 Days(420hrs)</td>
                                        <td>05 Jan 2018</td>
                                        <td>25 Jan 2018</td>
                                        <td>25</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-3.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Marine Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>Ocean / Marine</td>
                                        <td>06 Months</td>
                                        <td>12 Feb 2018</td>
                                        <td>14 Aug 2018</td>
                                        <td>68</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-4.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Building, Construction Management</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>Construction</td>
                                        <td>1 Year</td>
                                        <td>05 Mar 2018</td>
                                        <td>16 Mar 2018</td>
                                        <td>72</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <!--== Country Campaigns ==-->
            <div class="col-md-6">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Job Openings</h4>
                        <p>Randomised words which don't look even slightly believable. If you are going to use a passage</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Openings</th>
                                        <th>Date</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Samsing</span>
                                        </td>
                                        <td>50</td>
                                        <td>15 April 2018</td>
                                        <td>New york, United States</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Microsofts</span>
                                        </td>
                                        <td>75</td>
                                        <td>21 Jun 2018</td>
                                        <td>New york, United States</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Samsing</span>
                                        </td>
                                        <td>50</td>
                                        <td>15 April 2018</td>
                                        <td>United States</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Microsofts</span>
                                        </td>
                                        <td>75</td>
                                        <td>21 Jun 2018</td>
                                        <td>United States</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--== Country Campaigns ==-->
            <div class="col-md-6">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Event Details</h4>
                        <p>Education is about teaching, learning skills and knowledge.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>State</th>
                                        <th>Client</th>
                                        <th>Changes</th>
                                        <th>Budget</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="txt-dark weight-500">California</span>
                                        </td>
                                        <td>Beavis</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$1478</span>
                                        </td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Florida</span>
                                        </td>
                                        <td>Felix</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>1.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$951</span>
                                        </td>
                                        <td>
                                            <span class="label label-danger">Closed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Hawaii</span>
                                        </td>
                                        <td>Cannibus</td>
                                        <td><span class="txt-danger"><i class="fa fa-angle-up" aria-hidden="true"></i><span>-8.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$632</span>
                                        </td>
                                        <td>
                                            <span class="label label-default">Hold</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Alaska</span>
                                        </td>
                                        <td>Neosoft</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>7.43%</span></span>
                                        </td>
                                        <td>
                                            <span class="txt-dark weight-500">$325</span>
                                        </td>
                                        <td>
                                            <span class="label label-default">Hold</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">New Jersey</span>
                                        </td>
                                        <td>Hencework</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>9.43%</span></span>
                                        </td>
                                        <td>
                                            <span>$258</span>
                                        </td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sb2-2-3">
        <div class="row">
            <!--== Listing Enquiry ==-->
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Exam Time Tables</h4>
                        <p>Education is about teaching, learning skills and knowledge.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>Degree</th>
                                        <th>Exam Name</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Timing</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="filled-in" id="filled-in-box-1" checked="checked" />
                                            <label for="filled-in-box-1"></label>
                                        </td>
                                        <td>MBA</td>
                                        <td><span class="list-enq-name">Civil engineering</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>10:00am</td>
                                        <td>01:00pm</td>
                                        <td>03:00Hrs</td>
                                        <td>
                                            <a href="admin-exam.html" class="ad-st-view">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="filled-in" id="filled-in-box-2" />
                                            <label for="filled-in-box-2"></label>
                                        </td>
                                        <td>MBA</td>
                                        <td><span class="list-enq-name">Google Business</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>10:00am</td>
                                        <td>01:00pm</td>
                                        <td>03:00Hrs</td>
                                        <td>
                                            <a href="admin-exam.html" class="ad-st-view">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="filled-in" id="filled-in-box-3" />
                                            <label for="filled-in-box-3"></label>
                                        </td>
                                        <td>MBA</td>
                                        <td><span class="list-enq-name">Statistics</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>10:00am</td>
                                        <td>01:00pm</td>
                                        <td>03:00Hrs</td>
                                        <td>
                                            <a href="admin-exam.html" class="ad-st-view">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="filled-in" id="filled-in-box-4" />
                                            <label for="filled-in-box-4"></label>
                                        </td>
                                        <td>MBA</td>
                                        <td><span class="list-enq-name">Business Management</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>10:00am</td>
                                        <td>01:00pm</td>
                                        <td>03:00Hrs</td>
                                        <td>
                                            <a href="admin-exam.html" class="ad-st-view">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="filled-in" id="filled-in-box-5" />
                                            <label for="filled-in-box-5"></label>
                                        </td>
                                        <td>MBA</td>
                                        <td><span class="list-enq-name">Art/Design</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>10:00am</td>
                                        <td>01:00pm</td>
                                        <td>03:00Hrs</td>
                                        <td>
                                            <a href="admin-exam.html" class="ad-st-view">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== Latest Activity ==-->
    <div class="sb2-2-3">
        <div class="row">
            <!--== Latest Activity ==-->
            <div class="col-md-6">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Latest Activity</h4>
                        <p>Education is about teaching, learning skills and knowledge.</p>
                    </div>
                    <div class="tab-inn list-act-hom">
                        <ul>
                            <li class="list-act-hom-con">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>12 may, 2017</span> Welcome to Academy</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </li>
                            <li class="list-act-hom-con">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>08 Jun, 2017</span> Academy Leadership</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </li>
                            <li class="list-act-hom-con">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>27 July, 2017</span> Awards and Achievement</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </li>
                            <li class="list-act-hom-con">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>14 Aug, 2017</span> Facilities and Management</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </li>
                            <li class="list-act-hom-con">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4><span>24 Sep, 2017</span> Nation award winning 2017</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--== Social Media ==-->
            <div class="col-md-6">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Social Media</h4>
                        <p>Education is about teaching, learning skills and knowledge.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Media</th>
                                        <th>Name</th>
                                        <th>Share</th>
                                        <th>Like</th>
                                        <th>Members</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/1.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">Linked In</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/2.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">Twitter</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/3.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">Facebook</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/4.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">Google Plus</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/5.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">YouTube</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/6.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">WhatsApp</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/7.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">VK</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/sm/2.png" alt=""></span>
                                        </td>
                                        <td><span class="list-enq-name">Twitter</span><span class="list-enq-city">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>
                                            <span class="label label-success">263</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Google Map</h4>
                        <p>Education is about teaching, learning skills and knowledge.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi tab-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457598.8361800164!2d83.20583592417698!3d28.394857914881364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399614b3127f7877%3A0x961a3b772421f75c!2sKathmandu%2C%20Nepal!5e0!3m2!1sen!2sus!4v1647755333487" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
     setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 5000); // Set the delay to 5000 milliseconds (5 seconds)
</script>

@endsection