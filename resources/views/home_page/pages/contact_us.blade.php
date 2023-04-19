@extends('home_page.master')
@section('content')
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<div class="contact-area ptb-100 ptb-sm-60">
    <div class="container">
        <h3 class="mb-20">Contact Us</h3>
        <p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <form id="contact-form" class="contact-form" action="mail.php" method="post">
            <div class="address-wrapper row">
                <div class="col-md-12">
                    <div class="address-fname">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address-email">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address-web">
                        <input class="form-control" type="text" name="website" placeholder="Website">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="address-subject">
                        <input class="form-control" type="text" name="subject" placeholder="Subject">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="address-textarea">
                        <textarea name="message" class="form-control" placeholder="Write your message"></textarea>
                    </div>
                </div>
            </div>
            <p class="form-message"></p>
            <div class="footer-content mail-content clearfix">
                <div class="send-email float-md-right">
                    <input value="Submit" class="return-customer-btn" type="submit">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
