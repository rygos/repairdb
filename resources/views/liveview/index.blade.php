<html>
<head>
    {{-- <meta http-equiv="refresh" content="10; URL=http://repair.rmarchiv.tk/liveview"> --}}
    <link href="//fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <!-- latest -->
    <link href="//unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Press+Start+2P);

        /* latin-ext */
        @font-face {
            font-family: 'Press Start 2P';
            font-style: normal;
            font-weight: 400;
            src: local('Press Start 2P Regular'), local('PressStart2P-Regular'), url(https://fonts.gstatic.com/s/pressstart2p/v7/e3t4euO8T-267oIAQAu6jDQyK3nbivNm4I81PZQ.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Press Start 2P';
            font-style: normal;
            font-weight: 400;
            src: local('Press Start 2P Regular'), local('PressStart2P-Regular'), url(https://fonts.gstatic.com/s/pressstart2p/v7/e3t4euO8T-267oIAQAu6jDQyK3nVivNm4I81.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        body {
            padding: 0 2rem;
            margin: 0 2rem;
        }

        #nescss > .container {
            max-width: 980px;
            margin: 0 auto;
            margin-top: 150px;
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9;
            border-bottom: 4px solid #D3D3D3;
            background-color: white;
        }

        header > .container {
            display: flex;
            align-items: baseline;
            max-width: 980px;
            margin: 0 auto;
            padding-top: 1rem;
            transition: all 0.2s ease;
        }

        header > .container > .nav-brand {
            margin-right: auto;
        }

        header > .container > .social-button {
            margin-left: auto;
        }

        .nav-brand .brand-logo {
            margin-right: 1rem;
        }

        .nav-brand > a {
            color: #212529;
            text-decoration: none;
        }

        .social-buttons p {
            margin-bottom: 0;
        }

        /* Header-sticky */
        header.sticky > .container {
            font-size: 0.8rem;
            padding: 0;
            align-items: center;
        }

        header.sticky .nav-brand h1 {
            margin: 0;
        }

        header.sticky .nav-brand p {
            display: none;
            margin-bottom: 0;
            font-size: 0.6rem;
        }

        /* Main */
        .main-content {
            margin-bottom: 4rem;
        }

        /* Footer */
        footer {
            text-align: center;
            margin-bottom: 2rem;
        }

        footer a {
            color: #333;
            text-decoration: none;
        }

        h2 > a {
            margin-right: 1rem;
        }

        .topic {
            margin-bottom: 3rem;
        }

        /* github link */
        .github-link {
            position: fixed;
            top: 100px;
            right: -240px;
            z-index: 999;
            display: flex;
            height: 100px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .github-link.active {
            right: 10px;
        }

        .github-link:hover {
            text-decoration: none;
        }

        .github-link > p.nes-balloon {
            align-self: flex-start;
            padding: 0.2rem 0.5rem;
            font-size: 0.8rem;
            color: #333;
        }

        .github-link > i.nes-octocat {
            align-self: flex-end;
        }

        /* Showcase */
        section.showcase {
            margin-top: 2.5rem;
        }

        section.showcase > section.nes-container {
            padding-bottom: 2.5rem;
        }

        section.showcase > section.nes-container,
        section.showcase > section.samplecode {
            position: relative;
        }

        .nes-btn.showcode {
            position: absolute;
            font-size: 12px;
            bottom: 0px;
            right: -4px;
        }

        .nes-btn.copycode {
            position: absolute;
            font-size: 12px;
            top: 0;
            right: 0px;
        }

        section.showcase > section.samplecode > pre code {
            font-size: 13px;
            line-height: 1.5;
            padding: 1.5rem;
        }

        .item {
            margin-bottom: -1rem;
        }

        .item > * {
            margin-bottom: 1.5rem !important;
        }

        /* Containers */
        .item.containers > .nes-container {
            display: inline-block;
            max-width: 400px;
        }

        /* Balloons sample */
        section.message-list {
            display: flex;
            flex-direction: column;
        }

        .message-list > .message {
            display: flex;
            margin-top: 2rem;
        }

        .message-list > .message > .nes-balloon {
            max-width: 550px;
        }

        .message-list > .message i {
            align-self: flex-end;
        }

        .message-list > .message.-left {
            align-self: flex-start;
        }

        .message-list > .message.-right {
            align-self: flex-end;
        }

        .message-list > .message.-left i {
            margin-right: 2rem;
        }

        .message-list > .message.-right i {
            margin-left: 2rem;
        }

        .icon-list > .blur-filter {
            filter: blur(10px);
        }

        /* Copied balloon */
        .nes-balloon.copied-balloon {
            position: absolute;
            display: none;
            padding: 1rem;
            box-shadow: 0 5px 20px 5px rgba(0, 0, 0, .6);
            z-index: 1;
        }

        /* Topic */
        h3.topic-title {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        h3.topic-title > i {
            margin-right: 1.5rem;
        }

        /* coreteam */
        .coreteam-members {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .nes-container.member-card {
            display: flex;
            padding: 1rem 1.5rem;
            width: 470px;
            margin-bottom: 2rem;
        }

        .member-card .avatar > img {
            display: block;
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .member-card > .profile {
            margin-left: 1.5rem;
        }

        .member-card > .profile > .name {
            font-size: 20px;
        }

        /* Contributors */
        .contributor {
            display: inline-block;
            margin: 1rem;
            text-align: center;
            width: 160px;
        }

        .contributor > p {
            margin: .5rem;
            font-size: 12px;
        }

        .contributor img.nes-avatar {
            transition: all .4s;
            display: inline-block;
        }

        .contributor:hover {
            text-decoration: none;
            opacity: 0.7;
        }

        /* Articles */
        .article-link > .title a {
            color: #333;
        }

        .article-link > .title span {
            margin-left: 1rem;
        }

        /* Scroll back to top */
        .scroll-btn {
            position: fixed;
            bottom: -60px;
            right: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .6);
            transition: all 0.3s ease;
        }

        .scroll-btn.active {
            bottom: 25px;
        }

        .scroll-btn > span {
            display: block;
            transform: rotateZ(90deg);
        }

        img.lazy {
            background-color: #D3D3D3;
        }

        @media screen and (max-width: calc(980px - 4rem)) {
            header > .container {
                margin: 0 4rem;
            }
        }

        @media screen and (max-width: 768px) {
            body {
                margin: 2rem 0.5rem;
                padding: 0;
            }

            header > .container {
                margin: 0 0.5rem;
            }

            .github-link {
                display: none;
            }

            .message-list > .message > .nes-balloon {
                max-width: 60%;
            }
        }

        @media screen and (max-width: 580px) {
            #nescss > .container {
                margin-top: 190px;
            }
        }

        .nes-progress.is-samira::-webkit-progress-bar {
            background-color: #fff;
        }

        .nes-progress.is-samira::-webkit-progress-value {
            background-color: #EE11BB;
        }

        .nes-progress.is-samira::-moz-progress-bar {
            background-color: #EE11BB;
        }

        .nes-progress.is-samira::-ms-fill {
            background-color: #EE11BB;
            border: none
        }

    </style>
</head>
<body>
<div id="nescss">
    <header class="">
        <div class="container">
            <div class="nav-brand">
                <a href="https://nostalgic-css.github.io/NES.css/">
                    <h1>RepairDB</h1>
                </a>
                <p>Live View</p>
            </div>
        </div>
    </header>
    <div class="container">
        <section class="topic">
            <h2 id="about"><a href="#about">#</a>Repairs open</h2>
            <p>
            <div class="nes-table-responsive">
                <table class="nes-table is-bordered is-centered">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Tech1</th>
                        <th>Tech2</th>
                        <th>Tech3</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Total</td>
                        <td id="ro1total"></td>
                        <td id="ro2total"></td>
                        <td id="ro3total"></td>
                    </tr>
                    <tr>
                        <td>New</td>
                        <td id="ro1new"></td>
                        <td id="ro2new"></td>
                        <td id="ro3new"></td>
                    </tr>
                    <tr>
                        <td>Diag/Repair</td>
                        <td id="ro1diag"></td>
                        <td id="ro2diag"></td>
                        <td id="ro3diag"></td>
                    </tr>
                    <tr>
                        <td>Wait for Info</td>
                        <td id="ro1wfi"></td>
                        <td id="ro2wfi"></td>
                        <td id="ro3wfi"></td>
                    </tr>
                    <tr>
                        <td>Ordered</td>
                        <td id="ro1order"></td>
                        <td id="ro2order"></td>
                        <td id="ro3order"></td>
                    </tr>
                    <tr>
                        <td>Mail-In</td>
                        <td id="ro1mail"></td>
                        <td id="ro2mail"></td>
                        <td id="ro3mail"></td>
                    </tr>
                    <tr>
                        <td>KVA</td>
                        <td id="ro1kva"></td>
                        <td id="ro2kva"></td>
                        <td id="ro3kva"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </p>
        </section>
        <section class="topc">
            <h2 id="goal">
                <a href="#goal">#</a>
                Quarter Goal
            </h2>
            <p>
                Goal: <span id="goal1val"></span>/200<br>
                <progress id="goalprog" class="nes-progress is-error" value="" max="200"></progress>
            </p>
        </section>
        <section class="topic">
            <h2 id="usage">
                <a href="#usage">#</a>
                Closed today
            </h2>
            <p>
                Tech1: <span id="prog1val"></span><br>
                <progress id="prog1" class="nes-progress is-primary" value="" max=""></progress>
            </p>
            <p>
                Tech2: <span id="prog2val"></span><br>
                <progress id="prog2" class="nes-progress is-samira" value="" max=""></progress>
            </p>
            <p>
                Tech3: <span id="prog3val"></span><br>
                <progress id="prog3" class="nes-progress is-warning" value="" max=""></progress>
            </p>
        </section>
    </div>
</div>

<script>
    getdata();

    function getdata(){
        $.ajax({
            url: '/data/liveview',
            type: 'GET',
            dataType: 'json',
            success: function(resp) {
                jQuery('#ro1total').html(resp['user'][1]['total']);
                jQuery('#ro2total').html(resp['user'][2]['total']);
                jQuery('#ro3total').html(resp['user'][3]['total']);

                jQuery('#ro1new').html(resp['user'][1]['new']);
                jQuery('#ro2new').html(resp['user'][2]['new']);
                jQuery('#ro3new').html(resp['user'][3]['new']);

                jQuery('#ro1diag').html(resp['user'][1]['rep']);
                jQuery('#ro2diag').html(resp['user'][2]['rep']);
                jQuery('#ro3diag').html(resp['user'][3]['rep']);

                jQuery('#ro1wfi').html(resp['user'][1]['wfi']);
                jQuery('#ro2wfi').html(resp['user'][2]['wfi']);
                jQuery('#ro3wfi').html(resp['user'][3]['wfi']);

                jQuery('#ro1order').html(resp['user'][1]['order']);
                jQuery('#ro2order').html(resp['user'][2]['order']);
                jQuery('#ro3order').html(resp['user'][3]['order']);

                jQuery('#ro1mail').html(resp['user'][1]['mailin']);
                jQuery('#ro2mail').html(resp['user'][2]['mailin']);
                jQuery('#ro3mail').html(resp['user'][3]['mailin']);

                jQuery('#ro1kva').html(resp['user'][1]['kva']);
                jQuery('#ro2kva').html(resp['user'][2]['kva']);
                jQuery('#ro3kva').html(resp['user'][3]['kva']);

                jQuery('#prog1').val(resp['user'][1]['closed_total']);
                jQuery('#prog1').attr("max", resp['closed_total_max']);
                jQuery('#prog1val').html(resp['user'][1]['closed_total']);
                jQuery('#prog2').val(resp['user'][2]['closed_total']);
                jQuery('#prog2').attr("max", resp['closed_total_max']);
                jQuery('#prog2val').html(resp['user'][2]['closed_total']);
                jQuery('#prog3').val(resp['user'][3]['closed_total']);
                jQuery('#prog3').attr("max", resp['closed_total_max']);
                jQuery('#prog3val').html(resp['user'][3]['closed_total']);

                jQuery('#goal1val').html(resp['goal']);
                jQuery('#goalprog').val(resp['goal']);
            },
            complete: function() {
                setTimeout(getdata,5000); //After completion of request, time to redo it after a second
            }
        });
    }
</script>
</body>
</html>
