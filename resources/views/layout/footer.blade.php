<div class="container">
    <!-- Footer -->
<footer class="page-footer font-small blue">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        © <span id="currentYear">{{ date('Y') }}</span> Copyright:
        <a href="/">AbedAlmajeed.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<script>
    // JavaScript to dynamically update the current year
    document.getElementById("currentYear").innerText = new Date().getFullYear();
</script>
