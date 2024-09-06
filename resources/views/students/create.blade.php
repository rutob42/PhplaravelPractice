<!-- 
    Student Registration Form
    =========================
    This form allows users to register new students.
-->

<!-- Extend the layout template -->
@extends('layout')

<!-- Define the content section -->
@section('content')

<!-- Create a card container with a shadow effect and rounded corners -->
<div class="card shadow-lg rounded-lg border-0" style="max-width: 500px; margin: 40px auto; padding: 20px;">
    
    <!-- Define the card header with a primary background color and white text -->
    <div class="card-header bg-primary text-white text-center" style="border-radius: 10px 10px 0 0;">
        
        <!-- Display the page title with a large font size -->
        <h2 class="mb-0" style="font-size: 24px; font-weight: bold;">🎓 Students Page</h2>
    </div>
    
    <!-- Define the card body with a light background color and padding -->
    <div class="card-body bg-light p-5" style="border-radius: 0 0 10px 10px;">
        
        <!-- Create a form with a POST method and validation -->
        <form action="{{ url('students') }}" method="post" class="needs-validation" novalidate>
            
            <!-- Include the CSRF token for security -->
            {!! csrf_field() !!}
            
            <!-- Define a form group for the student's name -->
            <div class="form-group" style="margin-bottom: 20px;">
                
                <!-- Display a label for the name field with a bold font weight -->
                <label for="name" class="font-weight-bold" style="display: block; margin-bottom: 10px;">Name</label>
                
                <!-- Create an input field for the name with a large font size and rounded corners -->
                <input type="text" name="name" id="name" class="form-control form-control-lg rounded-pill" placeholder="Enter student's name" required style="padding: 10px; font-size: 18px;">
                
                <!-- Display an error message if the name field is invalid -->
                <div class="invalid-feedback" style="color: #red; font-size: 14px;">
                    Please provide a name.
                </div>
            </div>
            
            <!-- Define a form group for the student's address -->
            <div class="form-group" style="margin-bottom: 20px;">
                
                <!-- Display a label for the address field with a bold font weight -->
                <label for="address" class="font-weight-bold" style="display: block; margin-bottom: 10px;">Address</label>
                
                <!-- Create an input field for the address with a large font size and rounded corners -->
                <input type="text" name="address" id="address" class="form-control form-control-lg rounded-pill" placeholder="Enter address" required style="padding: 10px; font-size: 18px;">
                
                <!-- Display an error message if the address field is invalid -->
                <div class="invalid-feedback" style="color: #red; font-size: 14px;">
                    Please provide an address.
                </div>
            </div>
            
            <!-- Define a form group for the student's mobile number -->
            <div class="form-group" style="margin-bottom: 20px;">
                
                <!-- Display a label for the mobile field with a bold font weight -->
                <label for="mobile" class="font-weight-bold" style="display: block; margin-bottom: 10px;">Mobile</label>
                
                <!-- Create an input field for the mobile number with a large font size and rounded corners -->
                <input type="text" name="mobile" id="mobile" class="form-control form-control-lg rounded-pill" placeholder="Enter mobile number" required style="padding: 10px; font-size: 18px;">
                
                <!-- Display an error message if the mobile field is invalid -->
                <div class="invalid-feedback" style="color: #red; font-size: 14px;">
                    Please provide a mobile number.
                </div>
            </div>
            
            <!-- Create a text center container for the submit button -->
            <div class="text-center" style="margin-top: 20px;">
                
                <!-- Create a submit button with a success background color and large font size -->
                <input type="submit" value="Save" class="btn btn-success btn-lg rounded-pill px-5" style="padding: 10px 20px; font-size: 18px; cursor: pointer;">
            </div>
        </form>
    </div>
</div>

<!-- End the content section -->
@stop