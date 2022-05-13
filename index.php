<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
margin-top: 30px
}
#top-menu, #footer {
background: #42a2ce;
}

#footer{
padding: 2%;
color: #FFFFFF;
}

#footer h3{
margin-left: 35px;
}

#footer ul {
list-style: none;
}

#footer ul a{
text-decoration: none;
color: #260887;
}

#footer li {
margin-bottom: 8px;
}

#top-menu a, #footer a{
color: #ffffff;
}

#top-menu a:hover{
color: #030663;
}

.pure-u-1.leaderboard {
background: #4b6c9c;
color: #FFFFFF;
}

.brand {
padding: 20px;
}

.call-to-action {
    background: #ec8007;
    color: #fff;
 }

.call-to-action_two {
    background: #5f6cda;
    color: #fff;
}

.header-next h1, .header-next h3{
text-align: center
}

.content.pure-u-1.support {
background-color:#f6f3eb;
border-top: 1px #b6ae8f solid;
border-bottom: 1px #b6ae8f solid;
}

.content.pure-u-1.guaranty {
background-color: #000000;
color: #FFFFFF;
}

.brand > table {
margin-bottom: 20px;
}

.pure-form label{
color:#FFFFFF;
}
    </style>
</head>
<body>
<div class="content pure-u-1">
<div class="pure-g-r">
<div class="content pure-g-r">
    <div class="header pure-u-1">
        <div class="pure-menu pure-menu-open pure-menu-fixed pure-menu-horizontal" id="top-menu">
            <a class="pure-menu-heading" href="">Your Site</a>
            <ul>
                <li class="pure-menu-selected"><a href="home.html">Home</a></li>
                <li><a href="">Pricing</a></li>
                <li><a href="">Contact</a></li>
             </ul>
        </div>
    </div>

    <div class="pure-u-1 leaderboard">
        <div class="pure-g-r">
            <div class="pure-u-1-3">
		<div class="brand">
                <img src="images/7446897394_06cbc34b70.jpg"
                         alt="Vitage Car picture one">
            </div>
	    </div>
            <div class="pure-u-2-3">
                     <h1>
                        This is the Landing Page Heading
                    </h1>
                    <form class="pure-form pure-form-stacked">
    <fieldset>
             <div class="pure-g-r">
            <div class="pure-u-1-3">
                <label for="first-name">First Name</label>
                <input id="first-name" type="text">
            </div>

            <div class="pure-u-1-3">
                <label for="last-name">Last Name</label>
                <input id="last-name" type="text">
            </div>

            <div class="pure-u-1-3">
                <label for="email">E-Mail</label>
                <input id="email" type="email" required>
            </div>

            <div class="pure-u-1-3">
                <label for="city">City</label>
                <input id="city" type="text">
            </div>

            <div class="pure-u-1-3">
                <label for="state">State</label>
                <select id="state" class="pure-input-medium">
                    <option>AL</option>
                    <option>CA</option>
                    <option>IL</option>
                </select>
            </div>
        </div>

        <label for="terms" class="pure-checkbox">
            <input id="terms" type="checkbox"> I've read the terms and conditions
        </label>

        <button type="submit" class="pure-button call-to-action">Submit</button>
    </fieldset>
</form>             </div>
            </div>
        </div>
    </div>
<!-- test -->
<div class="content pure-u-1">
<div class="pure-g-r">
    <div class="pure-u-1-2"><div class="brand">
<h2>Lorem ipsum dolor sit amet, consectetuer.</h2>
<table class="pure-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
	    <th>Place</th>
            <th>Description</th>
            <th>Pricing</th>
        </tr>
    </thead>

    <tbody>
        <tr class="pure-table-odd">
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
	    <td>Berlin</td>
            <td>Lorel Ipsum</td>
            <td>USD$$$</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
            <td>Budapest</td>
	    <td>Lorel Ipsum</td>
            <td>USD$$$</td>
        </tr>

        <tr class="pure-table-odd">
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
            <td>Rome</td>
	    <td>Lorel Ipsum</td>
            <td>USD$$$</td>
        </tr>

        <tr>
            <td>4</td>
            <td>Ford</td>
            <td>Focus</td>
            <td>2008</td>
	    <td>Paris</td>
	    <td>Lorel Ipsum</td>
            <td>USD$$$</td>
        </tr>

        <tr class="pure-table-odd">
            <td>5</td>
            <td>Nissan</td>
            <td>Sentra</td>
            <td>2011</td>
	    <td>Abu dhabi</td>
	    <td>Lorel Ipsum</td>
            <td>USD$$$</td>
        </tr>

        <tr>
            <td>6</td>
            <td>BMW</td>
            <td>M3</td>
            <td>2009</td>
            <td>London</td>
	    <td>Lorel Ipsum</td>
            <td>USD$$$</td>
        </tr>

        <tr class="pure-table-odd">
            <td>7</td>
            <td>Honda</td>
            <td>Civic</td>
            <td>2010</td>
            <td>Oslo</td>
	    <td>Lorel Ipsum</td>
            <td>USD$$$</td>
        </tr>

        <tr>
            <td>8</td>
            <td>Kia</td>
            <td>Soul</td>
            <td>2010</td>
            <td>Miami</td>
            <td>Lorel Ipsum</td>
            <td>USD$$$</td>
        </tr>
    </tbody>
</table><a class="pure-button pure-button-secondary call-to-action_two">Bid this now</a></div></div>
    <div class="pure-u-1-2"><div class="brand"><img src="images/6890478543_c4bb441f22.jpg"
                         alt="Vitage Car picture two"></div></div>
