<html>
  <body>
    <h1>Simple Example Page</h1>
    <script type="text/javascript">
      document.write("Hi, JavaScript is enabled!");
    </script>
    <noscript>
      <?php

      header('location:https://www.google.com');

      ?>  
      <div style="border: 1px solid purple; padding: 10px">
        <span style="color:red">JavaScript is not enabled!</span>
      </div>
    
    </noscript>
  </body>
</html>