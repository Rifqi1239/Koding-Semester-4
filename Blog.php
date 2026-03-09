<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Portal Berita</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body data-bs-theme="dark">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <!-- hederrr -->

  <header class="text-center py-4">
    <h1>RNews</h1>
    <p class="text-secondary">Portal Berita Teknologi & Informasi</p>
  </header>


  <!-- navigasi -->

  <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container">

      <a class="navbar-brand" href="#">RNews</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav me-auto">

          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Contact.php">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Pricing.php">Pricing</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>

        </ul>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search berita">
          <button class="btn btn-outline-light">Search</button>
        </form>

      </div>
    </div>
  </nav>

  <!-- headline -->

  <div class="container mb-5">

    <div id="headlineNews" class="carousel slide">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="gambar1.jfif" class="d-block w-100" style="height:350px; object-fit:cover;">
          <div class="carousel-caption">
            <h3>Teknologi AI Semakin Berkembang</h3>
            <p>Perkembangan kecerdasan buatan membuka peluang baru di berbagai bidang industri.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="gambar2.jfif" class="d-block w-100" style="height:350px; object-fit:cover;">
          <div class="carousel-caption">
            <h3>Startup Baru Bermunculan</h3>
            <p>Banyak startup teknologi muncul membawa inovasi baru.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="gambar3.jfif" class="d-block w-100" style="height:350px; object-fit:cover;">
          <div class="carousel-caption">
            <h3>Perkembangan Internet Global</h3>
            <p>Jaringan internet dunia semakin cepat dan luas.</p>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#headlineNews" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#headlineNews" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
  </div>


  <!-- content -->
  <div class="container">
    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
          From the Firehose
        </h3>
        <article class="blog-post">
          <h2 class="display-5 link-body-emphasis mb-1">Sample blog post</h2>
          <p class="blog-post-meta">January 1, 2021 by
            <a href="#">Mark</a>
          </p>
          <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic
            typography, lists, tables, images, code, and more are all supported as expected.</p>
          <hr>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h2>Blockquotes</h2>
          <p>This is an example blockquote in action:</p>
          <blockquote class="blockquote">
            <p>Quoted text goes here.</p>
          </blockquote>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h3>Example lists</h3>
          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly
            repetitive body text used throughout. This is an example unordered list:</p>
          <ul>
            <li>First list item</li>
            <li>Second list item with a longer description</li>
            <li>Third list item to close it out</li>
          </ul>
          <p>And this is an ordered list:</p>
          <ol>
            <li>First list item</li>
            <li>Second list item with a longer description</li>
            <li>Third list item to close it out</li>
          </ol>
          <p>And this is a definition list:</p>
          <dl>
            <dt>HyperText Markup Language (HTML)</dt>
            <dd>The language used to describe and define the content of a Web page</dd>
            <dt>Cascading Style Sheets (CSS)</dt>
            <dd>Used to describe the appearance of Web content</dd>
            <dt>JavaScript (JS)</dt>
            <dd>The programming language used to build advanced Web sites and applications</dd>
          </dl>
          <h2>Inline HTML elements</h2>
          <p>HTML defines a long list of available inline tags, a complete list of which can be found on the
            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.
          </p>
          <ul>
            <li>
              <strong>To bold text</strong>, use
              <code class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.
            </li>
            <li>
              <em>To italicize text</em>, use
              <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.
            </li>
            <li>Abbreviations, like
              <abbr title="HyperText Markup Language">HTML</abbr> should use
              <code class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional
              <code class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.
            </li>
            <li>Citations, like
              <cite>— Mark Otto</cite>, should use
              <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.
            </li>
            <li>
              <del>Deleted</del> text should use
              <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and
              <ins>inserted</ins> text should use
              <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.
            </li>
            <li>Superscript
              <sup>text</sup> uses
              <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript
              <sub>text</sub> uses
              <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.
            </li>
          </ul>
          <p>Most of these elements are styled by browsers with few modifications on our part.</p>
          <h2>Heading</h2>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h3>Sub-heading</h3>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <pre>
          <code>Example code block</code>
        </pre>
          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly
            repetitive body text used throughout.</p>
        </article>
        <article class="blog-post">
          <h2 class="display-5 link-body-emphasis mb-1">Another blog post</h2>
          <p class="blog-post-meta">December 23, 2020 by
            <a href="#">Jacob</a>
          </p>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <blockquote>
            <p>Longer quote goes here, maybe with some
              <strong>emphasized text</strong> in the middle of it.
            </p>
          </blockquote>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h3>Example table</h3>
          <p>And don't forget about tables in these posts:</p>
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Upvotes</th>
                <th>Downvotes</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Alice</td>
                <td>10</td>
                <td>11</td>
              </tr>
              <tr>
                <td>Bob</td>
                <td>4</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Charlie</td>
                <td>7</td>
                <td>9</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>Totals</td>
                <td>21</td>
                <td>23</td>
              </tr>
            </tfoot>
          </table>
          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly
            repetitive body text used throughout.</p>
        </article>
        <article class="blog-post">
          <h2 class="display-5 link-body-emphasis mb-1">New feature</h2>
          <p class="blog-post-meta">December 14, 2020 by
            <a href="#">Chris</a>
          </p>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <ul>
            <li>First list item</li>
            <li>Second list item with a longer description</li>
            <li>Third list item to close it out</li>
          </ul>
          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly
            repetitive body text used throughout.</p>
        </article>
        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
          <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
        </nav>
      </div>
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-body-tertiary rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers,
              content, or something else entirely. Totally up to you.</p>
          </div>
          <div>
            <h4 class="fst-italic">Recent posts</h4>
            <ul class="list-unstyled">
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                  href="#">
                  <svg aria-hidden="true" class="bd-placeholder-img " height="96" preserveAspectRatio="xMidYMid slice"
                    width="100%" xmlns="http://www.w3.org/2000/svg">
                    <rect width="100%" height="100%" fill="#777"></rect>
                  </svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">Example blog post title</h6>
                    <small class="text-body-secondary">January 15, 2024</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                  href="#">
                  <svg aria-hidden="true" class="bd-placeholder-img " height="96" preserveAspectRatio="xMidYMid slice"
                    width="100%" xmlns="http://www.w3.org/2000/svg">
                    <rect width="100%" height="100%" fill="#777"></rect>
                  </svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">This is another blog post title</h6>
                    <small class="text-body-secondary">January 14, 2024</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                  href="#">
                  <svg aria-hidden="true" class="bd-placeholder-img " height="96" preserveAspectRatio="xMidYMid slice"
                    width="100%" xmlns="http://www.w3.org/2000/svg">
                    <rect width="100%" height="100%" fill="#777"></rect>
                  </svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                    <small class="text-body-secondary">January 13, 2024</small>
                  </div>
                </a>
              </li>
            </ul>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li>
                <a href="#">GitHub</a>
              </li>
              <li>
                <a href="#">Social</a>
              </li>
              <li>
                <a href="#">Facebook</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!--copyright-->

  <footer class="bg-dark text-center p-4 mt-5">

    <p class="mb-1">© 2026 Rifqi Mahdhika Rindani</p>

    <p class="text-secondary mb-0">
      Website berita sederhana menggunakan Bootstrap
    </p>

  </footer>


</body>

</html>