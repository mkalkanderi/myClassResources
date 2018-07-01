<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>CSIS 255</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h2>CSIS 255 - Web Technologies</h2>
</div>

<div class="content">
    <p>This course provides students with basic knowledge and technical aspects and skills needed to build Web applications. It covers a range of topics including but not limited to: basic concepts of the Internet and Internet programming, fundamentals of Website design, Websites building tools and languages, basics of XHTML, Scripting and Scripting Languages (e.g., Java Script), Web Servers and Web application servers, client-side programming, server-side programming, database connectivity to the Web applications, adding dynamic content to Web applications, programming the user interface for the Web applications. Students are expected to complete a project in the development and maintenance of Web sites. Prerequisite: CSIS 130. Concurrent: CSIS 250.
    </p>
    <br>
    <h2>Class Resources</h2>
    <br>
    <form action="cs255upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="uploaded_file"><br>
        <input type="submit" value="Upload file">
    </form>
    <p>
        <a href="cs255listfiles.php">See all files</a>
    </p>
    <form  method="post" action="cs255searchfiles.php"  id="searchform">
        <input  type="text" name="name">
        <input  type="submit" name="submit" value="Search">
    </form>

    <br>
    <div id="disqus_thread"></div>
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://myclassresources.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


</div>
<?php include "footer.php" ?>

</body>
</html>