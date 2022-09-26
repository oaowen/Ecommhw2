<?php
include('header.php');

?>
<!--_Require once--->
    <h1>Welcome to the store </h1>

    <form action="handlepost.php" method="post">
Product Name: <input type="text" name="prodname"><br>
Quantity: <input type="text" name="quanname"><br>
Your contact information: <input type="text" name="email"><br>
<input type="submit">
</form>
<?php
function PrivacyMessage() {
  <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" data-bs-title="Privacy Notice" data-bs-content="Your conatct infromation will not be leaked. We uphold the highest level of privacy for our clients, rest assured">Click to toggle popover</button>
}

PrivacyMessage(); 
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

  </body>
<Body>
    

    </body>


</html>
