<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Your Forum Name</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
      background-color: #3498db;
    }

    .navbar-brand {
      color: #ffffff;
      font-size: 1.8rem;
      font-weight: bold;
    }

    .about-section {
      padding: 80px 0;
      background-color: #2c3e50; /* Darker background color */
      text-align: center;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Box shadow */
    }

    .about-heading {
      font-size: 3rem;
      color: #fff; /* White text color */
      margin-bottom: 50px;
    }

    .about-text {
      font-size: 1.2rem;
      color: #ecf0f1; /* Light text color */
      line-height: 1.8;
    }

    .team-member {
      margin-bottom: 30px;
      transition: transform 0.3s ease-in-out;
    }

    .team-member img {
      max-width: 100%;
      border-radius: 10px; /* Square border radius */
      margin-top: 20px; /* Margin from the top */
      transition: transform 0.3s ease-in-out;
    }

    .team-member:hover,
    .team-member:hover img {
      transform: scale(1.1);
    }

    .team-member-name {
      margin-top: 15px;
      font-size: 1.5rem;
      font-weight: bold;
      color: #fff; /* White text color */
    }

    .team-member-role {
      font-size: 1.2rem;
      color: #ecf0f1; /* Light text color */
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
 @include ('partials/_header')
  <!-- About Section -->
  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="about-heading">About Us</h2>
          <p class="about-text">Welcome DevNest Coding Forum , where community, knowledge, and discussions converge. We are passionate about creating a platform that encourages meaningful interactions and shared learning experiences. Join us on this journey!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 team-member">
          <img class="rounded" src="https://img.freepik.com/premium-photo/smiling-mature-man-posing-against-white-background_176841-17556.jpg" alt="Team Member 1">
          <h3 class="team-member-name">John Doe</h3>
          <p class="team-member-role">Founder & CEO</p>
        </div>
        <div class="col-lg-4 team-member">
          <img class="rounded" src="https://img.freepik.com/premium-photo/middleaged-man-smiles-camera_132358-21041.jpg" alt="Team Member 2">
          <h3 class="team-member-name">Jane Smith</h3>
          <p class="team-member-role">Community Manager</p>
        </div>
        <div class="col-lg-4 team-member">
          <img class="rounded" src="https://static.vecteezy.com/system/resources/thumbnails/030/752/038/small/headshot-close-up-portrait-of-indian-or-latin-confident-middle-aged-age-leader-ceo-male-businessman-in-a-suit-on-office-background-a-handsome-hispanic-senior-businessman-smiles-at-the-camera-free-photo.jpg" alt="Team Member 3">
          <h3 class="team-member-name">Sam Johnson</h3>
          <p class="team-member-role">Technical Moderator</p>
        </div>
      </div>
    </div>
  </section>
@include ('partials/_footer')
  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
