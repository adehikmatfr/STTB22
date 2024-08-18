<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Show Source Code</title>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('pre code').forEach((block) => {
                hljs.highlightElement(block);
            });
        });
    </script>
</head>

<body>
    <div id="sidebar">
        <ul>
            <li><a href="#abstract">Kelas Abstrak Product</a></li>
            <li><a href="#interface">Interface IElectronic</a></li>
            <li><a href="#electronic">PHP Class: Electronic</a></li>
            <li><a href="#television">PHP Class: Television</a></li>
            <li><a href="#implement">Implementation</a></li>
            <li><a href="#result">Result</a></li>
        </ul>
    </div>
    <div id="abstract" class="container">
        <h1>Kelas Abstrak Product</h1>
        <p>Di sini kita mendefinisikan <code>Product</code> sebagai kelas abstrak. Kelas abstrak ini tidak dapat diinstansiasi secara langsung dan bertujuan untuk menyediakan kerangka dasar bagi kelas-kelas turunan. Kelas ini mendefinisikan properti dasar seperti nama, merek, dan stok, serta metode abstrak <code>getInfo()</code> yang harus diimplementasikan oleh setiap kelas turunan.</p>
        <pre><code class="language-php">
<?php echo htmlspecialchars(file_get_contents("Product.php")); ?>
    </code></pre>
    </div>

    <div id="interface" class="container">
        <h1>Interface IElectronic</h1>
        <p>Interface <code>IElectronic</code> mendefinisikan kontrak yang harus diikuti oleh kelas-kelas yang mengimplementasikannya. Interface ini memastikan bahwa semua kelas elektronik memiliki metode untuk mengatur merek, nama, dan stok. Hal ini memudahkan pengelolaan atribut elektronik secara konsisten di berbagai jenis kelas elektronik.</p>
        <pre><code class="language-php">
<?php echo htmlspecialchars(file_get_contents("IElectronic.php")); ?>
    </code></pre>
    </div>

    <div id="electronic" class="container">
        <h1>PHP Class: Electronic</h1>
        <p>Kelas <code>Electronic</code> adalah implementasi konkret dari kelas abstrak <code>Product</code> dan interface <code>IElectronic</code>. Kelas ini menyediakan implementasi spesifik untuk metode yang didefinisikan dalam interface, mengatur bagaimana atribut seperti merek, nama, dan stok dihandle. Kelas ini juga memperkenalkan metodologi yang spesifik untuk produk elektronik.</p>
        <pre><code class="language-php">
<?php echo htmlspecialchars(file_get_contents("Electronic.php")); ?>
    </code></pre>
    </div>

    <div id="television" class="container">
        <h1>PHP Class: Television</h1>
        <p>Kelas <code>Television</code> memperluas kelas <code>Electronic</code> dengan menambahkan atribut dan fungsionalitas spesifik untuk televisi, seperti tipe televisi. Ini adalah contoh dari spesialisasi lebih lanjut dalam hierarki kelas, dimana kelas <code>Television</code> menyesuaikan dan memperluas fungsi dari kelas dasarnya untuk memenuhi kebutuhan yang lebih spesifik.</p>
        <pre><code class="language-php">
<?php echo htmlspecialchars(file_get_contents("Television.php")); ?>
    </code></pre>
    </div>

    <div id="implement" class="container">
        <h1>Implementasi</h1>
        <pre><code class="language-php">
<?php echo htmlspecialchars(file_get_contents("main.php")); ?>
    </code></pre>
    </div>
    <div id="result" class="container">
        <h1>Result</h1>
        <pre><code class="language-php">
<?php
require_once 'main.php'; 
main(); ?>
    </code></pre>
    </div>

</body>

</html>