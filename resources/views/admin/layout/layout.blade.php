<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.head')

</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('sweetalert::alert')
    @include('admin.template.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        @include('admin.template.navbar')
        @yield('content')
    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <script>
        // Function to display the selected image in the preview
    function previewImage(input) {
        const imgPreview = document.getElementById('imagePreview');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                imgPreview.src = e.target.result;
                imgPreview.style.display = 'block';
            };
            
            reader.readAsDataURL(input.files[0]); // Read the selected file as a data URL
        } else {
            imgPreview.style.display = 'none';
        }
    }
    
    // Attach an event listener to the input field to trigger the preview
    const productImageInput = document.getElementById('productImage');
    
    productImageInput.addEventListener('change', function() {
        previewImage(this);
    });
    </script>
    <script>
        $(document).ready(function() {
    // Get the current URL path
    var currentPath = window.location.pathname;

    // Loop through each navigation link and check if it matches the current path
    $('.nav-link').each(function() {
      var linkPath = $(this).attr('href');
      if (currentPath === linkPath) {
        // Add the "active" class to the matching navigation item
        $(this).addClass('active');
      }
    });
  });
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>
    @yield('script')

</body>

</html>