</div>
<!-- 2nd row -->
<div class="pure-g-r">
<div class="pure-u-1-2"><div class="brand"><img src="images/5328836699_7d97f81e9f.jpg"
                         alt="Vitage Car picture three"></div></div>
    <div class="pure-u-1-2"><div class="brand"><p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In posuere felis nec tortor. Pellentesque faucibus. Ut accumsan ultricies elit. Maecenas at justo id velit placerat molestie. Donec dictum lectus non odio. Cras a ante vitae enim iaculis aliquam. Mauris nunc quam, venenatis nec, euismod sit amet, egestas placerat, est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras id elit. Integer quis urna. Ut ante enim, dapibus malesuada, fringilla eu, condimentum quis, tellus. Aenean porttitor eros vel dolor. Donec convallis pede venenatis nibh. Duis quam. Nam eget lacus. Aliquam erat volutpat. Quisque dignissim congue leo.</p><a class="pure-button pure-button-secondary call-to-action_two">Bid this now</a></div></div>
    </div>
<!-- 3rd row -->
<div class="pure-g-r">
    <div class="pure-u-1-2"><div class="brand"><p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In posuere felis nec tortor. Pellentesque faucibus. Ut accumsan ultricies elit. Maecenas at justo id velit placerat molestie. Donec dictum lectus non odio. Cras a ante vitae enim iaculis aliquam. Mauris nunc quam, venenatis nec, euismod sit amet, egestas placerat, est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras id elit. Integer quis urna. Ut ante enim, dapibus malesuada, fringilla eu, condimentum quis, tellus. Aenean porttitor eros vel dolor. Donec convallis pede venenatis nibh. Duis quam. Nam eget lacus. Aliquam erat volutpat. Quisque dignissim congue leo.</p><a class="pure-button pure-button-secondary call-to-action_two">Bid this now</a></div></div>
    <div class="pure-u-1-2"><div class="brand"><img src="images/5442376738_542b02b5be.jpg"
                         alt="Vitage Car picture four"></div></div>
</div>
</div>
<div class="content pure-u-1  support">
<div class="pure-g-r">
<div class="pure-u-1 header-next">
<div class="brand">
<h1>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h1>
<h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
</div>
</div>
</div> 
<div class="pure-g-r">
<div class="pure-u-1-6">
                <div class="brand">
                    <p>
                        <img src="images/3086132328_e2041be795.jpg" id="picone">
                    </p>
		   <h3>Lorem ipsum dolor</h3>
                </div>
            </div>
<div class="pure-u-1-6">
                <div class="brand">
                                  <p>
                        <img src="images/3717404335_90ed081ca8.jpg">
                    </p>
		   <h3>Lorem ipsum dolor</h3>
                </div>
            </div>
<div class="pure-u-1-6">
                <div class="brand">
                              <p>
                       <img src="images/3353936487_2599d7b8dc.jpg">
                    </p>
	            <h3>Lorem ipsum dolor</h3>
                </div>
            </div>
<div class="pure-u-1-6">
                <div class="brand">
                         <p>
                        <img src="images/5688591090_f34179502e.jpg">
                    </p>
		    <h3>Lorem ipsum dolor</h3>
                </div>
            </div>
<div class="pure-u-1-6">
                <div class="brand">
                         <p>
                        <img src="images/6312937936_cebaf2feb9.jpg">
                    </p>
	            <h3>Lorem ipsum dolor</h3>
                </div>
            </div>
<div class="pure-u-1-6">
                <div class="brand">
                        <p>
                        <img src="images/4883281674_8428f07e53_z.jpg">
                    </p>
		    <h3>Lorem ipsum dolor</h3>
                </div>
            </div>
</div>
</div>
<div class="content pure-u-1 guaranty">
<div class="pure-g-r">
<div class="pure-u-1-4">
<p><img src="images/gurranty.png"></p>
</div>
<div class="pure-u-3-4">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros.
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In posuere felis nec tortor. Pellentesque faucibus. Ut accumsan ultricies elit.</p>
</div>
</div>
</div>
<div class="content pure-u-1" id="footer">
<div class="pure-g-r">
<div class="pure-u-1-5">
<h3>Company</h3>
<ul>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
</ul>
</div>
<!--2nd col -->
<div class="pure-u-1-5">
<h3>Products</h3>
<ul>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
</ul>
</div>
<!--3rd col -->
<div class="pure-u-1-5">
<h3>Policy</h3>
<ul>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
</ul>
</div>
<!--4th col -->
<div class="pure-u-1-5">
<h3>Support</h3>
<ul>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
<li><a href="#">Lorel ipsum</a></li>
</ul>
</div>
<!--5th col -->
<div class="pure-u-1-5">
<h3>Social</h3>
<ul>
<li><a href="#"><img src="images/gplus.png"></a></li>
<li><a href="#"><img src="images/facebook.png"></a></li>
<li><a href="#"><img src="images/twitter.png"></a></li>
<li><a href="#"><img src="images/rss.png"></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<script src="http://yui.yahooapis.com/3.10.1/build/yui/yui-min.js"></script>
<script>
YUI().use('node-base', 'node-event-delegate', function (Y) {

    // This just makes sure that the href="#" attached to the <a> elements
    // don't scroll you back up the page.
    Y.one('.content').delegate('click', function (e) {
        e.preventDefault();
    }, 'a[href="#"]');
});
</script>
</body>
</html>