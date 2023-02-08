<?php
include APPROOT . '/views/inc/header.php';

?>

<!-- Contact form section -->
<section id="contact" class="py-5 bg-light" style="margin-top: 150px;">
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-6 mx-auto" style="margin-left: 300px;">
                <form id="contact-form" method="post" action="mail.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include APPROOT . '/views/inc/footer.php';
?>