<?php
include("master.php");
?>


    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Hello, 
<?php
            if(isset($_SESSION['username']))
            {
                echo($_SESSION['username']);
            }
            else
            {    echo( "World");
            }
            
?>
            </h1>
            <p class="lead">This is a template for a simple marketing or informational website. It includes a large
                callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create
                something more unique.</p>
            <p><a class="btn btn-primary" href="#" role="button">Learn more &raquo;</a></p>

        </div>
    </div>

    <hr>
      <div class="m-1 text-center">
        © RBM AQUASOFT
      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>

</body>

</html>