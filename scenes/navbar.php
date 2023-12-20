<header class="header">
    <a href="index.html">SP</a>
    <nav id="navigation">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="features.php">Features</a>
        <a href="services.php">Services</a>
        <a href="signin.php" id="login-btn">Login</a>
    </nav>
    <div id="top-right-bg"></div>
    <svg id="bars" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" dataSlot="icon"
        className="w-6 h-6">
        <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg>
</header>
<script>
    document.querySelector('#bars').addEventListener('click', (e) => {
        if (document.querySelector('#navigation').style.maxHeight === '') { document.querySelector('#navigation').style.maxHeight = '200px' }
        else if (document.querySelector('#navigation').style.maxHeight === '200px') { document.querySelector('#navigation').style.maxHeight = '0px' }
        else if (document.querySelector('#navigation').style.maxHeight === '0px') { document.querySelector('#navigation').style.maxHeight = '200px' }
    })
</script>