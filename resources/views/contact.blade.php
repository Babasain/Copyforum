<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Contact Page</title>
  <style>
    /* Add your custom styles here */
    body {
      background-color: #f8f9fa;
    }

    .contact-form {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      margin-top: 50px;
    }
  </style>
</head>
<body>
   @include ('partials/_header')
  <div class="container my-3">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="contact-form">
          <h2 class="text-center mb-4">Contact Us</h2>
          
          <!-- Contact Form -->
          <form method="post" action="/contactpage">
            @csrf
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" class="form-control" id="name" name="uname" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
              <label for="email">Your Email</label>
              <input type="email" class="form-control" id="email" name="uemail" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea class="form-control" id="message" rows="5" name="message" placeholder="Enter your message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <!-- End Contact Form -->
          
        </div>
      </div>
    </div>
  </div>
  @include ('partials/_footer')

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
