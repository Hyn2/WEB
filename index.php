<!DOCTYPE html>
<head>
  <title>WEB</title>
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="style.css" />
  <script src="colors.js"></script>
  <script src="lists.js"></script>
</head>

<body>
  <h1 class="bold">
    <a href="index.php">Storage</a>
  </h1>
  <button id="nightDayImg" value="NIGHT" onclick="nightDayHandler(this)">
    <img src="NIGHT_NEW.png" />
  </button>
  <div id="grid">
    <ul class="medium">
      <li>
        <a href="1.html"
          ><script>
            document.write(list[0]);
          </script></a
        >
      </li>
      <li>
        <a href="2.html"
          ><script>
            document.write(list[1]);
          </script></a
        >
      </li>
      <li>
        <a href="3.html"
          ><script>
            document.write(list[2]);
          </script></a
        >
      </li>
      <li>
        <a href="post.html"
          ><script>
            document.write(list[3]);
          </script></a>
      </li>
    </ul>
    <div id="article">
      <h2 class="medium">WELCOME</h2>
      <p class="light">
        私が好きなこと
        <!-- <a
          href="https://en.wikipedia.org/wiki/World_Wide_Web"
          target="_blank"
          title="WWW Wikipedia"
          id="underline"
          >The World Wide Web (WWW)</a
        >, commonly known as the Web, is an information system enabling
        documents and other web resources to be accessed over the Internet.<br />
        Documents and downloadable media are made available to the network
        through web servers and can be accessed by programs such as web
        browsers.<br />
        Servers and resources on the World Wide Web are identified and located
        through character strings called uniform resource locators (URLs).<br />
        The original and still very common document type is a web page formatted
        in Hypertext Markup Language (HTML).<br />
        This markup language supports plain text, images, embedded video and
        audio contents, and scripts (short programs) that implement complex user
        interaction.<br />
        The HTML language also supports hyperlinks (embedded URLs) which provide
        immediate access to other web resources.<br />
        Web navigation, or web surfing, is the common practice of following such
        hyperlinks across multiple websites.<br />
        Web applications are web pages that function as application software.<br />
        The information in the Web is transferred across the Internet using the
        Hypertext Transfer Protocol (HTTP).<br />
        Multiple web resources with a common theme and usually a common domain
        name make up a website.<br />
        A single web server may provide multiple websites, while some websites,
        especially the most popular ones, may be provided by multiple
        servers.<br />
        Website content is provided by a myriad of companies, organizations,
        government agencies, and individual users; and comprises an enormous
        amount of educational, entertainment, commercial, and government
        information.<br />
        The World Wide Web has become the world's dominant software platform. It
        is the primary tool billions of people worldwide use to interact with
        the Internet.<br />
        The Web was invented by Tim Berners-Lee at CERN in 1989 and opened to
        the public in 1991.<br />
        It was conceived as a "universal linked information system".<br /> -->
      </p>
    </div>
  </div>
</body>
