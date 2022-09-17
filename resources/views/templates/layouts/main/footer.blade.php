{{--        FOOTER INFO CONTENT--}}

@vite('public/css/templates/footer.css')

<div class="font-sans antialiased">
    <footer class="footer">
        <div class="logo">
            <h1>Company's Logo/Name</h1><br>
            <ol>
                <li>English (UK)</li>
                <small>t w i t t e r s © {{date('Y')}}</small>
            </ol>
        </div>

        <div class="quickLinks">
            <h1>Quick Links</h1>
            <ul class="links">
                <li> <a href="{{ route('dashboard')}}">About</a></li>
                <li> <a href="{{ route('homepage')}}">Customers</a></li>
                <li> <a href="{{ route('homepage')}}">Our Services</a></li>
            </ul>
        </div>
        <div class="quickContacts">
            <h1>Contact Us</h1>
            <ul class="links">
                <li>
                    <a href="tel:+9999562348">9999562348</a>
                </li>
                <li>
                    <a href="mailto:xyz@abc.com">sales@abc.com</a>
                </li>
                <li>
                    <address>123 XYZ Building</address>
                </li>
            </ul>
        </div>
    </footer>
</div>
