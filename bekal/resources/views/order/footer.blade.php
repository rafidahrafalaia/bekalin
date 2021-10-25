<div class="footer" id="contact">
    <div class="container">
        <div class="agile-footer-grids">
            <div class="col-md-3 col-sm-6 col-xs-6 w3-agile-footer-grid">
                <div class="logo-2">
                    <h2><a href="index.html"><strong>Bekal</strong>.in<span>Surabaya Homemade Food</span></a></h2>
                </div>
                <ul>
                    <li style="color: #ff0000">Address</li>
                    <li>Gang Makam Blok G17, Sukolilo, Surabaya</li>
                    <li style="color: #ff0000">Email</li>
                    <li><a href="mailto:info@example.com">bekal@in.com</a></li>
                    <li style="color: #ff0000">Phone Number</li>
                    <li>0895422861289</li>
                </ul>               
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 w3-agile-footer-grid">
                <h3>Opening Days</h3>
                <h3 style="font-size: 14px;">Senin - Jumat</h3>
                <h3 style="font-size: 16px;">04.30 - 09.00</h3>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 w3-agile-footer-grid grid-w3-1">
                <div class="contact-block-left">
                    <form action="{{url('/setKritiksaran')}}" method="post">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Name" name="Name" required="">
                        <input type="email" class="email" placeholder="Email" name="Email" required="">             
                        <textarea placeholder="Message" name="Message" required=""></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
